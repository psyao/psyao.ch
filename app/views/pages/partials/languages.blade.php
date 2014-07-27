<!-- Languages -->
<div class="row resume-element">
    <div id="languages" class="anchor">&nbsp;</div>
    <div class="col-sm-3 col-lg-2 col-lg-offset-1">
        <h3><span class="fa fa-cog"></span> Langues</h3>
    </div>
    <div class="col-sm-9">
        @forelse($languages as $language)
            <div class="row">
                <div class="col-xs-12">
                    <h4>
                        {{ $language->name }}
                        @if($language->mother_tongue)
                            <small>langue maternelle</small>
                        @endif
                    </h4>
                </div>

                <div class="col-xs-6 col-md-4 text-center">
                    <canvas id="{{ $language->slug }}-understanding" height="130" width="130"></canvas>
                    <p>Compris</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: {{ $language->understanding }},
                                color:"#1abc9c"
                            },
                            {
                                value : {{ 100 - $language->understanding }},
                                color : "#ecf0f1"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("{{ $language->slug }}-understanding").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>

                <div class="col-xs-6 col-md-4 text-center">
                    <canvas id="{{ $language->slug }}-speaking" height="130" width="130"></canvas>
                    <p>Parlé</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: {{ $language->speaking }},
                                color:"#1abc9c"
                            },
                            {
                                value : {{ 100 - $language->speaking }},
                                color : "#ecf0f1"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("{{ $language->slug }}-speaking").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>

                <div class="col-xs-6 col-md-4 text-center">
                    <canvas id="{{ $language->slug }}-writing" height="130" width="130"></canvas>
                    <p>Ecrit</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: {{ $language->writing }},
                                color:"#1abc9c"
                            },
                            {
                                value : {{ 100 - $language->writing }},
                                color : "#ecf0f1"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("{{ $language->slug }}-writing").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="col-sm-12">
                    <p class="item">Il n'y a aucune langue!</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
<!-- /Languages -->