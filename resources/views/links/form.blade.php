<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($link->title) ? $link->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" name="content" id="editor" >{{ isset($link->content) ? $link->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('code_content') ? 'has-error' : ''}}">
    <label for="code_content" class="control-label">Hyper Reference :ink</label>
    <input class="form-control" name="code_content" type="text" id="code_content" value="{{ isset($link->code_content) ? $link->code_content :Str::random(12)}}" >
    {!! $errors->first('code_content', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::hidden('links_id', isset($parent_link)?$parent_link->id:0) !!}
{!! Form::hidden('menus_id', isset($menu)?$menu->id:0) !!}
{!! Form::hidden('is_navbar', isset($is_navbar)?1:0) !!}

<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
    <input class="form-control" name="is_active" type="checkbox" id="is_active" {{ isset($link->is_active) && $link->is_active==1 ?'checked':'' }} value="{{ isset($link->is_active)  ? $link->is_active : 0}}" >
    {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('order_link') ? 'has-error' : ''}}">
    <label for="order_link" class="control-label">{{ 'Order Link' }}</label>
    <input class="form-control" name="order_link" type="text" id="order_link" value="{{ isset($link->order_link) ? $link->order_link : ''}}" >
    {!! $errors->first('order_link', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
