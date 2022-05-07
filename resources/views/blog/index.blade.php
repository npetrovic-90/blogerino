@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class=" py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://pixabay.com/get/gc973a77547db6d2c12c8b3577463c08e698293057ebebc99cdf5535c8065b7eccf9269600eea95c0617adc316e18abdb658b41c86952a59cda90c14980b0295ccb3d60eed86ff2069dbab963f9598a6c_1920.jpg"  alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class=" font-bold italic text-gray-800">
                    {{ $post->user->name }}
                </span>, Created on {{date('jS M Y' ,strtotime($post->updated_at)) }}
            </span>
            <p class=" text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>
            <a href="{{ URL('/blog/'.$post->slug) }}" class=" uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>

    </div>
    @endforeach

@endsection

