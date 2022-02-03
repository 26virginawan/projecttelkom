@extends('layouts.app')


@section('content')
<<div class="content-body">
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <br>
                        <h4 class="card-title">Edit Data Angsur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/datautama2020/update/{{$data_utama2020->id}}" method="post">
                            @csrf
                            <div class="justify-content-center row">
                                <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
                                    <div class="card card-noborder b-radius">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <div class="col-lg-8 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label
                                                            class="col-12 font-weight-bold col-form-label">Month</label>
                                                        <div class="col-12">

                                                            <div class="input-group-append">
                                                                <select class="form-control" name="month">
                                                                    <option selected="{{$data_utama2020->month}}">
                                                                        {{$data_utama2020->month}}
                                                                    </option>
                                                                    <option value="Januari">Januari</option>
                                                                    <option value="Februari">Februari</option>
                                                                    <option value="Maret">Maret</option>
                                                                    <option value="April">April</option>
                                                                    <option value="Mei">Mei</option>
                                                                    <option value="Juni">Juni</option>
                                                                    <option value="Juli">Juli</option>
                                                                    <option value="Agustus">Agustus</option>
                                                                    <option value="September">September</option>
                                                                    <option value="Oktober">Oktober</option>
                                                                    <option value="November">November</option>
                                                                    <option value="Desember">Desember</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Target
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="target"
                                                                value="{{$data_utama2020->target}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Relasi
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="relasi"
                                                                value="{{$data_utama2020->relasi}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">COLL M
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="CALL_M"
                                                                value="{{$data_utama2020->CALL_M}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">COLL C
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="CALL_C"
                                                                value="{{$data_utama2020->CALL_C}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group col-md-6'>
                                                <button type="submit" name="add" class="btn btn-primary float-left">Ubah
                                                    Data</button>
                                            </div>
                                            <!-- </form> -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection