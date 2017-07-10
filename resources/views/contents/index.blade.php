@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク一覧</h1>

    @if (count($contents) > 0)
    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>タスク</th>
            <th>ステータス</th>
        </tr>
        </thead>
       <tbody>
       
            @foreach ($contents as $contents)
            <tr> <td>{!! link_to_route('contents.show', $contents->id, ['id' => $contents->id]) !!} </td>
            <td>{{ $contents->content }}</td>
            <td>{{ $contents->status }}</td>
            </tr>
            @endforeach
             </tbody>
             </table>
    
    @endif

  {!! link_to_route('contents.create', '新規タスクの投稿',null, ['class' => 'btn btn-primary']) !!}


 
@endsection

