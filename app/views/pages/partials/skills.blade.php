<!-- Skills -->
<div class="row resume-element">
    <div id="skills" class="anchor">&nbsp;</div>
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-cog"></span> Compétences</h3>
    </div>
    <div class="col-sm-9">
        <div class="row">
            @forelse($skills as $skill)
                <div class="col-sm-6 col-md-4">
                    <p>{{ $skill->name }}</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->level }}%;">
                            {{ $skill->level }}%
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12">
                    <p class="item">Il n'y a aucune compétence!</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- /Skills -->