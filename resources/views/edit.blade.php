
@extends('layout')

@section('content')



        <p>{{$report->name}}</p>


        @if ($errors->any())
            <div class="alert alert-danger col-6">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="/vancouver/{{$report->id}}" method="POST">
            @method('PUT')

            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="name" class="form-control col-5" value="{{old('texto', $report->name)}}">
            </div>

            <div class="form-group">
                <textarea name="blog "cols="80" rows="8"autofocus="autofocus" class="form-control col-5">{{$report->blog}}</textarea>
            </div>

            <input type="submit" class="col-5 btn btn-primary">
        </form>

        <br>

@endsection
