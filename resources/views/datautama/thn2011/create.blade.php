@extends('layouts.sidebar')


@section('content')
<div class="content-body">

    <div class="container-fluid">
        <div class="row">



            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <br>
                        <h4 class="card-title">Tambah Data Utama 2011</h4>
                    </div>
                    <div class="card-body">
                        <form action="/datautama2011/create" method="post">
                            @csrf

                            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                <div class="card card-noborder b-radius">
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <div class="form-group row">
                                                <div class="col-lg-8 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label
                                                            class="col-12 font-weight-bold col-form-label">Month</label>
                                                        <div class="col-12">

                                                            <div class="input-group-append">
                                                                <select class="form-control" name="month">
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
                                                                placeholder="Masukkan Target">
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
                                                                placeholder="Masukkan Relasi">
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
                                                            <input type="text" class="form-control" name="COLL_M"
                                                                placeholder="Masukkan COLL M">
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
                                                            <input type="text" class="form-control" name="COLL_C"
                                                                placeholder="Masukkan COLL C">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='form-group col-md-6'>
                                                <button type="submit" name="add"
                                                    class="btn btn-primary float-left">Simpan</button>
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
</div>
@endsection