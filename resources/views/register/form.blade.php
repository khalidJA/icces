<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($register->name) ? $register->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($register->email) ? $register->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="{{ isset($register->country) ? $register->country : ''}}" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('work_place') ? 'has-error' : ''}}">
    <label for="work_place" class="control-label">{{ 'Work Place' }}</label>
    <input class="form-control" name="work_place" type="text" id="work_place" value="{{ isset($register->work_place) ? $register->work_place : ''}}" >
    {!! $errors->first('work_place', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($register->phone) ? $register->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="control-label">{{ 'Gender' }}</label>
    <input class="form-control" name="gender" type="text" id="gender" value="{{ isset($register->gender) ? $register->gender : ''}}" >
    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('certi') ? 'has-error' : ''}}">
    <label for="certi" class="control-label">{{ 'Certi' }}</label>
    <input class="form-control" name="certi" type="text" id="certi" value="{{ isset($register->certi) ? $register->certi : ''}}" >
    {!! $errors->first('certi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="text" id="image" value="{{ isset($register->image) ? $register->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
    <label for="file" class="control-label">{{ 'File' }}</label>
    <input class="form-control" name="file" type="text" id="file" value="{{ isset($register->file) ? $register->file : ''}}" >
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($register->title) ? $register->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('abstract') ? 'has-error' : ''}}">
    <label for="abstract" class="control-label">{{ 'Abstract' }}</label>
    <input class="form-control" name="abstract" type="text" id="abstract" value="{{ isset($register->abstract) ? $register->abstract : ''}}" >
    {!! $errors->first('abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_attenders') ? 'has-error' : ''}}">
    <label for="is_attenders" class="control-label">{{ 'Is Attenders' }}</label>
    <input class="form-control" name="is_attenders" type="text" id="is_attenders" value="{{ isset($register->is_attenders) ? $register->is_attenders : ''}}" >
    {!! $errors->first('is_attenders', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_reviewers') ? 'has-error' : ''}}">
    <label for="is_reviewers" class="control-label">{{ 'Is Reviewers' }}</label>
    <input class="form-control" name="is_reviewers" type="text" id="is_reviewers" value="{{ isset($register->is_reviewers) ? $register->is_reviewers : ''}}" >
    {!! $errors->first('is_reviewers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_author') ? 'has-error' : ''}}">
    <label for="is_author" class="control-label">{{ 'Is Author' }}</label>
    <input class="form-control" name="is_author" type="text" id="is_author" value="{{ isset($register->is_author) ? $register->is_author : ''}}" >
    {!! $errors->first('is_author', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('active_code') ? 'has-error' : ''}}">
    <label for="active_code" class="control-label">{{ 'Active Code' }}</label>
    <input class="form-control" name="active_code" type="text" id="active_code" value="{{ isset($register->active_code) ? $register->active_code : ''}}" >
    {!! $errors->first('active_code', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
