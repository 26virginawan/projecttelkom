<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2011;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2011Controller extends Controller
{
    public function index()
    {
        $data_utama2011 = data_utama2010::sortable()->paginate(50);
        return view(
            'datautama.thn2011.index',
            ['data_utama2011' => $data_utama2011],
            compact('data_utama2011')
        );
    }
    public function add()
    {
        return view('datautama.thn2011.create');
    }

    public function create(Request $request)
    {
        $data_utama2011 = data_utama2011::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2011');
    }

    public function delete($id)
    {
        $data_utama2011 = data_utama2011::find($id);
        $data_utama2011->delete();
        return redirect('/datautama2011');
    }

    public function edit($id)
    {
        $data_utama2011 = data_utama2011::find($id);
        return view('datautama.thn2011.edit', [
            'data_utama2011' => $data_utama2011,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2011 = data_utama2011::find($id);
        $data_utama2011->month = $request->month;
        $data_utama2011->target = $request->target;
        $data_utama2011->relasi = $request->relasi;
        $data_utama2011->call_m = $request->call_m;
        $data_utama2011->call_c = $request->call_c;
        $data_utama2011->save();
        return redirect('/datautama2011');
    }
}