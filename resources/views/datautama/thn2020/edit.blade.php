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
                        <form action="/angsur/update/{{$data_angsur->id}}" method="post">
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
                                                                value="{{$data_angsur->kode}}" readonly></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">nama
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="nama"
                                                                value="{{$data_angsur->nama}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">BA
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="ba"
                                                                value="{{$data_angsur->ba}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">CDSA
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="cdsa"
                                                                value="{{$data_angsur->cdsa}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Provinsi
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="provinsi"
                                                                value="{{$data_angsur->provinsi}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kab/Kota
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kab_kota"
                                                                value="{{$data_angsur->kab_kota}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tahun
                                                            Salur
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="thn_salur"
                                                                value="{{$data_angsur->thn_salur}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jenis
                                                            Angsuran
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jenis_angs"
                                                                value="{{$data_angsur->jenis_angs}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kualitas
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kualitas"
                                                                value="{{$data_angsur->kualitas}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Angsuran
                                                            Akhir
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="angs_akhir"
                                                                value="{{$data_angsur->angs_akhir}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">GLJR
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="gljr"
                                                                value="{{$data_angsur->gljr}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Angsuran
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="angsuran"
                                                                value="{{$data_angsur->angsuran}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Angsuran
                                                            Pokok
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="angs_pokok"
                                                                value="{{$data_angsur->angs_pokok}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Angsuran
                                                            Jasa
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="angs_jasa"
                                                                value="{{$data_angsur->angs_jasa}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Adj Pokok
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="adj_pokok"
                                                                value="{{$data_angsur->adj_pokok}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Adj Jasa
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="adj_jasa"
                                                                value="{{$data_angsur->adj_jasa}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kelebihan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kelebihan"
                                                                value="{{$data_angsur->kelebihan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label
                                                            class="col-12 font-weight-bold col-form-label">Pengembalian
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="pengembalian"
                                                                value="{{$data_angsur->pengembalian}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Pendapatan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="pendapatan"
                                                                value="{{$data_angsur->pendapatan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C User
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="c_user"
                                                                value="{{$data_angsur->c_user}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C Date
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="c_date"
                                                                value="{{$data_angsur->c_date}}"></br>
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