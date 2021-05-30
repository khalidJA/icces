@extends('layouts.control')
@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Create New sub_content</div>
                    <div class="card-body">
                        <a href="{{ url('/sub_contents') }}" title="Back">
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

                        <form method="POST" action="{{ route('sub_contents.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('sub_contents.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
    
@endsection
