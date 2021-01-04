<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    public function dashboard()
    {
        $siswa = DB::table('siswa')->get();
        return view('dashboard/siswa', ['siswa' => $siswa]);
    }

    public function create()
    {
        $kelas = DB::table('kelas')->get();
        return view('/dashboard/create', ['kelas' => $kelas]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'school' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'grade' => 'required',
            'department' => 'required',
        ]);
        $siswa = new Siswa;
        $siswa->name = $request->name;
        $siswa->school = $request->school;
        $siswa->email = $request->email;
        $siswa->phone = $request->phone;
        $siswa->grade = $request->grade;
        $siswa->department = $request->department;
        $siswa->save();
        return redirect('/dashboard/siswa')->with('status', "Data berhasil dimasukkan");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/dashboard/siswa')->with('status', 'Data Berhasil Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $kelas = DB::table('kelas')->get();
        return view('/dashboard/edit', ['siswa' => $siswa, 'kelas' => $kelas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function detail(Siswa $siswa)
    {
        return view('/dashboard/detail', compact('siswa'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param App\Models\Siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'name' => 'required',
            'school' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'department' => 'required',
            'grade' => 'required',
        ]);

        Siswa::where('id', $siswa->id)
            ->update([
                'name' => $request->name,
                'school' => $request->school,
                'email' => $request->email,
                'phone' => $request->phone,
                'grade' => $request->grade,
                'department' => $request->department,

            ]);
        return redirect('/dashboard/siswa')->with('status', "Data berhasil diubah");
    }

    public function export_excel()
    {
        // return Excel::download(new SiswaExport, 'StudentList.xlsx');
        return (new SiswaExport)->download('StudentList.xlsx');
    }
}
