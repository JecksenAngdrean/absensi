<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule;
use App\Models\Prodi;
use App\Models\TahunAkademik;
use App\Models\Matkul;
use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\DetailSchedule;
use App\Http\Requests\ScheduleRequest;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ta = TahunAkademik::where('status', 1)->first();
        $items = Prodi::all();

        return view('pages.schedule.index')->with([
            'items' => $items,
            'ta' => $ta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $prodi = Prodi::where('id', $id)->first();
        $ta = TahunAkademik::where('status', 1)->first();
        $matkuls = Matkul::where('id_prodi', $id)->get();
        $dosens = Dosen::get();
        $kelas = Kelas::where('id_prodi', $id)->get();
        return view('pages.schedule.create')->with([
            'matkuls' => $matkuls,
            'dosens' => $dosens,
            'kelas' => $kelas,
            'id' => $id,
            'ta' => $ta,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
    {
        $data = $request->all();
        
        // Buat schedule
        $schedule = Schedule::create($data);
        
        // Ambil data tahun akademik berdasarkan id_ta dari schedule
        $tahunAkademik = TahunAkademik::findOrFail($schedule->id_ta);
    
        // Tentukan tanggal awal dari tahun akademik
        $tanggalAwal = Carbon::parse($tahunAkademik->tanggal_awal_pertemuan); // pastikan kolom 'tanggal_awal_pertemuan' ada di tabel 'tahun_akademik'
    
        // Tentukan hari pertemuan pertama dalam bahasa Inggris
        $daysOfWeek = [
            'Senin' => 'Monday',
            'Selasa' => 'Tuesday',
            'Rabu' => 'Wednesday',
            'Kamis' => 'Thursday',
            'Jumat' => 'Friday',
            'Sabtu' => 'Saturday',
            'Minggu' => 'Sunday'
        ];
    
        $hariPertemuan = $daysOfWeek[$schedule->hari]; // Contoh: 'Monday'
    
        // Mulai dari tanggal awal dan hitung tanggal pertemuan
        $tanggalPertemuan = $tanggalAwal->copy();
    
        // Jika pertemuan pertama belum ada pada tanggal awal, cari pertemuan berikutnya
        if ($tanggalPertemuan->englishDayOfWeek != $hariPertemuan) {
            $tanggalPertemuan = $tanggalPertemuan->next($hariPertemuan);
        }
        
        // Loop untuk membuat 16 pertemuan
        for ($i = 0; $i < 16; $i++) {
            DetailSchedule::create([
                'id_schedule' => $schedule->id,
                'tanggal_pertemuan' => $tanggalPertemuan->toDateString(),
                'pertemuan' => $i + 1,
                'status_detail_schedule' => '0'
            ]);
    
            // Tambah satu minggu untuk pertemuan berikutnya
            $tanggalPertemuan->addWeek();
        }
    
        return redirect('schedule/' . $data['id_prodi'])->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ta = TahunAkademik::where('status', 1)->first();

        $item = Prodi::findOrFail($id);
        
        $items = Schedule::where([['id_ta', $ta->id],['id_prodi', $id]])->with(['matkul','dosen'])->get();

        return view('pages.schedule.show')->with([
            'item' => $item,
            'items' => $items,
            'ta' => $ta,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Schedule::with(['matkul','dosen'])->findOrFail($id);
        // dd($item);
        $ta = TahunAkademik::where('status', 1)->first();
        $matkuls = Matkul::all();
        $dosens = Dosen::all();
        $kelas = Kelas::all();

        return view('pages.schedule.edit')->with([
            'item' => $item,
            'matkuls' => $matkuls,
            'dosens' => $dosens,
            'kelas' => $kelas,
            'id' => $id,
            'ta' => $ta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScheduleRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $item = Schedule::findOrFail($id);
        $item->update($data);

        return redirect('schedule/'. $data['id_prodi'])->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Schedule::findOrFail($id);
        $item->delete();

        return redirect('schedule/'. $item->id_prodi)->with('status', 'Data berhasil dihapus!');
    }
}
