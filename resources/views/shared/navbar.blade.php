<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Request::url() }}">UBIMOV - GPS Tracking</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ url('/') }}">
                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                Inicio</a></li>
                <li><a href="#">
                <i class="fa fa-flask fa-lg fa-fw" aria-hidden="true"></i>
                Proyecto</a></li>
                <li><a href="#">
                <i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>
                Staff</a></li>
                <li><a href="#">
                <i class="fa fa-envelope-o fa-lg fa-fw" aria-hidden="true"></i>
                Contacto</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>