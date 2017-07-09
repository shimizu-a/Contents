@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $contents->id }} のタスク詳細ページ</h1>
    
    <p>{{ $contents->content }}</p>
    {!! link_to_route('contents.edit', 'このタスク編集', ['id' => $contents->id]) !!}

    {!! Form::model($contents, ['route' => ['contents.destroy', $contents->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection