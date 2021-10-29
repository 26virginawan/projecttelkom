@extends('layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- <div class="row"> -->
    <div class="col-md-12 ">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Barang</h4>
                    </div>
                    <div class="card-body">

                        <form action="/barang/update/{{$barang->id}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$barang->id}}"></br>
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <input type="text" class="form-control" required="required" name="kode_barang"
                                    value="{{$barang->kode_barang}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" required="required" name="nama_barang"
                                    value="{{$barang->nama_barang}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="stok_barang">Stok Barang</label>
                                <input type="text" class="form-control" required="required" name="stok_barang"
                                    value="{{$barang->stok_barang}}"></br>
                            </div>
                            <div class="form-group">
                                <label for="harga_barang">Harga Barang</label>
                                <input type="text" class="form-control" required="required" name="harga_barang"
                                    value="{{$barang->harga_barang}}"></br>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary float-left">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection