
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{  $Post["title"] }}</h2>
        <h5>{{ $Post["author"] }}</h5>
        <p>{{ $Post["body"] }}</p>
    </article>

<a href="/blog"> Back to Posts</a>

@endsection