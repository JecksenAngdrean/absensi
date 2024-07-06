@extends('user.layouts.layout2')

@section('content')
<div id="absen">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="{{ route('absen.list') }}" class="btn btn-primary pull-left mb-3">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h4 class="text-success">Absensi Tahun Akademik: {{ $ta->tahun_akademik }}/{{ $ta->semester }}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table>
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
            <h6>NB: Jika Tombol Generate QR-Code Ditekan Maka Otomatis Pertemuan Dianggap Telah Dilaksanakan dan Jika Waktu Absen Habis Tidak Dapat Diulang Lagi</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Pertemuan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detailSchedules as $detailSchedule)
                    <tr>
                        <td>{{ $detailSchedule->pertemuan }}</td>
                        <td>{{ \Carbon\Carbon::parse($detailSchedule->tanggal_pertemuan)->format('d F Y') }}</td>
                        <td>@if($detailSchedule->status_detail_schedule == '0') Belum Ada Pertemuan @else Pertemuan Selesai @endif</td>
                        <td>
                          @if($detailSchedule->status_detail_schedule == '0')
                            <a href="{{ route('detailschedule.edit',  ['id' => $schedule->id,'idschedule'=>$detailSchedule->id]) }}" class="btn btn-warning">Ubah</a>
                            <a href="{{ route('generate.qr', ['id' => $schedule->id]) }}?pertemuan={{ $detailSchedule->pertemuan }}" class="btn btn-primary generate-qr" data-tanggal="{{ $detailSchedule->tanggal_pertemuan }}">Generate QR Code</a>
                          @endif
                          </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="{{ route('absen.cetak', $id) }}" target="_blank" class="btn btn-success mt-3 mb-3">Cetak Absen <i class="fas fa-print"></i></a>
        <a href="{{ route('absen.edit', $id) }}" class="btn btn-success mt-3 mb-3">Isi Absen</a>
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="tg table">
          <thead>
            <tr>
              <th class="tg-6h95" rowspan="2">No</th>
              <th class="tg-6h95" rowspan="2">Nim</th>
              <th class="tg-6h95" rowspan="2">Nama</th>
              <th class="tg-k7qf" colspan="16">Pertemuan</th>
              <th class="tg-6h95" rowspan="2">%</th>
            </tr>
            <tr>
              <td class="tg-k7qf">1</td>
              <td class="tg-k7qf">2</td>
              <td class="tg-k7qf">3</td>
              <td class="tg-k7qf">4</td>
              <td class="tg-k7qf">5</td>
              <td class="tg-k7qf">6</td>
              <td class="tg-k7qf">7</td>
              <td class="tg-k7qf">8</td>
              <td class="tg-k7qf">9</td>
              <td class="tg-k7qf">10<br></td>
              <td class="tg-k7qf">11</td>
              <td class="tg-k7qf">12</td>
              <td class="tg-k7qf">13</td>
              <td class="tg-k7qf">14</td>
              <td class="tg-k7qf">15</td>
              <td class="tg-k7qf">16</td>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $index => $item)
              <tr>
                <td class="tg-3xi5">{{ $index+1 }}</td>
                <td class="tg-3xi5">{{ $item->mahasiswas->nim }}</td>
                <td class="tg-3xi5">{{ $item->mahasiswas->nama }}</td>
                <td class="tg-3xi5">{{ $item->p1 }}</td>
                <td class="tg-3xi5">{{ $item->p2 }}</td>
                <td class="tg-3xi5">{{ $item->p3 }}</td>
                <td class="tg-3xi5">{{ $item->p4 }}</td>
                <td class="tg-3xi5">{{ $item->p5 }}</td>
                <td class="tg-3xi5">{{ $item->p6 }}</td>
                <td class="tg-3xi5">{{ $item->p7 }}</td>
                <td class="tg-3xi5">{{ $item->p8 }}</td>
                <td class="tg-3xi5">{{ $item->p9 }}</td>
                <td class="tg-3xi5">{{ $item->p10 }}</td>
                <td class="tg-3xi5">{{ $item->p11 }}</td>
                <td class="tg-3xi5">{{ $item->p12 }}</td>
                <td class="tg-3xi5">{{ $item->p13 }}</td>
                <td class="tg-3xi5">{{ $item->p14 }}</td>
                <td class="tg-3xi5">{{ $item->p15 }}</td>
                <td class="tg-3xi5">{{ $item->p16 }}</td>
                <td class="tg-3xi5">
                  {{ number_format((($item->p1 === 1 ? 1 : 0) + ($item->p2 === 1 ? 1 : 0) + ($item->p3 === 1 ? 1 : 0) + ($item->p4 === 1 ? 1 : 0) + ($item->p5 === 1 ? 1 : 0) + ($item->p6 === 1 ? 1 : 0) + ($item->p7 === 1 ? 1 : 0) + ($item->p8 === 1 ? 1 : 0) + ($item->p9 === 1 ? 1 : 0) + ($item->p10 === 1 ? 1 : 0) + ($item->p11 === 1 ? 1 : 0) + ($item->p12 === 1 ? 1 : 0) + ($item->p13 === 1 ? 1 : 0) + ($item->p14 === 1 ? 1 : 0) + ($item->p15 === 1 ? 1 : 0) + ($item->p16 === 1 ? 1 : 0)) / 16 * 100, 2) }}%
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="19">Mahasiswa Belum Mengambil KRS</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const generateButtons = document.querySelectorAll('.generate-qr');
        generateButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const pertemuanDate = new Date(this.getAttribute('data-tanggal'));
                const currentDate = new Date();

                if (currentDate < pertemuanDate) {
                    alert('QR code tidak bisa dimunculkan karena belum tanggal pertemuan.');
                    return;
                }

                const confirmation = confirm('Apakah Anda yakin ingin membuka pertemuan ini?');
                if (confirmation) {
                    window.location.href = this.href;
                }
            });
        });
    });
</script>
@endsection
