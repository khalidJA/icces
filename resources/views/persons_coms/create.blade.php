@extends('layouts.control')
@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Create New persons_com</div>
                    <div class="card-body">
                        <a href="{{ url('/persons_coms') }}" title="Back">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('persons_coms.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('persons_coms.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
    
@endsection
