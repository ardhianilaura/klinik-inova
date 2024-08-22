@extends('layouts.app')

@section('konten')
<div class="container">
    <h1>Selamat datang, {{ Auth::user()->name }}!</h1>
</div>
@endsection
