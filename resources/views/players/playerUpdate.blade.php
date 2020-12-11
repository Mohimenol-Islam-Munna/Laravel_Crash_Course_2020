@extends('players.playerHome');

@section('content')
    <div>
    <form action="{{ URL('update/player/'.$data->id)}}" method="POST" class="mb-0">
        @csrf

        {{-- name  --}}
        <div class="mb-4">
            <input type="text" name="name" class="@error('name') is-valid border-red-400 @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg"  value="{{ $data->name }}">

            @error('name')
                <div>
                    <h1 class="text-red-300">Name is required|longer</h1>
                </div>
            @enderror

        </div>

        {{-- club --}}
        <div class="mb-4">
            <input type="text" name="club" class="@error('club') is-valid border-red-400 @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $data->club }}">

            @error('club')
                <div>
                    <h1 class="text-red-300">Club Name is required</h1>
                </div>
            @enderror

        </div>

        {{-- jersy --}}
        <div class="mb-4">
            <input type="text" name="jersy" class="@error('jersy') is-valid border-red-400 @enderror   bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $data->jersy }}">


            @error('jersy')
                <div>
                    <h1 class="text-red-300">Please enter jersy nember as a string</h1>
                </div>
            @enderror
        </div>
        {{-- Submit  --}}
        <div class="mb-0">
            <input type="submit" name="submit" value="UPDATE" class="bg-green-300 border-2 p-4 rounded-lg" >
        </div>
    </form>
</div>
@endsection


