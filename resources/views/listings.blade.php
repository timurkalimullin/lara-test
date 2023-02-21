@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="p-4">
    @unless (count($listings) == 0)

    @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach

    @else
        <p>No lisstings found</p>
    @endunless
</div>
@endsection
