@extends('layouts.control')

@section('content')
    <div class="container">
    
                <div class="card">
                    <div class="card-header">Edit committee #{{ $committee->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/committees') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('committees.update' , $committee->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('committees.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
