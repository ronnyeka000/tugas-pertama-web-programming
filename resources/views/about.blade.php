
@extends('layout.main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Welcome to About Section</h1>
            <h1 class="mt-3">perkenalkan nama lengkap saya, {{$nama}}</h1>
        </div>
    </div>
</div>
<br>
<hr size="5px" color="black">

@foreach ($posts as $post)
    <article class="mb-5 container">
        <h2> {{$post["judul"]}}</h2>
        <h5> By {{$post["author"]}}</h5>
        <p> {{$post["body"]}}</p>
    </article>  
@endforeach

@endsection   