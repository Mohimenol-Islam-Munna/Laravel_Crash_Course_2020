@extends('layouts.app');

@section('dynamic_content')
    <div class="w-4/12 bg-white mx-auto pt-6 px-6 pb-4 rounded-lg mb-6">
        <div class="bg-green-300 mb-4 p-4 text-center ">
            <h1 class="uppercase text-lg">Please Login</h1>
        </div>
        <div>
            @if (session('Error'))
                <h2>{{ session('Error') }}</h2>
            @endif

            <form action="{{ URL('/login') }}" method="POST"  class="mb-0">
                @csrf

                {{-- email address  --}}
                <div class="mb-4">
                    <input type="email" name="email" class="@error('email') is-valid @enderror   bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Email Address" value="{{ old('email')}}">


                    @error('email')
                        <div>
                            <h1 class="text-red-300">Please enter valid email address</h1>
                        </div>
                    @enderror
                </div>

                 {{-- password  --}}
                <div class="mb-4">
                    <label for="">Password</label>
                    <input type="password" name="password" class="@error('password') is-valid @enderror bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Password">



                    @error('password')
                        <div>
                            <h1 class="text-red-300">Please enter valid password</h1>
                        </div>
                    @enderror
                </div>

                {{-- remember me  --}}
                <div class="mb-4">
                    <input type="checkbox" name="rememberme">
                    <label for="">Remember Me</label>
                </div>

                {{-- Submit  --}}
                <div class="mb-0">
                    <input type="submit" name="submit" value="LOGIN" class="bg-green-300 border-2 p-4 rounded-lg" >
                </div>
            </form>
        </div>
    </div>
@endsection
