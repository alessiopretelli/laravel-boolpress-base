@extends('layouts.app')

@section('title', 'news')

@section('content')

    <a href="{{route('articles.create')}}">Add news</a>
    
    @if (session('status'))
    <h2>Article deleted!</h2>
    @endif

    @foreach ($articles as $article)
        <a href="{{route('articles.show', ['article' => $article['id']])}}">
            <div class="news">
                <div class="category">
                    <p>{{$article['type']}}</p>
                </div>
                <h1>{{$article['title']}}</h1>
                <h3>{{$article['intro']}}</h3>
                <div class="info_news">
                    <a href="#"><p>{{$article['author']}}</p></a>
                    <p>Date: {{$article['created_at']}}</p>
                </div>
                <div class="settings">
                    <a href="{{route('articles.edit', ['article' => $article['id']])}}">edit</a>
                    <form class='form_delete' action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="post">
                        @csrf
                        @method("DELETE")

                        <button class="delete" type='submit'>delete</button>
                    </form>       
                </div>
            </div>
        </a>
    @endforeach

@endsection