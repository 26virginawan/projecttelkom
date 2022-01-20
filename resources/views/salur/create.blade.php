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
                        <h4 class="card-title">Tambah Data Salur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/salur/create" method="post">
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
                                                        <label class="col-12 font-weight-bold col-form-label">addr
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="addr"
                                                                placeholder="Masukkan address">
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
                                                                placeholder="Masukkan kode sektor">
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
                                                                placeholder="Masukkan sub sektor">
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
                                                                placeholder="Masukkan cluster">
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
                                                                placeholder="Masukkan kode bentuk usaha">
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
                                                                placeholder="Masukkan kode type penyaluran">
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
                                                                placeholder="Masukkan kode jenis penyaluran">
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
                                                                placeholder="Masukkan jenis usaha">
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
                                                                placeholder="Masukkan no suip">
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
                                                            Pokok
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
                                                        <label class="col-12 font-weight-bold col-form-label">provinsi
                                                            Jasa
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
                                                        <label class="col-12 font-weight-bold col-form-label">kab/kota
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
                                                        <label class="col-12 font-weight-bold col-form-label">Kecamatan
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="kecamatan"
                                                                placeholder="Masukkan kecamatan">
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
                                                                placeholder="Masukkan kelurahan">
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
                                                                placeholder="Masukkan tanggal pengajuan">
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
                                                                placeholder="Masukkan png ke">
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
                                                                placeholder="Masukkan pnj ke">
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
                                                                placeholder="Masukkan gender">
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
                                                                placeholder="Masukkan no telp">
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
                                                                placeholder="Masukkan no hp">
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
                                                                placeholder="Masukkan pengajuan">
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
                                                                placeholder="Masukkan sdm">
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
                                                                placeholder="Masukkan jumlah asset">
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
                                                                placeholder="Masukkan jumlah omzet">
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
                                                                placeholder="Masukkan nama usaha">
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
                                                                placeholder="Masukkan alamat usaha">
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
                                                                placeholder="Masukkan kecamatan usaha">
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
                                                        <label class="col-12 font-weight-bold col-form-label">Provinsi
                                                            Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="prov_usaha"
                                                                placeholder="Masukkan provinsi usaha">
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
                                                                placeholder="Masukkan kab/kota usaha">
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
                                                                placeholder="Masukkan telp usaha">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-11 col-md-6 col-sm-12 space-bottom">
                                                    <div class="row">
                                                        <label class="col-12 font-weight-bold col-form-label">
                                                            HP Usaha
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="hp_usaha"
                                                                placeholder="Masukkan hp usaha">
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
                                                                placeholder="Masukkan tanggal survey">
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
                                                                placeholder="Masukkan tanggal usulan">
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
                                                                placeholder="Masukkan usulan treg">
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
                                                                placeholder="Masukkan tanggal penetapan">
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
                                                                placeholder="Masukkan tanggal sp3k">
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
                                                                placeholder="Masukkan tanggal trf">
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
                                                                placeholder="Masukkan tanggal clr">
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
                                                                placeholder="Masukkan no sp3k">
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
                                                                placeholder="Masukkan pokok pinjaman">
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
                                                                placeholder="Masukkan jasa pinjaman">
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
                                                                placeholder="Masukkan perd ang">
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
                                                                placeholder="Masukkan lama pinjaman">
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
                                                                placeholder="Masukkan grc prd">
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
                                                                placeholder="Masukkan tanggal mulai">
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
                                                                placeholder="Masukkan tanggal lunas">
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
                                                                placeholder="Masukkan jenis agunan">
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
                                                                placeholder="Masukkan agunan">
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