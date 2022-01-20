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
                        <h4 class="card-title">Tambah Data Mitra Nunggak Tahun 2011</h4>
                    </div>
                    <div class="card-body">
                        <form action="/datanunggak2011/create" method="post">
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
                                                                placeholder="Masukkan Kode">
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
                                                                placeholder="Masukkan Nama Mitra">
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
                                                                placeholder="Masukkan Nama Usaha">
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
                                                                placeholder="Masukkan Tanggal Terakhir Bayar">
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
                                                                placeholder="Masukkan Nominal Terakhir Bayar">
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
                                                                placeholder="Masukkan Total bayar">
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
                                                                placeholder="Masukkan Total mengangsur">
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
                                                                placeholder="Masukkan Sisa Hutang Mitra">
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