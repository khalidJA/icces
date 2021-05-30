@extends('layouts.control')
@section('content')
    <div class="container">
     
                <div class="card">
                    <div class="card-header">Create New related_content for Main Content {{ $content->title }}</div>
                    <div class="card-body">
                        <a href="{{ url('/related_contents') }}" title="Back">
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

                        <form method="POST" action="{{ route('rcontents.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('related_contents.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
    
@endsection
