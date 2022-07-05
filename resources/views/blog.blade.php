@extends('template')
@section('content')
    <div class=" text-4xl font-bold flex justify-center p-2 mb rounded-b-xl rounded-t-xl">
        <h1>Listado</h1>
    </div>
    <div class="bg-violet-900 w-full p-[2px] mb-8">
    </div>

    <div class="grid grid-flow-col-dense">
        <div class="bg-indigo-900 rounded-b-lg">
            <ul class="flex justify-around font-bold text-xl">
                <li class="px-16">ID</li>
                <li class="px-16">Nombre</li>
                <li class="px-16">Url</li>
                <li class="px-16">Autor</li>
            </ul>
        </div>
    </div>
    <div class="grid grid-flow-row-dense max-h-[60vh] overflow-auto scroll">
        <div class="p-5">
            @foreach ($posts as $post)
                <div class="grid grid-flow-col-dense">
                    <a href="{{ route('post', $post->slug) }}">
                        <ul class="flex justify-between items-center bg-neutral-900 m-2 mx-3 px-10 rounded-lg">
                            <li class="px-16">{{ $post->id }}</li>
                            <li class="px-16">{{ $post->title }}</li>
                            <li class="px-16">{{ $post->slug }}</li>
                            <li class="px-16">{{ $post->user->name ?? 'No'  }}</li>
                        </ul>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pt-5">
        {{ $posts->links() }}
    </div>


    {{-- <div class="overflow-auto flex justify-around bg-neutral-900 m-2 mx-3 px-10 rounded-lg">

        <div class="grid grid-flow-row place-content-start ">
            <div>id</div>
            @foreach ($posts as $post)

                <div class="bg-violet m-2 mx-3 px-10 rounded-lg">
                    <a href="{{ route('post', $post['slug']) }}">
                        <div class="">
                            <span>{{ $post['id'] }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="grid grid-flow-row place-content-start ">
            <div>nombre</div>
            @foreach ($posts as $post)

                <div class="">
                    <a href="{{ route('post', $post['slug']) }}">
                        <div class="p-2">
                            <span>{{ $post['title'] }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="grid grid-flow-row place-content-start ">
            <div>url</div>
            @foreach ($posts as $post)

                <div class="">
                    <a href="{{ route('post', $post['slug']) }}">
                        <div class="p-2">
                            <span>{{ $post['slug'] }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div> --}}
@endsection
