@extends('layouts.sidebar')


@section('content')

<div class="content-body">
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2010</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2010 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2010/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2010/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2011</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2011 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2011/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2011/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2012</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2012 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2012/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2012/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2013</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2013 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2013/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2013/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2014</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2014 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2014/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2014/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2015</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2015 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2015/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2015/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2016</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2016 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2016/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2016/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2017</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2017 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2017/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2017/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2018</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2018 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2018/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2018/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2019</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2019 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2019/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2019/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2020</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2020 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2020/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2020/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                            <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2021</h3><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('month')</th>
                                        <th>@sortablelink('target')</th>
                                        <th>@sortablelink('relasi')</th>
                                        <th>@sortablelink('COLL_M')</th>
                                        <th>@sortablelink('COLL_C')</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_utama2021 as $b)
                                    <tr>
                                        <td class="font-weight-bold">{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2021/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2021/delete/{{ $b->id }}" class="btn btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection