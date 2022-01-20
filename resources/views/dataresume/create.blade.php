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
                        <h4 class="card-title">Tambah Data Resume</h4>
                    </div>
                    <div class="card-body">
                        <form action="/datanunggak2010/create" method="post">
                            @csrf
                            <div class="justify-content-center row">
                                <div class="col-lg-7 col-md-12 col-sm-12 mb-4">
                                    <div class="card card-noborder b-radius">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tahun
                                                            Salur
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="id"
                                                                placeholder="Masukkan Tahun Salur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jumlah
                                                            Mitra
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jml_mitra"
                                                                placeholder="Masukkan Jumlah Mitra">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Pokok
                                                            Pinjaman
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="pokok_pinj"
                                                                placeholder="Masukkan Pokok Pinjaman">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Mitra
                                                            Nunggak
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="mitra_nunggak"
                                                                placeholder="Masukkan Jumlah Mitra Nunggak">
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