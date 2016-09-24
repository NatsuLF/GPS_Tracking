<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Request::url() }}">UBIMOV</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::path() ==  '/' ? 'active' : ''  }}">
                    <a href="{{ url('/') }}">
                    <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                        Inicio
                    </a>
                </li>

                <li class="{{ Request::path() ==  'project' ? 'active' : ''  }}">
                    <a href="{{ url('project') }}">
                    <i class="fa fa-flask fa-lg fa-fw" aria-hidden="true"></i>
                        Proyecto
                    </a>
                </li>

                <li class="{{ Request::path() ==  'gps' ? 'active' : ''  }}">
                    <a href="{{ url('gps') }}">
                    <i class="fa fa-location-arrow fa-lg fa-fw" aria-hidden="true"></i>
                        Demo GPS-Tracking
                    </a>
                </li>

                <li class="{{ Request::path() ==  'staff' ? 'active' : ''  }}">
                    <a href="{{ url('staff') }}">
                    <i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>
                        Staff
                    </a>
                </li>

                <li class="{{ Request::path() ==  'contact' ? 'active' : ''  }}">
                    <a href="{{ url('contact') }}">
                    <i class="fa fa-envelope-o fa-lg fa-fw" aria-hidden="true"></i>
                        Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>