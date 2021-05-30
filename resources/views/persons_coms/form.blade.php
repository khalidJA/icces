<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($persons_com->name) ? $persons_com->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('work_place') ? 'has-error' : ''}}">
    <label for="work_place" class="control-label">{{ 'Work Place' }}</label>
    <input class="form-control" name="work_place" type="text" id="work_place" value="{{ isset($persons_com->work_place) ? $persons_com->work_place : ''}}" >
    {!! $errors->first('work_place', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="{{ isset($persons_com->country) ? $persons_com->country : ''}}" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::hidden('committees_id', $committee->id) !!}

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
