<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2015;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2015Controller extends Controller
{
    public function index()
    {
        $data_utama2015 = data_utama2015::sortable()->paginate(50);
        return view(
            'datautama.thn2015.index',
            ['data_utama2015' => $data_utama2015],
            compact('data_utama2015')
        );
    }
    public function add()
    {
        return view('datautama.thn2015.create');
    }

    public function create(Request $request)
    {
        $data_utama2015 = data_utama2015::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2015');
    }

    public function delete($id)
    {
        $data_utama2015 = data_utama2015::find($id);
        $data_utama2015->delete();
        return redirect('/datautama2015');
    }

    public function edit($id)
    {
        $data_utama2015 = data_utama2015::find($id);
        return view('datautama.thn2015.edit', [
            'data_utama2015' => $data_utama2015,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2015 = data_utama2015::find($id);
        $data_utama2015->month = $request->month;
        $data_utama2015->target = $request->target;
        $data_utama2015->relasi = $request->relasi;
        $data_utama2015->call_m = $request->call_m;
        $data_utama2015->call_c = $request->call_c;
        $data_utama2015->save();
        return redirect('/datautama2015');
    }
}