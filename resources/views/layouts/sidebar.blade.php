<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MANAJEMEN CDC</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logoplasa.png">
    <!-- Custom Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="img/logoplasa.png" alt=""> </b>
                    <span class=" logo-compact"><img src="img/logoplasa.png" alt=""></span>
                    <span class="brand-title center">
                        <img src="img/logoplasa.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-align-justify"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                    <li>
                        <a href="/home" aria-expanded="false">
                            <i class="icon-dashboard menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/datautama" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Utama</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dataresume" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Resume</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dataangsur" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Angsur</span>
                        </a>
                    </li>

                    <li>
                        <a href="/datasalur" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Salur</span>
                        </a>
                    </li>



                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="/datanunggak" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Nunggak</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/datanunggak2010">Data Nunggak Tahun 2010</a></li>
                            <li><a href="/datanunggak2011">Data Nunggak Tahun 2011</a></li>
                            <li><a href="/datanunggak2012">Data Nunggak Tahun 2012</a></li>
                            <li><a href="/datanunggak2013">Data Nunggak Tahun 2013</a></li>
                            <li><a href="/datanunggak2014">Data Nunggak Tahun 2014</a></li>
                            <li><a href="/datanunggak2015">Data Nunggak Tahun 2015</a></li>
                            <li><a href="/datanunggak2016">Data Nunggak Tahun 2016</a></li>
                            <li><a href="/datanunggak2017">Data Nunggak Tahun 2017</a></li>
                            <li><a href="/datanunggak2018">Data Nunggak Tahun 2018</a></li>
                            <li><a href="/datanunggak2019">Data Nunggak Tahun 2019</a></li>
                            <li><a href="/datanunggak2020">Data Nunggak Tahun 2020</a></li>
                            <li><a href="/datanunggak2021">Data Nunggak Tahun 2021</a></li>
                        </ul>
                    </li>
                    <!-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="icon-folder-close menu-icon"></i><span class="nav-text">Data Utama</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/datautama2010">Data Utama Tahun 2010</a></li>
                            <li><a href="/datautama2011">Data Utama Tahun 2011</a></li>
                            <li><a href="/datautama2012">Data Utama Tahun 2012</a></li>
                            <li><a href="/datautama2013">Data Utama Tahun 2013</a></li>
                            <li><a href="/datautama2014">Data Utama Tahun 2014</a></li>
                            <li><a href="/datautama2015">Data Utama Tahun 2015</a></li>
                            <li><a href="/datautama2016">Data Utama Tahun 2016</a></li>
                            <li><a href="/datautama2017">Data Utama Tahun 2017</a></li>
                            <li><a href="/datautama2018">Data Utama Tahun 2018</a></li>
                            <li><a href="/datautama2019">Data Utama Tahun 2019</a></li>
                            <li><a href="/datautama2020">Data Utama Tahun 2020</a></li>
                            <li><a href="/datautama2021">Data Utama Tahun 2021</a></li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        </aside>
        @yield('content')
        </main>
        <!-- #/ container -->
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="template/plugins/common/common.min.js"></script>
    <script src="template/js/custom.min.js"></script>
    <script src="template/js/settings.js"></script>
    <script src="template/js/gleek.js"></script>
    <script src="template/js/styleSwitcher.js"></script>



    <script src="template/js/dashboard/dashboard-1.js"></script>

    <script src="template/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="template/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="template/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>