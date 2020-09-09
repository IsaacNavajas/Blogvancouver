
@extends('layout')

@section('content')

    <div class="content">


        <a href="/">Inicio</a>
        |
        <a href="/vancouver/create">create Blog</a>
        @foreach ($report as $user)

            <p>
                    {{$user->name}} created the blog in {{ $user->created_at->format('d/m/Y') }}

                <p> {{$user->name}} |
                    {{$user->get}} |
                    @if (strlen($user->blog) >= 50)
                        <a href="/vancouver/{{$user->id}}">Read blog </a>|
                    @endif

                    <a href="/vancouver/{{$user->id}}/edit">Edit </a>|
                    <a href="/vancouver/{{$user->id}}/fakedelete">Delete</a>
                </p>

            </p>

        @endforeach
        <div class="center">{{ $report->links() }}</div>


@endsection
