<!-- Occupation -->
<div class="row resume-element">
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-building"></span> Expériences</h3>
    </div>
    <div class="col-sm-9">
        @forelse($companies as $company)
            <div class="row resume-element-item">
                <div class="col-sm-12">
                    <h4>{{ $company->name }}, {{ $company->location }}</h4>
                </div>

                @unless($company->jobs->count())
                <div class="col-sm-12 item">
                    <p>Il n'y a aucun emploi!</p>
                </div>
                @else
                @foreach($company->jobs as $job)
                <div class="col-sm-8 item">
                    <h5>{{ $job->title }}</h5>

                    @if( $job->description )
                    <p>{{ $job->description }}</p>
                    @endif
                </div>

                <div class="col-sm-4">
                    <p>{{ $job->from->format('m.Y') }} -
                        @if( ! is_null($job->to))
                        {{ $job->to->format('m.Y') }}
                        @else
                        A ce jour
                        @endif
                    </p>
                </div>
                @endforeach
                @endunless
            </div>
        @empty
            <div class="row">
                <div class="col-sm-12">
                    <p class="item">Il n'y a aucune expérience!</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
<!-- /Occupation -->