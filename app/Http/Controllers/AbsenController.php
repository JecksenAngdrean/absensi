<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\TahunAkademik;
use App\Models\Absen;
use App\Models\Schedule;
use App\Models\Kelas;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\DetailSchedule;
use DateTime;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;




use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) //mahasiswa
    {
        // // ambil data mahasiswa berdasarkan session
        // $mahasiswa = $request->session()->get('mahasiswa');
        // // ambil tahun akademik yg aktif
        // $ta = TahunAkademik::where('status', 1)->first();
        // // ambil data absen mahasiswa
        // $absens = Absen::where('id_mahasiswa', $mahasiswa->id)->where('id_ta', $ta->id)->get();
        // return view('user.absen.index')->with([
        //     'ta' => $ta,
        //     'absens' => $absens,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //dosen
    {
        $items = Absen::where('id_schedule', $id)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($id);
        $ta = TahunAkademik::where('status', 1)->first();
        $detailSchedules = DetailSchedule::where('id_schedule', $schedule->id)
            ->orderBy('pertemuan')
            ->get();

        return view('dosen.absen.show')->with([
            'items' => $items,
            'schedule' => $schedule,
            'id' => $id,
            'ta' => $ta,
            'detailSchedules' => $detailSchedules,
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
        $items = Absen::where('id_schedule', $id)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($id);

        return view('dosen.absen.edit')->with([
            'items' => $items,
            'schedule' => $schedule,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        foreach($data['idMhs'] as $index=>$item){
            Absen::where('id_mahasiswa', $data['idMhs'][$index])
            ->where('id_schedule', $id)
            ->update([
                'p1' => $data['p1'][$index],
                'p2' => $data['p2'][$index],
                'p3' => $data['p3'][$index],
                'p4' => $data['p4'][$index],
                'p5' => $data['p5'][$index],
                'p6' => $data['p6'][$index],
                'p7' => $data['p7'][$index],
                'p8' => $data['p8'][$index],
                'p9' => $data['p9'][$index],
                'p10' => $data['p10'][$index],
                'p11' => $data['p11'][$index],
                'p12' => $data['p12'][$index],
                'p13' => $data['p13'][$index],
                'p14' => $data['p14'][$index],
                'p15' => $data['p15'][$index],
                'p16' => $data['p16'][$index],
            ]);
        }

        return redirect()->route('absen.show', $id)->with('status', 'Absen berhasil diisi');
    }


    public function generateQr($id, Request $request)
    {
        
        $schedule = Schedule::findOrFail($id);
        $ta = TahunAkademik::where('status', 1)->first();
        
        // Ambil nilai pertemuan dari query string
        $pertemuan = $request->query('pertemuan', 1); // Default ke pertemuan 1 jika tidak ada query string
    
        // Ambil detail schedule berdasarkan id_schedule dan pertemuan
        $detailSchedule = DetailSchedule::where('id_schedule', $id)->where('pertemuan', $pertemuan)->first();
        if (!$detailSchedule) {
            return redirect()->back()->with('error', 'Detail schedule tidak ditemukan');
        }
        if ($detailSchedule->status_detail_schedule == '1') {
            return redirect('absen/' . $schedule->id)->with('error', 'Tidak Dapat Membuka QR Code Lagi Dikarenakan Sudah Dibuka Sebelumnya');
        }

        $detailSchedule->status_detail_schedule = 1;
        $detailSchedule->save();
        
        
        // Tanggal pertemuan
        $tanggalPertemuan = $detailSchedule->tanggal_pertemuan;
    
        // URL yang ingin di-generate QR Code-nya
        $url = url('/absens/' . $schedule->id . '?pertemuan=' . $pertemuan);
        
        // Generate QR Code
        $qrCode = QrCode::size(300)->generate($url);
    
        // Kirim data ke view
        return view('dosen.absen.qr', [
            'schedule' => $schedule,
            'qrCode' => $qrCode,
            'ta' => $ta,
            'pertemuan' => $pertemuan, // Sertakan nilai pertemuan di data yang dikirim ke view
            'tanggalPertemuan' => $tanggalPertemuan // Sertakan tanggal pertemuan
        ]);
    }

    public function qrcodeabsen($id, Request $request)
    {
       
        $nim = Auth::user()->username;

        // Mengambil id_mahasiswa berdasarkan nim
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();

        // Ambil nilai pertemuan dari request
        $pertemuan = $request->input('pertemuan');

        // Lakukan update berdasarkan id_mahasiswa, id_schedule, dan pertemuan yang dipilih
        $absen = Absen::where('id_mahasiswa', $mahasiswa->id)
            ->where('id_schedule', $id)
            ->update([
                'p'.$pertemuan => 1, // Update nilai pertemuan yang dipilih
            ]);
        
        if (!$absen) {
            session()->flash('error', 'Mahasiswa belum terdaftar untuk mata kuliah ini.');
        }
        else
        {
            session()->flash('status', 'Absen berhasil diisi');
        }


        // Redirect ke view 'dosen.absen.success'
        return view('dosen.absen.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function list(Request $request)
    {
        // ambil data dosen berdasarkan session
        $dosen = $request->session()->get('dosen');
        // ambil tahun akademik
        $ta = TahunAkademik::where('status', 1)->first();
        // panggil data schedule berdasarkan id dosen dan ta
        $data = Schedule::where('id_dosen', $dosen->id)->where('id_ta', $ta->id)->with('matkul')->get();

        return view('dosen.absen.list')->with([
            'data' => $data,
        ]);
    }

    public function cetak($id)
    {
        $items = Absen::where('id_schedule', $id)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($id);
        $ta = TahunAkademik::where('status', 1)->first();

        // ambil tgl sekarang
        $date = new DateTime('now');
        $dateNow = $date->format('d-M-Y');
        $tgl = preg_replace("/-/"," ", $dateNow);
        
        return view('dosen.absen.cetak')->with([
            'items' => $items,
            'schedule' => $schedule,
            'ta' => $ta,
            'tgl' => $tgl,
        ]);
    }

    public function datadosen(Request $request)
    {
        // Validasi request
        $request->validate([
            'tahunakademik' => 'required',
        ]);

        // Ambil id tahun akademik dari request
        $id_ta = $request->tahunakademik;

        // Query untuk mendapatkan data jadwal berdasarkan tahun akademik
        $dosenData = Schedule::join('tahun_akademiks', 'tahun_akademiks.id', '=', 'schedules.id_ta')
            ->where('schedules.id_ta', $id_ta)
            ->with('dosen')
            ->get()
            ->groupBy('id_dosen')
            ->map(function ($schedules, $id_dosen) {
                return [
                    'id' => $schedules->first()->dosen->id,
                    'id_dosen' => $id_dosen,
                    'nama' => $schedules->first()->dosen->nama,
                    'jumlah_mata_kuliah' => $schedules->count(),
                ];
            });

        // Ambil semua tahun akademik untuk dropdown
        $tahunAkademiks = TahunAkademik::all();

        // Jika data dosen kosong, kembalikan view dengan pesan error
        if ($dosenData->isEmpty()) {
            return view('bagiankeuangan.absen.index', [
                'pesan' => 'Data Tidak Tersedia',
                'tahunAkademiks' => $tahunAkademiks,
            ]);
        }else{

         // Jika ada data dosen yang sesuai, tampilkan view dengan data dosen dan tahun akademik
            return view('bagiankeuangan.absen.index', [
                'dosenData' => $dosenData,
                'tahunAkademiks' => $tahunAkademiks,
            ]);
        }
    }


    public function editschedule($id,$idschedule)
    {
        // Ambil detail schedule berdasarkan id
        $detailSchedule = DetailSchedule::findOrFail($idschedule);

        // Ambil data schedule
        $schedule = Schedule::findOrFail($id);

        // Return view dengan data yang diperlukan
        return view('dosen.absen.editschedule', compact('detailSchedule', 'schedule'));
    }

    public function updateschedule(Request $request, $id, $idschedule)
    {
            // Validasi input
            $request->validate([
                'tanggal_pertemuan' => 'required|date'
            ]);

            // Update detail schedule
            $detailSchedule = DetailSchedule::findOrFail($idschedule);
            $detailSchedule->update([
                'tanggal_pertemuan' => $request->input('tanggal_pertemuan'),
                
            ]);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->route('detailschedule.edit', ['id' => $id, 'idschedule' => $idschedule])
                            ->with('status', 'Detail schedule berhasil diperbarui!');
        }

        public function detaildatadosen($id, Request $request)
        {
            // Ambil data dosen berdasarkan $id
            $dosen = Dosen::findOrFail($id);

            // Ambil semua jadwal (schedules) dosen tanpa filter bulan terlebih dahulu
            $schedules = Schedule::where('id_dosen', $id)
                ->with(['matkul', 'kelas', 'matkul.prodi', 'detailSchedules'])
                ->get();

            // Ambil parameter bulan dari query string
            $bulan = $request->query('bulan');

            // Validasi format bulan yang diterima
            if ($bulan) {
                // Ubah format bulan menjadi format yang sesuai untuk di-parse
                $parsedBulan = Carbon::createFromFormat('Y-m', $bulan);
                if (!$parsedBulan) {
                    abort(400, 'Format bulan tidak valid');
                }

                // Tentukan tanggal awal dan akhir bulan
                $tanggalAwalBulan = $parsedBulan->copy()->startOfMonth();
                $tanggalAkhirBulan = $parsedBulan->copy()->endOfMonth();

                // Filter jadwal (schedules) berdasarkan bulan yang dipilih
                $schedulesFiltered = $schedules->filter(function ($schedule) use ($tanggalAwalBulan, $tanggalAkhirBulan) {
                    return $schedule->detailSchedules->first(function ($detailSchedule) use ($tanggalAwalBulan, $tanggalAkhirBulan) {
                        // Ubah $detailSchedule->tanggal_pertemuan menjadi objek Carbon
                        $tanggalPertemuan = Carbon::parse($detailSchedule->tanggal_pertemuan);

                        return $detailSchedule->status_detail_schedule == 1 &&
                            $tanggalPertemuan->between($tanggalAwalBulan, $tanggalAkhirBulan);
                    });
                });

                // Hitung ulang total pertemuan per mata kuliah yang tersisa setelah filter
                $totalPertemuan = [];
                foreach ($schedulesFiltered as $schedule) {
                    foreach ($schedule->detailSchedules as $detailSchedule) {
                        // Ubah $detailSchedule->tanggal_pertemuan menjadi objek Carbon
                        $tanggalPertemuan = Carbon::parse($detailSchedule->tanggal_pertemuan);

                        if ($detailSchedule->status_detail_schedule == 1 &&
                            $tanggalPertemuan->between($tanggalAwalBulan, $tanggalAkhirBulan)) {
                            $matkulId = $schedule->matkul->id;
                            if (!isset($totalPertemuan[$matkulId])) {
                                $totalPertemuan[$matkulId] = 0;
                            }
                            $totalPertemuan[$matkulId]++;
                        }
                    }
                }

                // Tampilkan view dengan data yang diperlukan
                return view('bagiankeuangan.absen.detailabsensi', [
                    'tak' => TahunAkademik::where('status', 1)->first(),
                    'dosen' => $dosen,
                    'schedules' => $schedules,
                    'bulan' => $parsedBulan->format('Y-m'), // Format kembali bulan yang sudah di-parse
                    'totalPertemuan' => $totalPertemuan, // Kirim data total pertemuan per mata kuliah ke view
                ]);
            }

                // Jika tidak ada filter bulan, tampilkan semua jadwal tanpa perubahan
                return view('bagiankeuangan.absen.detailabsensi', [
                    'tak' => TahunAkademik::where('status', 1)->first(),
                    'dosen' => $dosen,
                    'schedules' => $schedules,
                    'bulan' => null, // Atau kosongkan jika tidak ada bulan yang difilter
                    'totalPertemuan' => [], // Kosongkan total pertemuan karena tidak ada filter bulan
                ]);
    }

    public function detailabsensi($id,$idschedule) 
    {
        $items = Absen::where('id_schedule', $idschedule)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($idschedule);
        $ta = TahunAkademik::where('status', 1)->first();
        $detailSchedules = DetailSchedule::where('id_schedule', $schedule->id)
            ->orderBy('pertemuan')
            ->get();

        return view('bagiankeuangan.absen.lihatabsen')->with([
            'items' => $items,
            'schedule' => $schedule,
            'id' => $idschedule,
            'ta' => $ta,
            'detailSchedules' => $detailSchedules,
        ]);
    }

    public function cetakabsensibk($id,$idschedule)
    {
        $items = Absen::where('id_schedule', $idschedule)->with('mahasiswas')->get();
        $schedule = Schedule::findOrFail($idschedule);
        $ta = TahunAkademik::where('status', 1)->first();

        // ambil tgl sekarang
        $date = new DateTime('now');
        $dateNow = $date->format('d-M-Y');
        $tgl = preg_replace("/-/"," ", $dateNow);
        
        return view('bagiankeuangan.absen.cetak')->with([
            'items' => $items,
            'schedule' => $schedule,
            'ta' => $ta,
            'tgl' => $tgl,
        ]);
    }



   
}
