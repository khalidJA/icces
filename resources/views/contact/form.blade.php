<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($contact->name) ? $contact->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($contact->email) ? $contact->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('msg') ? 'has-error' : ''}}">
    <label for="msg" class="control-label">{{ 'Msg' }}</label>
    <input class="form-control" name="msg" type="text" id="msg" value="{{ isset($contact->msg) ? $contact->msg : ''}}" >
    {!! $errors->first('msg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}">
    <label for="subject" class="control-label">{{ 'Subject' }}</label>
    <input class="form-control" name="subject" type="text" id="subject" value="{{ isset($contact->subject) ? $contact->subject : ''}}" >
    {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('agent') ? 'has-error' : ''}}">
    <label for="agent" class="control-label">{{ 'Agent' }}</label>
    <input class="form-control" name="agent" type="text" id="agent" value="{{ isset($contact->agent) ? $contact->agent : ''}}" >
    {!! $errors->first('agent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_readed') ? 'has-error' : ''}}">
    <label for="is_readed" class="control-label">{{ 'Is Readed' }}</label>
    <input class="form-control" name="is_readed" type="text" id="is_readed" value="{{ isset($contact->is_readed) ? $contact->is_readed : ''}}" >
    {!! $errors->first('is_readed', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
