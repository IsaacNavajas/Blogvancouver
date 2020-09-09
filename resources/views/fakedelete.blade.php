
@extends('layout')

@section('content')



        <form action="/vancouver/{{$report->id}}" method="POST">

            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="col-5 btn btn-primary">
        </form>

@endsection


