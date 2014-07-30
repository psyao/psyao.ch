<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to_route('admin_path', 'psyao.ch : administration', null, ['class' => 'navbar-brand']) }}
        </div>
        <div class="collapse navbar-collapse" id="topbar">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Resume"><span class="fa fa-file fa-fw"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header"><span class="fa fa-cog fa-fw"></span> Skills</li>
                        <li><a href="{{ route('admin.skills.index') }}">List all</a></li>
                        <li><a href="{{ route('admin.skills.create') }}">Create</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('home') }}" title="Back to Site"><span class="fa fa-home fa-fw"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>