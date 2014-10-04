@extends('admin._layouts.default')
 
@section('main')
 
    <h2>新增一个页面</h2>

    {{ Notification::showAll() }}
     
    @if ($errors->any())
            <div class="alert alert-error">
                    {{ implode('<br>', $errors->all()) }}
            </div>
    @endif

    {{ Form::open(array('route' => 'admin.pages.store')) }}

        <div class="control-group">
            {{ Form::label('title', 'Title') }}
            <div class="controls">
                {{ Form::text('title') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('body', 'Content') }}
            <div class="controls">
                {{ Form::textarea('body') }}
            </div>
        </div>

        <div class="form-actions">
            {{ Form::submit('新增', array('class' => 'btn btn-success btn-save btn-large')) }}
            <a href="{{ URL::route('admin.pages.index') }}" class="btn btn-large">取消</a>
        </div>

    {{ Form::close() }}

@stop