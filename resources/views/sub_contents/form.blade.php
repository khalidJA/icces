<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($sub_content->title) ? $sub_content->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" name="content" type="text" id="editor">{{ isset($sub_content->content) ? $sub_content->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::hidden('contents_id', $content->id) !!}
<div class="form-group {{ $errors->has('order_content') ? 'has-error' : ''}}">
    <label for="order_content" class="control-label">{{ 'Order Content' }}</label>
    <input class="form-control" name="order_content" type="text" id="order_content" value="{{ isset($sub_content->order_content) ? $sub_content->order_content : ''}}" >
    {!! $errors->first('order_content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
    <input class="form-control" name="is_active" type="checkbox" id="is_active" {{ isset($sub_content->is_active) && $sub_content->is_active==1 ?'checked':'' }} value="{{ isset($sub_content->is_active)  ? $sub_content->is_active : 0}}" >
    {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
