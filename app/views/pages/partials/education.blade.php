<!-- Eduction -->
<div class="row resume-element">
    <div id="education" class="anchor">&nbsp;</div>
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-university"></span> Formation</h3>
    </div>
    <div class="col-sm-9">
        @unless($institutes->count())
        <div class="row">
            <div class="col-sm-12">
                <p class="item">Il n'y a aucun établissement!</p>
            </div>
        </div>
        @else
        @foreach($institutes as $institute)
        <div class="row resume-element-item">
            <div class="col-sm-12">
                <h4>{{ $institute->name }}, {{ $institute->location }}</h4>
            </div>

            @forelse($institute->courses as $course)
                <div class="col-sm-8 item">
                    <h5>{{ $course->title }}</h5>

                    <ul>
                        <li>{{ $course->domain }}</li>
                        @if( $course->diploma )
                        <li><em>{{ $course->diploma }}</em></li>
                        @endif
                    </ul>
                </div>

                <div class="col-sm-4">
                    <p>{{ $course->from->format('m.Y') }} -
                        @if( ! is_null($course->to))
                        {{ $course->to->format('m.Y') }}
                        @else
                        A ce jour
                        @endif
                    </p>
                </div>
            @empty
                <div class="col-sm-12 item">
                    <p>Il n'y a aucune orientation!</p>
                </div>
            @endforelse
        </div>
        @endforeach
        @endunless
    </div>
</div>
<!-- /Eduction -->