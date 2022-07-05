@extends('template')


@section('content')
    <style scoped>
        .scroll::w-webkit-scrollbar-thumb {
            color: blue
        }
    </style>
    {{-- <h1 class="font-bold text-3xl">{{ $post['title'] }}</h1> --}}

    <div class="min-h-[50vh]">
        <div class="flex justify-center bg-violet-900 text-2xl font-bold p-2 mb-10 rounded-b-xl rounded-t-xl">
            <h1 class="px-16">Post Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae possimus nulla, tenetur sit vitae laborum nobis rem aspernatur voluptate aut consectetur necessitatibus facere. Officiis, neque! Quam debitis quasi repellat. - {{ $post->title }}</h1>
        </div>

        <div class="w-full px-5">
            <div></div>
            <div class="pb-20 overflow-auto scroll px-5">{{ $post->body }}</div>
        </div>
    </div>
    <div><p>Autor:</p>
        <p class="pt-2 px-5">-{{ $post->user->name ?? 'Sin autor|' }}</p></div>
    <div class="flex">
        <div class="bg-gray-700 font-bold text-xs mt-32 px-6 py-2 rounded-r-lg ml-5"><a href="{{ route('blog') }}">Back to
                Blog</a></div>
    </div>
@endsection
