@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $contents->id }} のタスク詳細ページ</h1>
    
   <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $contents->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $contents->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $contents->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('contents.edit', 'このタスク編集', ['id' => $contents->id],['class' => 'btn btn-default']) !!}

    {!! Form::model($contents, ['route' => ['contents.destroy', $contents->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection