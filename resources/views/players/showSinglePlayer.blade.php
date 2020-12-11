@extends('players.playerHome');

@section('content')
    <div class="w-12/12 p-2 border-green-300 mx-auto">
        <table style="width: 100%; border: 2px solid salmon; text-align: center;">
            <thead>
                <tr >
                    <th>Id</th>
                    <th>Name</th>
                    <th>Club</th>
                    <th>Jersy</th>
                    <th>Salary Id</th>
                </tr>
            </thead>
            <tbody >
                <tr class="border-red">
                    <td> {{ $data->id }}</td>
                    <td> {{ $data->name }}</td>
                    <td> {{ $data->club }}</td>
                    <td> {{ $data->jersy }}</td>
                    <td> {{ $data->salary_id }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection


