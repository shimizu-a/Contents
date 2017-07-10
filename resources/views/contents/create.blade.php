@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク新規作成ページ</h1>

@include('commons.error_contents')

<div class="row">
    <div class="col-xs-6">

    {!! Form::model($contents, ['route' => 'contents.store']) !!}
       
        <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        </div>

        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        </div>
        
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    </div>
    </div>
@endsection