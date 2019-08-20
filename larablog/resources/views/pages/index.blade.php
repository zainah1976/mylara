@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1> Welcome To TongGas Blog </h1>
<p>This a blog application</p> 
<p>
        <a class="btn btn-primary btn-lg" href="/login"
       role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register"
       role="button">Register</a>
</p> 
</div>
@endsection