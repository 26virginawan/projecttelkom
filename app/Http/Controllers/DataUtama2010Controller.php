<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2010;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2010Controller extends Controller
{
    public function index()
    {
        $data_utama2010 = data_utama2010::sortable()->paginate(50);
        return view(
            'datautama.thn2010.index',
            ['data_utama2010' => $data_utama2010],
            compact('data_utama2010')
        );
    }
    public function add()
    {
        return view('datautama.thn2010.create');
    }

    public function create(Request $request)
    {
        $data_utama2010 = data_utama2010::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2010');
    }

    public function delete($id)
    {
        $data_utama2010 = data_utama2010::find($id);
        $data_utama2010->delete();
        return redirect('/datautama2010');
    }

    public function edit($id)
    {
        $data_utama2010 = data_utama2010::find($id);
        return view('datautama.thn2010.edit', [
            'data_utama2010' => $data_utama2010,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2010 = data_utama2010::find($id);
        $data_utama2010->month = $request->month;
        $data_utama2010->target = $request->target;
        $data_utama2010->relasi = $request->relasi;
        $data_utama2010->call_m = $request->call_m;
        $data_utama2010->call_c = $request->call_c;
        $data_utama2010->save();
        return redirect('/datautama2010');
    }
}