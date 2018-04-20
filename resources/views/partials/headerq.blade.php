<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    {{--<script src="https://code.jquery.com/jquery-migrate-3.0.1.js" integrity="sha256-VvnF+Zgpd00LL73P2XULYXEn6ROvoFaa/vbfoiFlZZ4=" crossorigin="anonymous"></script>--}}

    {{--<script src="{{ URL::to('viemsvendor/jquery/jquery.min.js') }}"></script>--}}
    <script src="{{ URL::to('viemsvendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('viemsvendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ URL::to('js/sb-admin.min.js') }}"></script>
    <script src="{{ URL::to('tinymce\js\tinymce\tinymce.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('viemsvendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('viemsvendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset('css/body.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset('body.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ URL::to('css/body.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/select2.css') }}">
    {{--<style>--}}
    {{--/* width */--}}
    {{--::-webkit-scrollbar {--}}
    {{--width: 20px;--}}
    {{--}--}}

    {{--/* Track */--}}
    {{--::-webkit-scrollbar-track {--}}
    {{--box-shadow: inset 0 0 5px grey;--}}
    {{--border-radius: 10px;--}}
    {{--}--}}

    {{--/* Handle */--}}
    {{--::-webkit-scrollbar-thumb {--}}
    {{--background: red;--}}
    {{--border-radius: 10px;--}}
    {{--}--}}

    {{--/* Handle on hover */--}}
    {{--::-webkit-scrollbar-thumb:hover {--}}
    {{--background: #b30000;--}}
    {{--}--}}
    {{--</style>--}}
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('home.feeds') }}">V-IEMS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
                <a class="nav-link" href="{{ route('myprofile') }}">
                    <i class="fa fa-user-circle"></i>
                    <span class="nav-link-text">Profile</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ route('posts.addpost') }}">
                    <i class="fa fa-plus"></i>
                    <span class="nav-link-text">Add a Post</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Committees">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCommittees" data-parent="#exampleAccordion">
                    <i class="fa fa-pencil-square-o"></i>
                    <span class="nav-link-text">Q/A Section</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCommittees">
                    <li>
                        <a href="{{ route('qa.postquery') }}">Post a Query</a>
                    </li>
                    <li>
                        <a href="{{ route('query.feeds') }}">View Queries</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-book"></i>
                    <span class="nav-link-text">Committees</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{ route('home.committeefeeds', ['type' => 'ieee'])}}">IEEE</a>
                    </li>
                    <li>
                        <a href="{{ route('home.committeefeeds', ['type' => 'csi'])}}">CSI</a>
                    </li>
                    <li>
                        <a href="{{ route('home.committeefeeds', ['type' => 'acm'])}}">ACM</a>
                    </li>
                    <li>
                        <a href="{{ route('home.committeefeeds', ['type' => 'itsa'])}}">ITSA</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link" href="{{ route('collaborate.view') }}">
                    <i class="fa fa-handshake-o"></i>
                    <span class="nav-link-text">Collaborate</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link" href="{{ route('j.viewj') }}">
                    <i class="fa fa-folder-open-o"></i>
                    <span class="nav-link-text">Journals</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quiz">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseQuiz" data-parent="#exampleAccordion">
                    <i class="fa fa-question" aria-hidden="true"></i>
                    <span class="nav-link-text">Quiz</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseQuiz">
                    <li>
                        <a class="nav-link" href="{{ route('getyourquiz') }}">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span class="nav-link-text">My Quiz</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('giveq') }}">
                            <i class="fa fa-exclamation-circle"></i>
                            <span class="nav-link-text">Attempt</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link" href="{{ route('books.buy') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-link-text">Buy/Sell</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <form action="{{ route('searchq') }}" class="form-inline my-2 my-lg-0 mr-lg-2" method="get">
                    <div class="input-group">
                        <input class="form-control" name="searchtext" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row posts">
            <div class="col-md-9">
                <div class="container">
                    @yield('content')
                </div>
            </div>

            <div class="col-md-3">
                <div class="container">
                    @yield('rec')
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        tinymce.init({
            selector:'textarea',
            plugins: "link code lists",
            menubar:false
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('.ansform').on('submit',function(e){
            var form = $(this);
            var submit = form.find("[type=submit]");
            var submitOriginalText = submit.attr("value");

            e.preventDefault();
            var data = form.serialize();
            var url = form.attr('action');
            var post = form.attr('method');
            $.ajax({
                type : post,
                url : url,
                data :data,
                success:function(data){
                    submit.attr("value", "Submitted");
                },
                beforeSend: function(){
                    submit.attr("value", "Loading...");
                    submit.prop("disabled", true);
                },
                error: function() {
                    submit.attr("value", submitOriginalText);
                    submit.prop("disabled", false);
                    // show error to end user
                }
            })
        })
    </script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <script src="{{ URL::to('js/appmain.js') }}"></script>

    @yield('script')
</div>

</body>

</html>
