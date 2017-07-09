@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク一覧</h1>

    @if (count($contents) > 0)
        <ul>
            @foreach ($contents as $contents)
                <li>{!! link_to_route('contents.show', $contents->id, ['id' => $contents->id]) !!} :{{ $contents->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection