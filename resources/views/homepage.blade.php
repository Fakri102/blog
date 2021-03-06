@extends('layout.app')
@section('title', 'homepage')


@section('content')
<div class="container">
<h1>Home Page</h1>
    <h2>My name is <?=$name?> </h2>
    <h2>My name is {{ $name }} </h2>
    <!-- passing html -->
    my name is {!! $name2 !!}
    my name is {{ $name2}}
</div>

@endsection
