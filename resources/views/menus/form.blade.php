<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($menu->title) ? $menu->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::hidden('contents_id', $content->id) !!}
<div class="form-group {{ $errors->has('order_menu') ? 'has-error' : ''}}">
    <label for="order_menu" class="control-label">{{ 'Order Menu' }}</label>
    <input class="form-control" name="order_menu" type="text" id="order_menu" value="{{ isset($menu->order_menu) ? $menu->order_menu : ''}}" >
    {!! $errors->first('order_menu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    <label for="is_active" class="control-label">{{ 'Is Active' }}</label>
    <input class="form-control" name="is_active" type="checkbox" id="is_active" {{ isset($menu->is_active) && $menu->is_active==1 ?'checked':'' }}  >
    {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
