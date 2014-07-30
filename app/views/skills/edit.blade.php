@extends('layouts.admin')

@section('content')
<section class="skills">
    <div id="skills" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Edit &laquo;{{ $skill->name }}&raquo;</h1>
            {{ Form::model($skill, ['route' => ['admin.skills.update', $skill->id], 'method' => 'PATCH', 'role' => 'form']) }}
                <!-- Name Form Input -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ Form::label('name', 'Name:', ['class' => 'sr-only']) }}
                    {{ Form::text('name', Input::old('name'), ['class' => 'form-control input-lg', 'placeholder' => 'Name']) }}
                    {{ ($errors->has('name') ? '<span class="help-block has-error">' . $errors->first('name') . '</span>' : '') }}
                </div>

                <!-- Level Form Input -->
                <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                    {{ Form::label('level', 'Level:', ['class' => 'sr-only']) }}
                    <div class="input-group input-group-lg">
                        {{ Form::text('level', Input::old('level'), ['class' => 'form-control', 'placeholder' => 'Level']) }}
                        <span class="input-group-addon">%</span>
                    </div>
                    {{ ($errors->has('level') ? '<span class="help-block has-error">' . $errors->first('level') . '</span>' : '') }}
                </div>

                <!-- Form Submit Button -->
                <div class="form-group">
                    {{ Form::submit('Edit Skill', ['class' => 'btn btn-primary btn-block btn-lg']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</section>
@stop
