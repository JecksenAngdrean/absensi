@extends('user.layouts.layout3')

@section('content')
<!-- profile -->
<div id="profile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ url('datadosen') }}?tahunakademik={{ $tak->id }}" class="btn btn-primary pull-left mb-3">
                <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>  
        <div class="row mb-4">
            <div class="col-md-12" style="text-align: center;">
                <h2>{{ $dosen->nama }}</h2>
                <h2>{{ $dosen->nidn }}</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <form action="{{ url('datadosen') }}/{{$dosen->id}}" method="GET">
                    <div class="input-group">
                        <input type="month" class="form-control" name="bulan" value="{{ $bulan }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
        @forelse ($schedules as $index => $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->matkul->matkul }}</h5>
                        <table>
                            <tr>
                                <th>Kelas</th>
                                <td>:</td>
                                <td>{{ $item->kelas->nama }}</td>
                            </tr>
                            <tr>
                                <th>Waktu</th>
                                <td>:</td>
                                <td>{{ $item->hari }}, {{ $item->waktu }}</td>
                            </tr>
                            <tr>
                                <th>Program Studi</th>
                                <td>:</td>
                                <td>{{ $item->matkul->prodi->prodi }}</td>
                            </tr>
                            <tr>
                                <th>Total Kehadiran</th>
                                <td>:</td>
                                <td>
                                    @if(isset($totalPertemuan[$item->matkul->id]))
                                        {{ $totalPertemuan[$item->matkul->id] }}
                                    @else
                                        0
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('datadosen') }}/{{$dosen->id}}/{{$item->id}}" class="btn btn-primary mt-2">Lihat Absen</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <p>Jadwal Kosong</p>
            </div>
        @endforelse
        </div>
        <!-- Perincian pembayaran honor -->
        <div class="row mt-4">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Perincian Pembayaran Honor</h5>
                        @if(count($schedules) > 0)
                            @php
                                $totalKehadiranSemua = 0;
                                $totalHonorSemua = 0;
                            @endphp
                            @foreach($schedules as $schedule)
                                @php
                                    $totalKehadiran = isset($totalPertemuan[$schedule->matkul->id]) ? $totalPertemuan[$schedule->matkul->id] : 0;
                                    $honorPerPertemuan = $dosen->honor;
                                    $totalHonor = $totalKehadiran * $honorPerPertemuan;
                                    $totalKehadiranSemua += $totalKehadiran;
                                    $totalHonorSemua += $totalHonor;
                                @endphp
                            @endforeach
                            <p>Honor Per Jam: Rp {{ number_format($dosen->honor,0) }}</p>
                            <p>Total Pertemuan Seluruh Mata Kuliah: {{ $totalKehadiranSemua }}</p>
                            @if($totalKehadiranSemua > 0)
                                <p>Total Honor yang Diterima: Rp {{ number_format($totalHonorSemua, 0, ',', '.') }}</p>
                            @else
                                <p>Total Honor yang Diterima: Rp 0</p>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end profile -->
@endsection
