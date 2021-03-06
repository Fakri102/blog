@extends('layout.app')
@section('title', 'contact')
@section('content')
<div class="container">
    <!-- <?= "My name is" .htmlspecialchars($name)?> <br> -->
    My name is {{ $name }}
</div>
@endsection