@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id: {{ $contents->id }} のタスク編集ページ</h1>

 @include('commons.error_contents')

    {!! Form::model($contents, ['route' => ['contents.update', $contents->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection