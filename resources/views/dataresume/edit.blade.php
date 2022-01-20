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
                        <form action="/dataresume/update/{{$data_resume->id}}" method="post">
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
                                                                value="{{$data_resume->id}}"></br>
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
                                                                value="{{$data_resume->jml_mitra}}"></br>
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
                                                                value="{{$data_resume->pokok_pinj}}"></br>
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
                                                                value="{{$data_resume->mitra_nunggak}}"></br>
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