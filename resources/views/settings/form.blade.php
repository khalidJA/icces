<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($setting->name) ? $setting->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('author') ? 'has-error' : ''}}">
    <label for="author" class="control-label">{{ 'Author' }}</label>
    <input class="form-control" name="author" type="text" id="author" value="{{ isset($setting->author) ? $setting->author : ''}}" >
    {!! $errors->first('author', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($setting->description) ? $setting->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keywords') ? 'has-error' : ''}}">
    <label for="keywords" class="control-label">{{ 'Keywords' }}</label>
    <input class="form-control" name="keywords" type="text" id="keywords" value="{{ isset($setting->keywords) ? $setting->keywords : ''}}" >
    {!! $errors->first('keywords', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($setting->title) ? $setting->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('about') ? 'has-error' : ''}}">
    <label for="about" class="control-label">{{ 'About' }}</label>
    <textarea class="form-control" name="about" type="text" id="editor">{{ isset($setting->about) ? $setting->about : ''}}</textarea>
    {!! $errors->first('about', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
    <label for="logo" class="control-label">{{ 'Logo' }}</label>
    <input class="form-control" name="logo" type="text" id="logo" value="{{ isset($setting->logo) ? $setting->logo : ''}}" >
    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_conf') ? 'has-error' : ''}}">
    <label for="date_conf" class="control-label">{{ 'Date Conf' }}</label>
    <input class="form-control" name="date_conf" type="date" id="date_conf" value="{{ isset($setting->date_conf) ? $setting->date_conf : ''}}" >
    {!! $errors->first('date_conf', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
