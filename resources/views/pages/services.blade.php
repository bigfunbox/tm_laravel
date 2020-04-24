@extends('layouts.app')
@section('pagetitle')Services @endsection 
@section('content')
    <h1>Services</h1>
    @if(count($services) > 0)
    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
    @endif
@endsection