<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2014;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2014Controller extends Controller
{
    public function index()
    {
        $data_utama204 = data_utama2014::sortable()->paginate(50);
        return view(
            'datautama.thn2014.index',
            ['data_utama2014' => $data_utama2014],
            compact('data_utama2014')
        );
    }
    public function add()
    {
        return view('datautama.thn2014.create');
    }

    public function create(Request $request)
    {
        $data_utama2014 = data_utama2014::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2014');
    }

    public function delete($id)
    {
        $data_utama2014 = data_utama2014::find($id);
        $data_utama2014->delete();
        return redirect('/datautama2014');
    }

    public function edit($id)
    {
        $data_utama2014 = data_utama2014::find($id);
        return view('datautama.thn2014.edit', [
            'data_utama2014' => $data_utama2014,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2014 = data_utama2014::find($id);
        $data_utama2014->month = $request->month;
        $data_utama2014->target = $request->target;
        $data_utama2014->relasi = $request->relasi;
        $data_utama2014->call_m = $request->call_m;
        $data_utama2014->call_c = $request->call_c;
        $data_utama2014->save();
        return redirect('/datautama2014');
    }
}