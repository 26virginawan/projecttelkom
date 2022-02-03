@extends('layouts.app')


@section('content')
<div class="content">
    <!-- <div class="row"> -->
    <div class="col-md-12 ">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <br>
                        <h4 class="card-title">Edit Data Angsur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/datanunggak2015/update/{{$data_nunggak2015->id}}" method="post">
                            @csrf
                            <div class="justify-content-center row">
                                <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
                                    <div class="card card-noborder b-radius">
                                        <div class="card-body">


                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kode
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kode"
                                                                value="{{$data_nunggak2015->kode}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Nama
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="nama"
                                                                value="{{$data_nunggak2015->nama}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="usaha"
                                                                value="{{$data_nunggak2015->usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Terakhir Bayar
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="tgl_terakhir_bayar"
                                                                value="{{$data_nunggak2015->tgl_terakhir_bayar}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Nominal
                                                            Terakhir Bayar
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="terakhir_bayar"
                                                                value="{{$data_nunggak2015->terakhir_bayar}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Total
                                                            Bayar
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="total_bayar"
                                                                value="{{$data_nunggak2015->total_bayar}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Total
                                                            Angsur
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="total_angsur"
                                                                value="{{$data_nunggak2015->total_angsur}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Sisa
                                                            Hutang
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="sisa_hutang"
                                                                value="{{$data_nunggak2015->sisa_hutang}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="edit" class="btn btn-primary float-left">Ubah
                                                Data</button>

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