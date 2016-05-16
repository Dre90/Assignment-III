@extends('layout')

@section('title')
    Frontpage - Items
@stop

@section('content')
    <h1>Items</h1>
    @foreach($items as $item)
        <div>
            {{ $item->title }}
        </div>
    @endforeach
@stop
