@extends('layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- <div class="row"> -->
    <div class="col-md-12 ">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="/barang/create" method="post">
                            @csrf
                            <div class="form-group col-md-8">
                                <label for="judul">kode barang</label>
                                <input type="text" class="form-control" required="required" name="kode_barang"></br>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="isbn">nama barang</label>
                                <input type="text" class="form-control" required="required" name="nama_barang"></br>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="pengarang">stok barang</label>
                                <input type="text" class="form-control" required="required" name="stok_barang"></br>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="penerbit">Harga Barang</label>
                                <input type="text" class="form-control" required="required" name="harga_barang"></br>
                            </div>
                            <div class='form-group col-md-6'>
                                <button type="submit" name="add" class="btn btn-primary float-left">Simpan</button>
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