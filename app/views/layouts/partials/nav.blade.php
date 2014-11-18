<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'psyao.ch', null, ['class' => 'navbar-brand']) }}
        </div>
        <div class="collapse navbar-collapse" id="topbar">
            <ul class="nav navbar-nav navbar-center">
                <li>
                    <a href="#about" title="A propos"><span class="fa fa-user fa-fw"></span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Curriculum vitae"><span class="fa fa-file fa-fw"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#resume">Expériences</a></li>
                        <li><a href="#education">Formations</a></li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#languages">Langues</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#contact" title="Contact"><span class="fa fa-envelope fa-fw"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>