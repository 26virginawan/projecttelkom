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
                        <h4 class="card-title">Tambah Data Angsur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/angsur/create" method="post">
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
                                                                placeholder="Masukkan kode">
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
                                                                placeholder="Masukkan nama">
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
                                                                placeholder="Masukkan ba">
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
                                                                placeholder="Masukkan cdsa">
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
                                                                placeholder="Masukkan provinsi">
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
                                                                placeholder="Masukkan kab/kota">
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
                                                                placeholder="Masukkan tahun salur">
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
                                                                placeholder="Masukkan jenis angsuran">
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
                                                                placeholder="Masukkan kualitas">
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
                                                                placeholder="Masukkan angsuran akhir">
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
                                                                placeholder="Masukkan gljr">
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
                                                                placeholder="Masukkan angsuran">
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
                                                                placeholder="Masukkan angsuran pokok">
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
                                                                placeholder="Masukkan angsuran jasa">
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
                                                                placeholder="Masukkan adj pokok">
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
                                                                placeholder="Masukkan adj jasa">
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
                                                                placeholder="Masukkan kelebihan">
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
                                                                placeholder="Masukkan pengembalian">
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
                                                                placeholder="Masukkan pendapatan">
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
                                                                placeholder="Masukkan c user">
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
                                                                placeholder="Masukkan c date">
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