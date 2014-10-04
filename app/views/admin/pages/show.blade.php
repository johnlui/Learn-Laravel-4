@extends('admin._layouts.default')
 
@section('main')
 
    <h2>页面内容</h2>

        <div id="onepage">
            
            <div class="title">
                <h3>{{ $page->title }}</h3>
            </div>

            <div class="info">
            	由 {{ $author }} 发布于 {{ $page->created_at }} 最后更新 {{ $page->updated_at }}
            </div>

            <div class="body">
                {{ $page->body }}
            </div>

        </div>
 
@stop