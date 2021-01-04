<?php

namespace App\Exports;

use App\Models\Siswa;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SiswaExport implements
    FromView

{
    use Exportable;

    public function view(): View
    {
        return view('dashboard.excel', [
            'siswa' => Siswa::all()
        ]);
    }
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Siswa::all();
    // }
}
