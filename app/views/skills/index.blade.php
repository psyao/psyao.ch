@extends('layouts.default')

@section('content')
<ul>
    @foreach($skills as $skill)
        <li>
            {{ $skill->name }}
            {{ link_to_route('admin.skills.edit', 'Edit', $skill->id, ['id' => 'edit-' . $skill->id]) }}
            {{ Form::open(['route' => 'admin.skills.destroy', 'method' => 'DELETE']) }}
                <!-- Form Submit Button -->
                {{ Form::hidden('id', $skill->id) }}
                {{ Form::submit('Delete', ['id' => 'delete-' . $skill->id]) }}
            {{ Form::close() }}
        </li>
    @endforeach
</ul>
@stop
