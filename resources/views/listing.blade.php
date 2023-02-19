@extends('layout')

@section('content')

@if ($listing == null)
    <p>No listing found</p>
@else
<h1>Here is the single listing</h1>
<div>
    <p>{{$listing['title']}}</p>
    <p>{{$listing['description']}}</p>
</div>
@endif

@endsection

