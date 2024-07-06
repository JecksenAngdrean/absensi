@extends('user.layouts.layout2')

@section('content')
<div id="absen" class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h4 class="text-success">Absensi Tahun Akademik: {{ $ta->tahun_akademik }}/{{ $ta->semester }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Matakuliah</th>
                    <td>:</td>
                    <td>{{ $schedule->matkul->matkul }}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>{{ $schedule->kelas->nama }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>:</td>
                    <td>{{ $schedule->matkul->prodi->prodi }}</td>
                </tr>
                <tr>
                    <th>Dosen</th>
                    <td>:</td>
                    <td>{{ $schedule->dosen->nama }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h5>Daftar Pertemuan:</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Pertemuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detailSchedules as $detailSchedule)
                    <tr>
                        <td>{{ $detailSchedule->pertemuan }}</td>
                        <td>{{ \Carbon\Carbon::parse($detailSchedule->tanggal_pertemuan)->format('d F Y') }}</td>
                        <td>@if($detailSchedule->status_detail_schedule == '0') Belum disetujui @else Disetujui @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection