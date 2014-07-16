<section class="resume">
    <div id="resume" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <h4><i class="fa fa-university"></i> Formations</h4>
            </div>
            <div class="col-md-9">
                @foreach($educations as $education)
                <div class="row">
                    <div class="col-md-8">
                        <h5>{{ $education->title }}</h5>
                        <ul>
                            <li>{{ $education->field }}</li>
                            <li>{{ $education->school }}, {{ $education->location }}</li>
                            @if( $education->degree )
                            <li class="degree">{{ $education->degree }}</li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>{{ $education->from->format('d.m.Y') }} - {{ $education->to->format('d.m.Y') }}</li>
                            @if( $education->current )
                            <li>En cours</li>
                            @endif
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>