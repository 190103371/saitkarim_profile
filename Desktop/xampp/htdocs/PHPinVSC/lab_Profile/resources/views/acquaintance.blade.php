@extends('layout')

@section('title') Post @endsection

@section('main_content')
    <h1>Acquaintance</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="/acquaintance/store" enctype="multipart/form-data" method="POST">
    
        @csrf
        <input type="name" name="name" id="name" placeholder="Your name.." class="form-control"><br>
        <input type="surname" name="surname" id="surname" placeholder="" class="form-control"><br>
        <input type="email" name="email" id="email" placeholder="emal.." class="form-control"><br>
        <input type="file" name="img" id="img" class="form-control" multiple><br>
        <button type="submit" class="btn btn-success"> Send</button>
    </form>

   
@endsection
