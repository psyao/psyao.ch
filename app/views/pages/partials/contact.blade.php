<section class="contact">
    <div id="contact" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row contact-row">
                    <div class="col-sm-3 col-md-4">
                        <h3 class="white"><span class="fa fa-map-marker fa-fw"></span> Contact</h3>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <ul>
                            <li><span class="fa fa-home fa-fw"></span> <a target="_blank" href="https://www.google.com/maps/place/Rue+de+la+Gare+3,+1162+Saint-Prex,+Suisse/@46.482538,6.4568766,17z/data=!3m1!4b1!4m2!3m1!1s0x478c38240d5ccf43:0x971b146567d67a46'">{{ HTML::obfuscate('Rue de la Gare 3, 1162 St-Prex, Suisse') }}</a></li>
                            <li><span class="fa fa-phone fa-fw"></span> <a href="{{ HTML::obfuscate('tel:+ 41 (0) 78 659 59 07') }}">{{ HTML::obfuscate('+ 41 (0) 78 659 59 07') }}</a></li>
                            <li><span class="fa fa-envelope fa-fw"></span> <a href="{{ HTML::obfuscate('mailto:steve.aguet@elysion.ch') }}">{{ HTML::obfuscate('steve.aguet@elysion.ch') }}</a></li>
                        </ul>

                        <iframe class="hidden-xs hidden-sm" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2747.291606178546!2d6.456876599999999!3d46.482538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c38240d5ccf43%3A0x971b146567d67a46!2sRue+de+la+Gare+3%2C+1162+Saint-Prex%2C+Suisse!5e0!3m2!1sfr!2s!4v1405501191233" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row message-row">
                    <div class="col-sm-3 col-md-4">
                        <h3 class="white"><span class="fa fa-comment fa-fw"></span> Message</h3>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        {{ Form::open(['route' => 'contact_path', 'role' => 'form']) }}
                        <!-- Name Form Input -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Nom:', ['class' => 'sr-only']) }}
                            {{ Form::text('name', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre Nom']) }}
                            {{ ($errors->has('name') ? '<span class="help-block has-error">' . $errors->first('name') . '</span>' : '') }}
                        </div>

                        <!-- Email Form Input -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', 'Email:', ['class' => 'sr-only']) }}
                            {{ Form::text('email', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre Email']) }}
                            {{ ($errors->has('email') ? '<span class="help-block has-error">' . $errors->first('email') . '</span>' : '') }}
                        </div>

                        <!-- Subject Form Input -->
                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            {{ Form::label('subject', 'Sujet:', ['class' => 'sr-only']) }}
                            {{ Form::text('subject', null, ['class' => 'form-control input-sm', 'placeholder' => 'Le Sujet']) }}
                            {{ ($errors->has('subject') ? '<span class="help-block has-error">' . $errors->first('subject') . '</span>' : '') }}
                        </div>

                        <!-- Body Form Input -->
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            {{ Form::label('body', 'Message:', ['class' => 'sr-only']) }}
                            {{ Form::textarea('body', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre message']) }}
                            {{ ($errors->has('body') ? '<span class="help-block has-error">' . $errors->first('body') . '</span>' : '') }}
                        </div>

                        <!-- Form Submit Button -->
                        <div class="form-group">
                            {{ Form::submit('Envoyer', ['class' => 'btn btn-success btn-block']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="row social-row text-center">
                    <div class="col-xs-3">
                        <a href="https://www.facebook.com/steve.aguet" title="Profil Facebook" target="_blank"><span class="fa fa-facebook fa-fw"></span></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://www.linkedin.com/pub/steve-aguet/83/915/48a/" title="Profil LinkedIn" target="_blank"><span class="fa fa-linkedin fa-fw"></span></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://twitter.com/elysionworkshop" title="Page Twitter" target="_blank"><span class="fa fa-twitter fa-fw"></span></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="https://github.com/psyao/" title="Page GitHub" target="_blank"><span class="fa fa-github fa-fw"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
