
<div class="navbar-fixed-top text-danger" style="background-color: black">
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <a class="navbar-brand" href=" {{ route('home.feeds')}} "><font color="white">V-IEMS</font></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <font color="white">User Management</font></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</div>


<nav class="col-sm-3  navbar-expand">
    <div style="height:60px"></div>


    <ul class="nav nav-pills nav-stacked flex-sm-column" style="background: #0084b4"   >
        <li style="padding: 5px"><a href="{{ route('posts.addpost') }}"><font color="black">Add Post</font></a></li>
        <li style="padding: 5px"><a href="#section1"><font color="black">Q&A</font></a></li>

        <li style="padding: 5px" class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"><font color="black"> Committees</font></span>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a href="{{ route('home.committeefeeds', ['type' => 'ieee'])}}" name="ieee" class="nav-link" ><font color="black">IEEE</font></a></li>
                    <li class="nav-item"> <a href="{{ route('home.committeefeeds', ['type' => 'csi'])}}" name="csi" class="nav-link" ><font color="black">CSI</font></a></li>
                    <li class="nav-item"> <a href="{{ route('home.committeefeeds', ['type' => 'acm'])}}" name="acm" class="nav-link" ><font color="black">ACM</font></a></li>
                    <li class="nav-item"> <a href="{{ route('home.committeefeeds', ['type' => 'itsa'])}}" name="itsa" class="nav-link" ><font color="black">ITSA</font></a></li>
                </ul>
            </div>
        </li>

        <li style="padding: 5px"><a href="#section1"><font color="black">Collaborate</font></a></li>

        <li style="padding: 5px"><a href="#section1"><font color="black">MCQ Test</font></a></li>
    </ul>

    <br>
</nav>

