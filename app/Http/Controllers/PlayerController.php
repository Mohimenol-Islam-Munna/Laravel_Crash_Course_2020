<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\DB;


class PlayerController extends Controller
{

    // player registration
    public function showRegisterForm(){

        return view('players.playersRegister');
    }

    // store player data
    public function store(Request $request){


        // validation

        $validation = $request->validate([

            'name' => 'required|unique:players|max:255',
            'club' => 'required|max:255',
            'jersy' => 'required|max:255',
            'salary_id' => 'required|unique:players|min:3',

        ]);

        // eloquent orm
        $data = array();

        $data['name'] = $request->name;
        $data['club'] = $request->club;
        $data['jersy'] = $request->jersy;
        $data['salary_id'] = $request->salary_id;

        $picture = $request->file('image');

        $upPicture = time().'.'.$picture->extension();

        $picture->move(public_path('images'), $upPicture);

        $data['picture'] = $upPicture;




        DB::table('players')->insert($data);

        return redirect('/players');
    }

    // show all player
    public function index(){

        $data = DB::table('players')->get();

        return view('players.showAllPlayer', compact('data', $data));
    }

    // show single player

    public function show($id){

        $data = DB::table('players')->where('id', $id)->first();

        return view('players.showSinglePlayer', compact('data', $data));

    }

    // update player

    public function updateForm($id){

        $data = DB::table('players')->where('id', $id)->first();

        return view('players.playerUpdate', compact('data', $data));

    }


    public function updateStore(Request $request, $id){



        $validation = $request->validate([

            'name' => 'required|unique:players|max:255',
            'club' => 'required|max:255',
            'jersy' => 'required|max:255',

        ]);

        $result = array();

        $result['name'] = $request->name;
        $result['club'] = $request->club;
        $result['jersy'] = $request->jersy;

        DB::table('players')->where('id', $id)->update($result);

        return redirect()->route('show/all/player');

    }

    // Delete Player
    public function delete($id){


        $data = DB::table('players')->where('id', $id)->first();

        unlink(public_path('images/'.$data->picture));

        DB::table('players')->where('id', $id)->delete();


        return redirect()->route('show/all/player');

    }


}
