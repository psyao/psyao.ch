@extends('layouts.admin')

@section('content')
<section class="skills">
    <div id="skills" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>
                All {{$skills->count() }} Skills
                <a href="{{ route('admin.skills.create') }}" class="btn btn-success pull-right">Add a skill</a>
            </h1>

            <table class="table table-hover">
                @foreach($skills as $skill)
                <tr>
                    <td class="text-right">{{ $skill->id }}</td>

                    <td>{{ $skill->name }}</td>

                    <td width="250px">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->level }}%;">
                                {{ $skill->level }}%
                            </div>
                        </div>
                    </td>

                    <td class="actions">
                        {{ Form::open(['route' => 'admin.skills.destroy', 'method' => 'DELETE', 'class' => 'form-horizontal']) }}
                            <a id="edit-{{ $skill->id }}" href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-primary btn-xs"><span class="fa fa-pencil fa-fw"></span></a>

                            {{ Form::hidden('id', $skill->id) }}
                            <button id="delete-{{ $skill->id }}" type="submit" class="btn btn-danger btn-xs"><span class="fa fa-times fa-fw"></span></button>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@stop
