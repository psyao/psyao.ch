<!-- Skills -->
<div class="row resume-element">
    <div id="skills" class="anchor">&nbsp;</div>
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-cog"></span> Compétences</h3>
    </div>
    <div class="col-sm-9">
        @forelse($skills as $skill)
            <div class="col-xs-6 col-md-4 text-center">
                <canvas id="{{ $skill->slug }}" height="130" width="130"></canvas>
                <p>{{ $skill->name }}</p>
                <br>
                <script>
                    var doughnutData = [
                        {
                            value: {{ $skill->level }},
                            color:"#1abc9c"
                        },
                        {
                            value : {{ 100 - $skill->level }},
                            color : "#ecf0f1"
                        }
                    ];
                    var myDoughnut = new Chart(document.getElementById("{{ $skill->slug }}").getContext("2d")).Doughnut(doughnutData);
                </script>
            </div>
        @empty
            <div class="row">
                <div class="col-sm-12">
                    <p class="item">Il n'y a aucune compétence!</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
<!-- /Skills -->