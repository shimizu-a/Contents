@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id: {{ $contents->id }} のタスク編集ページ</h1>

 @include('commons.error_contents')

<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset col-md-8 col-lg-offset-3 col-lg-6">

    {!! Form::model($contents, ['route' => ['contents.update', $contents->id], 'method' => 'put']) !!}
        
        <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        </div>

        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        </div>

        {!! Form::submit('更新',['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}

@endsection