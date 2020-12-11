<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Player Home</title>


    {{-- tailwind css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="w-8/12 mx-auto">
        <h1 class="bg-red-500 p-6 text-center rounded-lg">Player Home Page</h1>
        <div class="flex p-5 bg-green-500 my-7 justify-between rounded-lg">
            <div class="p-6">
                <a href=" {{ route('add/player')}}" class="bg-green-300 p-3 rounded-lg">Add Players</a>
            </div>
            <div class="p-6">
                <a href=" {{ route('show/all/player')}}" class="bg-blue-300 p-4 rounded-lg">Show All Players</a>
            </div>
        </div>


        <div>
            @yield('content');
        </div>



        <div>
            <a href=" {{ URL('/')}} " class="bg-green-700 p-5 mt-10 rounded-md">Back To Home</a>
        </div>
    </div>
</body>
</html>
