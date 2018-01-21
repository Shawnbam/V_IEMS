<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">V-IEMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href=" {{ route('committee') }}"><i class="fa fa-flag" aria-hidden="true"></i> Committees
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="{{ route('user.signup') }}">My Profile</a></li>--}}
                        {{--<li><a href="{{ route('user.signup') }}">SignUp</a></li>--}}
                        {{--<li><a href="{{ route('user.signin') }}">SignIn</a></li>--}}

                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row row-eq-height">
        <div class="col-sm-3 sidenav navbar-default" >
            <h4>Feed</h4>
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="#section1">sec1</a></li>

            </ul><br>
        </div>

