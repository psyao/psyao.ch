@extends('layouts.default')

@section('content')
<ul>
    @foreach($skills as $skill)
        <li>{{ $skill->name }}</li>
    @endforeach
</ul>
@stop
