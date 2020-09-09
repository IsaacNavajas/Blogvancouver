
@extends('layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger col-6">
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="/vancouver" method="POST">

            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="name" class="form-control col-5">
            </div>

            <div class="form-group">
                <textarea name="blog"  cols="80" rows="8" placeholder=" Escribe tu blog en un maximo de 800 caracteres " class="form-control col-5"></textarea>
            </div>

            <input type="submit" class="col-5 btn btn-primary">
        </form>
        <br>

@endsection
