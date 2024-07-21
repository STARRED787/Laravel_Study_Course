@extends('layouts.layout01')

<title>Home</title>
@push('styles')
    <style>
        .card-header {
            background-color: rgb(8, 56, 230);
            color: rgb(0, 0, 0);
        }

        .btn-primary {
            background-color: rgb(8, 56, 230);
            color: rgb(17, 0, 0);
        }
    </style>
@endpush



@section('content')
    <h1 class=" text-center">This is Home page</h1>
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
@endsection
