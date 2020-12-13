@extends('layouts.app')

@section('dynamic_content')
    <div>
        <div class="w-8/12 bg-white p-6 justify-center rounded-lg mx-auto">
            <form action="{{ URL('/posts') }}" method="POST"  class="mb-0">
                @csrf
                <div class="mb-4">
                    @if (session('result'))
                        <h2 class="bg-green-300 border-2 w-full p-4 rounded-lg">
                            {{ session('result')}}
                        </h2>
                    @endif
                </div>
                {{-- post body  --}}
                <div class="mb-4">
                    <label for="" class="pb-4 mb-3">write your post</label>
                    <textarea rows="7" name="body" class="@error('body') is-valid  @enderror bg-gray-100 border-2 w-full p-4 pl-0 rounded-lg">
                    </textarea>


                    @error('body')
                        <div>
                            <h1 class="text-red-300">It doesn't empty</h1>
                        </div>
                    @enderror
                </div>

                {{-- Submit  --}}
                <div class="mb-0">
                    <input type="submit" name="submit" value="Submit Post" class="bg-green-300 border-2 p-4 rounded-lg" >
                </div>
            </form>
        </div>

        {{-- show post  --}}
        <div class="w-8/12 mt-6 justify-center rounded-lg mx-auto">
            <div class="w-12/12 bg-green-300 p-4 rounded-lg mb-1">
                <h1 class="text-center mx-5 ">All Post</h1>
            </div>

            <div class="mt-1">
                @foreach ($data as $item)
                    <div class="bg-white p-6 mb-2 rounded-lg">
                        <span>Author : {{ $item->user->name }} </span><br>
                        <span>Date : {{ $item->created_at->diffForHumans() }}</span>
                        {{-- post body  --}}
                        <p class="mt-5 text-justify">
                            {{ $item->body }}
                        </p>

                        <div class="flex items-center mt-2">

                            @if ($item->like->contains('user_id', auth()->user()->id ))
                                <form action="{{ URL('/unlike/'.$item->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="mr-1 text-blue-500">Unlike</button>
                                </form>

                            @else
                                <form action="{{ URL('/like/'. $item->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="mr-1 text-blue-500">Like</button>
                                </form>
                            @endif

                            <span>{{ $item->like->count()}} {{ Str::plural('like', $item->like->count() )}}</span>
                        </div>
                    </div>

                @endforeach


                <div class="bg-white rounded-lg mb-6">
                    <div class="bg-green-300 p-4 mb-2 rounded-lg">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

