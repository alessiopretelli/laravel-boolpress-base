@extends('layouts.app')

@section('title', 'add_article')

@section('content')

<form action="{{route('articles.update', ['article' => $article_to_update['id']])}}" method="post">
    @csrf
    @method('PUT')

    <label for="title">title</label>
    <input type="text" name="title" value="{{$article_to_update->title}}">

    <label for="content">intro</label>
    <input type="text" name="intro"  value="{{$article_to_update->intro}}">

    <label for="content">body</label>
    <input type="text" name="body"  value="{{$article_to_update->body}}">

    <label for="content">author</label>
    <input type="text" name="author"  value="{{$article_to_update->author}}">

    <label for="content">type</label>
    <input type="text" name="type"  value="{{$article_to_update->type}}">

    <input type="submit" value="send">
    </form>

@endsection