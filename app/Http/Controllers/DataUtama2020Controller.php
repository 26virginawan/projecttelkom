<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2020;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2020Controller extends Controller
{
    public function index()
    {
        $data_utama2020 = data_utama2020::sortable()->paginate(50);
        return view(
            'datautama.thn2020.index',
            ['data_utama2020' => $data_utama2020],
            compact('data_utama2020')
        );
    }
    public function add()
    {
        return view('datautama.thn2020.create');
    }

    public function create(Request $request)
    {
        $data_utama2020 = data_utama2020::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2020');
    }

    public function delete($id)
    {
        $data_utama2020 = data_utama2020::find($id);
        $data_utama2020->delete();
        return redirect('/datautama2020');
    }

    public function edit($id)
    {
        $data_utama2020 = data_utama2020::find($id);
        return view('datautama.thn2020.edit', [
            'data_utama2020' => $data_utama2020,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2020 = data_utama2020::find($id);
        $data_utama2020->month = $request->month;
        $data_utama2020->target = $request->target;
        $data_utama2020->relasi = $request->relasi;
        $data_utama2020->call_m = $request->call_m;
        $data_utama2020->call_c = $request->call_c;
        $data_utama2020->save();
        return redirect('/datautama2020');
    }
}