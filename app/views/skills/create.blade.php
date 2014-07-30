@extends('layouts.admin')

@section('content')
<section class="skills">
    <div id="skills" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Add a Skill</h1>

            {{ Form::open(['route' => 'admin.skills.store', 'role' => 'form']) }}
                <!-- Name Form Input -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ Form::label('name', 'Name:', ['class' => 'sr-only']) }}
                    {{ Form::text('name', null, ['class' => 'form-control input-lg', 'placeholder' => 'Name']) }}
                    {{ ($errors->has('name') ? '<span class="help-block has-error">' . $errors->first('name') . '</span>' : '') }}
                </div>

                <!-- Level Form Input -->
                <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                    {{ Form::label('level', 'Level:', ['class' => 'sr-only']) }}
                    <div class="input-group input-group-lg">
                        {{ Form::text('level', null, ['class' => 'form-control', 'placeholder' => 'Level']) }}
                        <span class="input-group-addon">%</span>
                    </div>
                    {{ ($errors->has('level') ? '<span class="help-block has-error">' . $errors->first('level') . '</span>' : '') }}
                </div>

                <!-- Form Submit Button -->
                <div class="form-group">
                    {{ Form::submit('Add Skill', ['class' => 'btn btn-primary btn-block btn-lg']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</section>
@stop
