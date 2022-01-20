@extends('layouts.app')

@section('content')
<section class="content">
    <br><br>
    <h2>Data Utama</h2>
    <br><br>
    <div class="container">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-light text-dark font-weight-bold">
                    <div class="inner">
                        <h5>Data Utama Tahun 2018</h5>
                    </div>
                    <!-- <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div> -->
                    <a href="/datautama2018" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-light text-dark font-weight-bold">
                    <div class="inner">

                        <h5>Data Utama Tahun 2019</h5>
                    </div>
                    <a href="/datautama2019" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-light text-dark font-weight-bold">
                    <div class="inner">

                        <h5>Data Utama Tahun 2020</h5>
                    </div>
                    <a href="/datautama2020" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-light text-dark font-weight-bold">
                    <div class="inner">

                        <h5>Data Utama tahun 2021</h5>
                    </div>
                    <a href="/datautama2021" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>

</section>
@endsection