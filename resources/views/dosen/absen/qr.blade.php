@extends('user.layouts.layout2')

@section('content')
<div id="absen" class="container">
    <div class="row mt-4">
    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
        <div class="col-12">
            <h4 class="text-success">Absensi Tahun Akademik: {{$ta->tahun_akademik}}/{{$ta->semester}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Matakuliah</th>
                    <td>:</td>
                    <td>{{$schedule->matkul->matkul}}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>{{$schedule->kelas->nama}}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>:</td>
                    <td>{{$schedule->matkul->prodi->prodi}}</td>
                </tr>
                <tr>
                    <th>Dosen</th>
                    <td>:</td>
                    <td>{{$schedule->dosen->nama}}</td>
                </tr>
                <tr>
                    <th>Pertemuan</th>
                    <td>:</td>
                    <td>{{ $pertemuan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pertemuan</th>
                    <td>:</td>
                    <td>{{ \Carbon\Carbon::parse($tanggalPertemuan)->format('d F Y') }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div>{!! $qrCode !!}</div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4 text-center">
            <h5>Waktu Tersisa:</h5>
            <div id="countdown" class="h3"></div>
        </div>
    </div>
    <div class="row justify-content-center" style="padding-bottom:30px">
        <div class="col-md-4">
            <a href="{{ url('absen') }}/{{$schedule->id}}" class="btn btn-primary btn-block mt-4">Kembali</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hitung mundur dari 1 menit
        var countdownMinutes = 1;
        var countdownSeconds = countdownMinutes * 60;
        var countdownElement = document.getElementById('countdown');
        
        function updateCountdown() {
            var minutes = Math.floor(countdownSeconds / 60);
            var seconds = countdownSeconds % 60;
            
            // Tambahkan nol di depan angka jika kurang dari 10
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            
            countdownElement.textContent = minutes + ':' + seconds;
            
            if (countdownSeconds > 0) {
                countdownSeconds--;
            } else {
                // Arahkan ke halaman absensi setelah waktu habis
                window.location.href = "{{ url('absen') }}/{{$schedule->id}}";
            }
        }
        
        // Perbarui hitung mundur setiap detik
        setInterval(updateCountdown, 1000);
        
        // Jalankan sekali untuk segera menampilkan waktu awal
        updateCountdown();
    });
</script>
@endsection