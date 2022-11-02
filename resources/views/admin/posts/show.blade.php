@extends('layouts.app')

@section('metaTitle', 'Post: ' . $post->title)

@section('content')
    <div class="container my-5">
        <div class="row py-5">
            <div class="col-8 m-auto bg-light p-5 ">
                <div class="col-12">
                    <img src=" {{$post->cover_path}} " width="400" alt="">
                </div>
                <h3 class="py-3"><strong>Titolo: </strong> {{ $post->title }}</h3>
                <p><strong>Slug: </strong><em>{{ $post->slug }}</em></p>
                @if ($post->category)
                    <p><strong>Categoria:</strong> {{ $post->category->name }}</p>
                @endif
                <p><strong>Tags:</strong></p>
                <ul>
                    @foreach ($post->tags as $tag)
                        <li>{{$tag->name}}</li>
                    @endforeach
                </ul>
                <p><strong>Contenuto:</strong></p>
                <p>{{ $post->content }}</p>
                <div class="buttons mt-4 d-flex justify-content-between align-items-center">
                    <a class="btn btn-dark shadow " href="{{ route('admin.posts.index') }}">Torna indietro</a>
                    <a class="btn btn-primary shadow " href="{{ route('admin.posts.edit', compact('post')) }}">Modifica</a>
                </div>
            </div>
        </div>
    </div>
@endsection
