@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク新規作成ページ</h1>

@include('commons.error_contents')


    {!! Form::model($contents, ['route' => 'contents.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection