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
                        <h4 class="card-title">Edit Data Salur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/salur/update/{{$data_salur->id}}" method="post">
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
                                                                value="{{$data_salur->kode}}" readonly></br>
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
                                                                value="{{$data_salur->nama}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">addr
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="addr"
                                                                value="{{$data_salur->addr}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C Kode
                                                            Sektor
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="c_kode_sektor"
                                                                value="{{$data_salur->c_kode_sektor}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Sub Sektor
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="sub_sektor"
                                                                value="{{$data_salur->sub_sektor}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">cluster
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="cluster"
                                                                value="{{$data_salur->cluster}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C Kode
                                                            Bentuk Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="c_kode_bentuk_usaha"
                                                                value="{{$data_salur->c_kode_bentuk_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C Kode
                                                            Type Penyaluran
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="c_kode_type_penyaluran"
                                                                value="{{$data_salur->c_kode_type_penyaluran}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">C Kode
                                                            Jenis Penyaluran
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="c_kode_jenis_penyaluran"
                                                                value="{{$data_salur->c_kode_jenis_penyaluran}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jenis
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jenis_usaha"
                                                                value="{{$data_salur->jenis_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">NO Suip
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="no_suip"
                                                                value="{{$data_salur->no_suip}}"></br>
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
                                                                value="{{$data_salur->ba}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">CDSA
                                                            Pokok
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="cdsa"
                                                                value="{{$data_salur->cdsa}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">provinsi
                                                            Jasa
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="provinsi"
                                                                value="{{$data_salur->provinsi}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">kab/kota
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kab_kota"
                                                                value="{{$data_salur->kab_kota}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kecamatan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kecamatan"
                                                                value="{{$data_salur->kecamatan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kelurahan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kelurahan"
                                                                value="{{$data_salur->kelurahan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">tanggal
                                                            Pengajuan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_pengj"
                                                                value="{{$data_salur->tgl_pengj}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Png Ke
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="png_ke"
                                                                value="{{$data_salur->png_ke}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Pnj ke
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="pnj_ke"
                                                                value="{{$data_salur->pnj_ke}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Gender
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="gender"
                                                                value="{{$data_salur->gender}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">No
                                                            Telp
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="no_telp"
                                                                value="{{$data_salur->no_telp}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">No
                                                            HP
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="no_hp"
                                                                value="{{$data_salur->no_hp}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">pengajuan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="pengajuan"
                                                                value="{{$data_salur->pengajuan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">sdm
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="sdm"
                                                                value="{{$data_salur->sdm}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">jumlah
                                                            Asset
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jml_asset"
                                                                value="{{$data_salur->jml_asset}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jumlah
                                                            Omzet
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jml_omzet"
                                                                value="{{$data_salur->jml_omzet}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Nama
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="nama_usaha"
                                                                value="{{$data_salur->nama_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Alamat
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="alamat_usaha"
                                                                value="{{$data_salur->alamat_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kec
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kec_usaha"
                                                                value="{{$data_salur->kec_usaha}}"></br>
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
                                                                value="{{$data_salur->pendapatan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Provinsi
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="prov_usaha"
                                                                value="{{$data_salur->prov_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Kab/Kota
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"
                                                                name="kab_kota_usaha"
                                                                value="{{$data_salur->kab_kota_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Telp
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="telp_usaha"
                                                                value="{{$data_salur->telp_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">HP Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="hp_usaha"
                                                                value="{{$data_salur->hp_usaha}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Survey
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_survey"
                                                                value="{{$data_salur->tgl_survey}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Usulan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_usulan"
                                                                value="{{$data_salur->tgl_usulan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Usulan
                                                            Treg
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="usulan_treg"
                                                                value="{{$data_salur->usulan_treg}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Penetapan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_penetapan"
                                                                value="{{$data_salur->tgl_penetapan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            sp3k
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_sp3k"
                                                                value="{{$data_salur->tgl_sp3k}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">tanggal
                                                            trf
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_trf"
                                                                value="{{$data_salur->tgl_trf}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">tanggal
                                                            clr
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_clr"
                                                                value="{{$data_salur->tgl_clr}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">no
                                                            Sp3k
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="no_sp3k"
                                                                value="{{$data_salur->no_sp3k}}"></br>
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
                                                                value="{{$data_salur->pokok_pinj}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jasa
                                                            Pinjaman
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jasa_pinj"
                                                                value="{{$data_salur->jasa_pinj}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Perd Ang
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="perd_ang"
                                                                value="{{$data_salur->perd_ang}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Lama
                                                            Pinjaman
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="lama_pinj"
                                                                value="{{$data_salur->lama_pinj}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Grc Prd
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="grc_prd"
                                                                value="{{$data_salur->grc_prd}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Mulai
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_mulai"
                                                                value="{{$data_salur->tgl_mulai}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Tanggal
                                                            Lunas
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="tgl_lunas"
                                                                value="{{$data_salur->tgl_lunas}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Jenis
                                                            Agunan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="jenis_agunan"
                                                                value="{{$data_salur->jenis_agunan}}"></br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">Agunan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="agunan"
                                                                value="{{$data_salur->agunan}}"></br>
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