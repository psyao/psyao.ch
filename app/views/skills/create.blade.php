@extends('layouts.default')

@section('content')
{{ Form::open(['route' => 'admin.skills.store', 'role' => 'form']) }}
    <!-- Name Form Input -->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        {{ ($errors->has('name') ? '<span class="help-block has-error">' . $errors->first('name') . '</span>' : '') }}
    </div>

    <!-- Level Form Input -->
    <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
        {{ Form::label('level', 'Level:') }}
        {{ Form::text('level', null, ['class' => 'form-control']) }}
        {{ ($errors->has('level') ? '<span class="help-block has-error">' . $errors->first('level') . '</span>' : '') }}
    </div>

    <!-- Form Submit Button -->
    <div class="form-group">
        {{ Form::submit('Add Skill', ['class' => 'btn btn-success btn-block']) }}
    </div>
{{ Form::close() }}
@stop
