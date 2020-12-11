@extends('players.playerHome');

@section('content')
    <div>
    <form action="{{ route('add/player') }}" method="POST" class="mb-0" enctype="multipart/form-data">
        @csrf

        {{-- name  --}}
        <div class="mb-4">
            <input type="text" name="name" class="@error('name') is-valid border-red-400 @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Name" value="{{ old('name')}}">

            @error('name')
                <div>
                    <h1 class="text-red-300">Name is required|longer</h1>
                </div>
            @enderror

        </div>

        {{-- club --}}
        <div class="mb-4">
            <input type="text" name="club" class="@error('club') is-valid border-red-400 @enderror  bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Club" value="{{ old('club')}}">

            @error('club')
                <div>
                    <h1 class="text-red-300">Club Name is required</h1>
                </div>
            @enderror

        </div>

        {{-- jersy --}}
        <div class="mb-4">
            <input type="text" name="jersy" class="@error('jersy') is-valid border-red-400 @enderror   bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="jersy" value="{{ old('jersy')}}">


            @error('jersy')
                <div>
                    <h1 class="text-red-300">Please enter jersy nember as a string</h1>
                </div>
            @enderror
        </div>

        {{-- salary id  --}}
        <div class="mb-4">
            <input type="number" name="salary_id" class="@error('salary_id') is-valid border-red-400 @enderror bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="salary_id">



            @error('salary_id')
                <div>
                    <h1 class="text-red-300">Please enter salary id</h1>
                </div>
            @enderror
        </div>

        {{-- upload picture  --}}
        <div class="mb-4">

            <label for="">Upload Image</label>
            <input type="file" name="image" class="@error('image') is-valid border-red-400 @enderror bg-gray-100 border-2 w-full p-4 rounded-lg">



            @error('image')
                <div>
                    <h1 class="text-red-300">Please upload valide image</h1>
                </div>
            @enderror
        </div>


        {{-- Submit  --}}
        <div class="mb-0">
            <input type="submit" name="submit" value="SUBMIT" class="bg-green-300 border-2 p-4 rounded-lg" >
        </div>
    </form>
</div>
@endsection


