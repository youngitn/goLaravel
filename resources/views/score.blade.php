@extends('layouts.master')

@section('title','detail')

@section('content')
    <div class="page-header">
        <h1>detail</h1>
    </div>
    <div class="row">
    <p>
        {{ $scores[0]['math'] }}
    </p>
    </div>
@stop