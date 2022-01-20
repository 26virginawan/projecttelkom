<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Manajemen CDC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('asset/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/adminlte.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #fff;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h3 class="font-weight-bold">Manajemen CDC</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="/home">Dashboard <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link text-dark font-weight-bold" href="/dataresume" tabindex="-1"
                                aria-disabled="true">Data
                                Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="dataangsur" tabindex="-1"
                                aria-disabled="true">Data
                                Angsuran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="datasalur" tabindex="-1"
                                aria-disabled="true">Data
                                Salur</a>
                        </li>
                        <li class="nav-item">

                            <a class="btn btn-primary btn-sm rounded-pill mt-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
    @yield('content')
    </main>
    </div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    <script src="{{asset('asset/js/adminlte.js')}}"></script>
    <script src="{{asset('asset/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>

    <script type="text/javascript">
    $('#btn').on('click', function() {
        $('#goalmodal').modal('show');
    });
    </script>








</body>

</html>
</body>

</html>