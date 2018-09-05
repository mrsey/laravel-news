@extends('layout.app')
@section('content')
<h1>Home</h1>
@endsection
@section('sidebar')
    @parent
    <h3>this is sidebar appended</h3>
@endsection