@extends('user.layouts.layout')

@section('content')
<div id="absen">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-success">Absensi Tahun Akademik: {{$ta->tahun_akademik}}/{{$ta->semester}}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="tg table">
          <thead>
            <tr>
              <th class="tg-6h95" rowspan="2">No</th>
              <th class="tg-6h95" rowspan="2">Kode</th>
              <th class="tg-6h95" rowspan="2">Mata Kuliah</th>
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
          @forelse ($absens as $index => $absen)
            <tr>
              <td class="tg-3xi5">{{ $index+1 }}</td>
              <td class="tg-3xi5">{{ $absen->schedule['matkul']['kode'] }}</td>
              <td class="tg-3xi5">{{ $absen->schedule['matkul']['matkul'] }}</td>
              <td class="tg-3xi5">{{ $absen->p1 }}</td>
              <td class="tg-3xi5">{{ $absen->p2 }}</td>
              <td class="tg-3xi5">{{ $absen->p3 }}</td>
              <td class="tg-3xi5">{{ $absen->p4 }}</td>
              <td class="tg-3xi5">{{ $absen->p5 }}</td>
              <td class="tg-3xi5">{{ $absen->p6 }}</td>
              <td class="tg-3xi5">{{ $absen->p7 }}</td>
              <td class="tg-3xi5">{{ $absen->p8 }}</td>
              <td class="tg-3xi5">{{ $absen->p9 }}</td>
              <td class="tg-3xi5">{{ $absen->p10 }}</td>
              <td class="tg-3xi5">{{ $absen->p11 }}</td>
              <td class="tg-3xi5">{{ $absen->p12 }}</td>
              <td class="tg-3xi5">{{ $absen->p13 }}</td>
              <td class="tg-3xi5">{{ $absen->p14 }}</td>
              <td class="tg-3xi5">{{ $absen->p15 }}</td>
              <td class="tg-3xi5">{{ $absen->p16 }}</td>
              <td class="tg-3xi5">
                  {{ number_format((($absen->p1 === 1 ? 1 : 0) + ($absen->p2 === 1 ? 1 : 0) + ($absen->p3 === 1 ? 1 : 0) + ($absen->p4 === 1 ? 1 : 0) + ($absen->p5 === 1 ? 1 : 0) + ($absen->p6 === 1 ? 1 : 0) + ($absen->p7 === 1 ? 1 : 0) + ($absen->p8 === 1 ? 1 : 0) + ($absen->p9 === 1 ? 1 : 0) + ($absen->p10 === 1 ? 1 : 0) + ($absen->p11 === 1 ? 1 : 0) + ($absen->p12 === 1 ? 1 : 0) + ($absen->p13 === 1 ? 1 : 0) + ($absen->p14 === 1 ? 1 : 0) + ($absen->p15 === 1 ? 1 : 0) + ($absen->p16 === 1 ? 1 : 0)) / 16 * 100, 2) }}%
              </td>
            </tr>
            @empty
            <tr>
              <td>
                Jadwal Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
  </div>
</div>
@endsection