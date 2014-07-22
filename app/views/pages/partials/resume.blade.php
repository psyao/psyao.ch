<section class="resume">
    <div id="resume" class="anchor">&nbsp;</div>
    <div class="container">
        <!-- Occupation -->
        <div class="row resume-element">
            <div class="col-md-2 col-md-offset-1">
                <h3><span class="fa fa-building"></span> Expériences</h3>
            </div>
            <div class="col-md-9 hr">
                @unless($companies->count())
                <div class="row">
                    <div class="col-md-12">
                        <p class="item">Il n'y a aucune expérience!</p>
                    </div>
                </div>
                @else
                @foreach($companies as $company)
                <div class="row resume-element-item">
                    <div class="col-md-12">
                        <h4>{{ $company->name }}, {{ $company->location }}</h4>
                    </div>

                    @unless($company->jobs->count())
                    <div class="col-md-12 item">
                        <p>Il n'y a aucun emploi!</p>
                    </div>
                    @else
                    @foreach($company->jobs as $job)
                    <div class="col-md-8 item">
                        <h5>{{ $job->title }}</h5>

                        @if( $job->description )
                        <p>{{ $job->description }}</p>
                        @endif
                    </div>

                    <div class="col-md-4">
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
                @endforeach
                @endunless
            </div>
        </div>
        <!-- /Occupation -->

        <!-- Eduction -->
        <div class="row resume-element">
            <div id="education" class="anchor">&nbsp;</div>
            <div class="col-md-2 col-md-offset-1">
                <h3><span class="fa fa-university"></span> Formation</h3>
            </div>
            <div class="col-md-9 hr">
                @unless($institutes->count())
                <div class="row">
                    <div class="col-md-12">
                        <p class="item">Il n'y a aucun établissement!</p>
                    </div>
                </div>
                @else
                @foreach($institutes as $institute)
                <div class="row resume-element-item">
                    <div class="col-md-12">
                        <h4>{{ $institute->name }}, {{ $institute->location }}</h4>
                    </div>

                    @unless($institute->courses->count())
                    <div class="col-md-12 item">
                        <p>Il n'y a aucune orientation!</p>
                    </div>
                    @else
                    @foreach($institute->courses as $course)
                    <div class="col-md-8 item">
                        <h5>{{ $course->title }}</h5>

                        <ul>
                            <li>{{ $course->domain }}</li>
                            @if( $course->diploma )
                            <li><em>{{ $course->diploma }}</em></li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <p>{{ $course->from->format('m.Y') }} -
                            @if( ! is_null($job->to))
                            {{ $course->to->format('m.Y') }}
                            @else
                            A ce jour
                            @endif
                        </p>
                    </div>
                    @endforeach
                    @endunless
                </div>
                @endforeach
                @endunless
            </div>
        </div>
        <!-- /Eduction -->
    </div>
</section>