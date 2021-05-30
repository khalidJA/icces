@extends('layouts.app')
@section('content')
    @if ($success)
    <h3 class="alert alert-success m-auto w-50">{{ $msg }}</h3>
    @else
    <h3 class="alert alert-danger m-auto w-50">{{ $msg }}</h3> 
    @endif


@endsection