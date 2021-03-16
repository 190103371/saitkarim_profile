@extends('layout')

@section('title') Post @endsection

@section('main_content')
    <h1>Post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form method="post" action="/post/check">
        @csrf
        <input type="text" name="title" id="title" placeholder="Title" class="form-control"><br>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Text me..."></textarea><br>
        <button type="submit" class="btn btn-success"> Send</button>
    </form>
    
    <h1>All your texts</h1>
    @foreach($posts as $el)
        <div class="alert alert-warning">
            <h5>{{ $el->id}}. {{ $el->title }}</h5>
            <b>{{ $el->body }}</b>
            
        </div>
    @endforeach
@endsection