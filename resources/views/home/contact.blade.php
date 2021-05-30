@extends('layouts.app')
@section('content')
<div id="scroll"></div>
<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Join to Icces 2021</legend>
          <div class="row">
            <div class="col-md-6">
                <div class="group {{ $errors->has('name') ? 'has-error' : ''}}">
                  
                    <input  name="name" type="text"  value="{{ old('name') }}">
                    <span class="highlight"></span><span class="bar"></span>
                    <label for="name" >Full Name</label>
                    {!! $errors->first('name', '<p class="help-block text-danger">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="group {{ $errors->has('email') ? 'has-error' : ''}}">
                  
                    <input  name="email" type="email"  value="{{ old('email') }}">
                    <span class="highlight"></span><span class="bar"></span>
                    <label for="email" >Email Address</label>
                    {!! $errors->first('email', '<p class="help-block text-danger">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="group {{ $errors->has('subject') ? 'has-error' : ''}}">
                  
                    <input  name="subject" type="text"  value="{{ old('subject') }}">
                    <span class="highlight"></span><span class="bar"></span>
                    <label for="subject" >Subject </label>
                    {!! $errors->first('subject', '<p class="help-block text-danger">:message</p>') !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="group {{ $errors->has('msg') ? 'has-error' : ''}}">
        
                    <textarea  name="msg" rows="6" placeholder="Write Message Here">{{ old('msg') }}</textarea>
                    <span class="highlight"></span><span class="bar"></span>
                    <label for="msg" >Message (255 Character) </label>
                    {!! $errors->first('msg', '<p class="help-block text-danger">:message</p>') !!}
                </div>
            </div>
          </div>
    </fieldset>
    <div class="row text-center">
        <div class="col-12">
           {{ csrf_field() }}
           <button class="btn btn-submit m-auto w-50" type="submit">Send Message</button>
        </div>
    </div>
</form>
@endsection