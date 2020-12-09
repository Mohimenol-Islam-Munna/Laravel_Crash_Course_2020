@extends('layouts.app');

@section('dynamic_content')
    <div class="w-5/12 bg-white mx-auto pt-6 px-6 pb-4 rounded-lg mb-6">
        <div class="bg-green-300 mb-4 p-4 text-center ">
            <h1 class="uppercase text-lg">Please Register</h1>
        </div>
        <div>
            <form action="{{ URL('/register') }}" method="POST" class="mb-0">
                @csrf

                {{-- first name  --}}
                <div class="mb-4">
                    <input type="text" name="fname" class="@error('faname') is-valid @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="First Name" value="{{ old('fname')}}">

                    @error('fname')
                        <div>
                            <h1 class="text-red-300">Name is required|longer</h1>
                        </div>
                    @enderror

                </div>

                {{-- user name  --}}
                <div class="mb-4">
                    <input type="text" name="uname" class="@error('uname') is-valid @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="User Name" value="{{ old('uname')}}">

                    @error('uname')
                        <div>
                            <h1 class="text-red-300">Name is required|longer</h1>
                        </div>
                    @enderror

                </div>

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
                    <input type="password" name="password" class="@error('password') is-valid @enderror bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Password">



                    @error('password')
                        <div>
                            <h1 class="text-red-300">Please enter valid password</h1>
                        </div>
                    @enderror
                </div>

                {{-- Confirm Password  --}}
                <div class="mb-4">
                    <input type="password"  name="password_confirmation" class="@error('password_confirmation') is-valid @enderror bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Confirm Password">



                    @error('password_confirmation')
                        <div>
                            <h1 class="text-red-300">Password does not match</h1>
                        </div>
                    @enderror
                </div>

                {{-- Submit  --}}
                <div class="mb-0">
                    <input type="submit" name="submit" value="SUBMIT" class="bg-green-300 border-2 p-4 rounded-lg" >
                </div>
            </form>
        </div>
    </div>
@endsection
