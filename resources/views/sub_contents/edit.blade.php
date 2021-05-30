@extends('layouts.control')

@section('content')
    <div class="container">
    
                <div class="card">
                    <div class="card-header">Edit sub_content #{{ $sub_content->title }}</div>
                    <div class="card-body">
                        <a href="{{ route('sub_contents.index', $content->id ) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('sub_contents.update' , $sub_content->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('sub_contents.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
