@extends('layouts.sidebar')

@section('content')
<section class="content-body">
    <div class="container-fluid mt-3">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Data Utama</h3>
                        <div class="d-inline-block">
                            <h4>
                                <a href="/datautama" class="text-white mb-0">more info</a>
                                <a href="/datautama" class="text-white fa fa-arrow-right"></a>
                            </h4>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-folder"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Data Resume</h3>
                        <div class="d-inline-block">
                            <h4>
                                <a href="/dataresume" class="text-white mb-0">more info</a>
                                <a href="/dataresume" class="text-white fa fa-arrow-right"></a>
                            </h4>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-folder"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Data Salur</h3>
                        <div class="d-inline-block">
                            <h4>
                                <a href="/datasalur" class="text-white mb-0">more info</a>
                                <a href="/datasalur" class="text-white fa fa-arrow-right"></a>
                            </h4>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-folder"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Data Angsur</h3>
                        <div class="d-inline-block">
                            <h4>
                                <a href="/dataangsur" class="text-white mb-0">more info</a>
                                <a href="/dataangsur" class="text-white fa fa-arrow-right"></a>
                            </h4>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-folder"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection