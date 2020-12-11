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
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($data as $item)
                    <tr class="border-red">
                        <td> {{ $item->id }}</td>
                        <td> {{ $item->name }}</td>
                        <td> {{ $item->club }}</td>
                        <td> {{ $item->jersy }}</td>
                        <td> {{ $item->salary_id }}</td>
                        <td>
                            {{-- here we can use asset() or URL::to  --}}
                            <img src="{{ asset('images/'.$item->picture) }}" width="80px" height="80px" alt="Profile Picture">
                        </td>
                        <td>
                            <span> <a href=" {{ URL('show/player/'.$item->id) }}">Show</a></span>
                            <span> <a href=" {{ URL('update/player/'.$item->id) }}">Update</a></span>
                            <span> <a href=" {{ URL('delete/player/'.$item->id) }}">Delete</a></span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


