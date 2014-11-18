<!-- Languages -->
<div class="row resume-element">
    <div id="languages" class="anchor">&nbsp;</div>
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-cog"></span> Langues</h3>
    </div>
    <div class="col-sm-9">
        <div class="row">
            @forelse($languages as $language)
                <div class="col-sm-6 col-md-4">
                    <p>{{ $language->name }}</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $language->understanding }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $language->understanding }}%;">
                            Compris - {{ $language->understanding }}%
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $language->speaking }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $language->speaking }}%;">
                            Parlé - {{ $language->speaking }}%
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $language->writing }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $language->writing }}%;">
                            Ecrit - {{ $language->writing }}%
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12">
                    <p class="item">Il n'y a aucune langue!</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- /Languages -->
