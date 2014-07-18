<section class="contact white">
    <div id="contact" class="anchor">&nbsp;</div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3 class="white"><i class="fa fa-map-marker"></i> Contact</h3>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><i class="fa fa-home fa-fw"></i> <a target="_blank" href="https://www.google.com/maps/place/Rue+de+la+Gare+3,+1162+Saint-Prex,+Suisse/@46.482538,6.4568766,17z/data=!3m1!4b1!4m2!3m1!1s0x478c38240d5ccf43:0x971b146567d67a46'">{{ HTML::obfuscate('Rue de la Gare 3, 1162 St-Prex, Suisse') }}</a></li>
                    <li><i class="fa fa-phone fa-fw"></i> <a href="{{ HTML::obfuscate('tel:+ 41 (0) 78 659 59 07') }}">{{ HTML::obfuscate('+ 41 (0) 78 659 59 07') }}</a></li>
                    <li><i class="fa fa-envelope fa-fw"></i> <a href="{{ HTML::obfuscate('mailto:steve.aguet@elysion.ch') }}">{{ HTML::obfuscate('steve.aguet@elysion.ch') }}</a></li>
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2747.291606178546!2d6.456876599999999!3d46.482538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c38240d5ccf43%3A0x971b146567d67a46!2sRue+de+la+Gare+3%2C+1162+Saint-Prex%2C+Suisse!5e0!3m2!1sfr!2s!4v1405501191233" frameborder="0"></iframe>
            </div>
            <div class="col-md-2">
                <h3 class="white"><i class="fa fa-comment"></i> Message</h3>
            </div>
            <div class="col-md-4">
                {{ Form::open(['role' => 'form']) }}
                    <!-- Name Form Input -->
                    <div class="form-group">
                        {{ Form::label('Name', 'Nom:', ['class' => 'sr-only']) }}
                        {{ Form::text('Name', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre Nom', 'required']) }}
                    </div>

                    <!-- Email Form Input -->
                    <div class="form-group">
                        {{ Form::label('email', 'Email:', ['class' => 'sr-only']) }}
                        {{ Form::email('email', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre Email', 'required']) }}
                    </div>

                    <!-- Phone Form Input -->
                    <div class="form-group">
                        {{ Form::label('phone', 'Téléphone:', ['class' => 'sr-only']) }}
                        {{ Form::text('phone', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre Téléphone']) }}
                    </div>

                    <!-- Subject Form Input -->
                    <div class="form-group">
                        {{ Form::label('subject', 'Sujet:', ['class' => 'sr-only']) }}
                        {{ Form::text('subject', null, ['class' => 'form-control input-sm', 'placeholder' => 'Le Sujet', 'required']) }}
                    </div>

                    <!-- Message Form Input -->
                    <div class="form-group">
                        {{ Form::label('message', 'Message:', ['class' => 'sr-only']) }}
                        {{ Form::textarea('message', null, ['class' => 'form-control input-sm', 'placeholder' => 'Votre message', 'required']) }}
                    </div>

                    <!-- Form Submit Button -->
                    <div class="form-group">
                        {{ Form::submit('Envoyer', ['class' => 'btn btn-green btn-block']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="row">
            <div class="social centered">
                <a href="https://www.facebook.com/steve.aguet" title="Profil Facebook" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
                <a href="https://www.linkedin.com/pub/steve-aguet/83/915/48a/" title="Profil LinkedIn" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
                <a href="https://twitter.com/elysionworkshop" title="Page Twitter" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
                <a href="https://github.com/psyao" title="Page Github" target="_blank"><i class="fa fa-github fa-fw"></i></a>
                <a href="https://bitbucket.org/psyao/" title="Page BitBucket" target="_blank"><i class="fa fa-bitbucket fa-fw"></i></a>
            </div>
        </div>
    </div>
</section>
