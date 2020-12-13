<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- tailwind css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body class="bg-gray-200 mt-0 pt-0">
    {{-- menu items  --}}
    <nav class="p-5 bg-white flex justify-between mt-0 mb-6 sticky top-0 left-0 right-0">
        {{-- left menu items  --}}
        <ul class="flex justify-center">
            <li class="p-4 ">
                <a href="{{ URL('/') }}">Home</a>
            </li>

                <li class="p-4 ">
                    <a href=" {{ route('dashboard') }}">Dashboard</a>
                </li>

            <li class="p-4 ">
                <a href=" {{ URL('/posts') }}">Posts</a>
            </li>
        </ul>

        {{-- right menu items  --}}
        <ul class="flex justify-center">
            @guest
                <li class="p-4 ">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-4 ">
                    <a href="{{ URL('/register') }}">Register</a>
                </li>

            @else

                <li class="p-4 ">
                    <a href="">{{ Auth::user()->name }}</a>
                </li>
                <li class="p-4 ">
                    <form action="{{ URL('/logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
    {{-- end menu items  --}}


    {{-- template inheritence  --}}
    <div>
        @yield('dynamic_content')
    </div>

</body>
</html>
