@extends('user.layouts.layout2')

@section('content')
<div id="absen">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-success">Absensi Tahun Akademik: </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table>
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
        </table>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <table class="tg table">
          <thead>
            <tr>
              <th class="tg-6h95" rowspan="2">No</th>
              <th class="tg-6h95" rowspan="2">Nim</th>
              <th class="tg-6h95" rowspan="2">Nama</th>
              <th class="tg-k7qf" colspan="18">Pertemuan</th>
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
          <form method="post" action="{{ route('absen.update' , $id) }}">
          @method('PUT')
          @csrf
          @forelse ($items as $index => $item)
            <tr>
              <td class="tg-3xi5"><input type="hidden" value="{{ $item->id_mahasiswa }}" name="idMhs[]">{{ $index+1 }}</td>
              <td class="tg-3xi5">{{ $item->mahasiswas->nim }}</td>
              <td class="tg-3xi5">{{ $item->mahasiswas->nama }}</td>
              <td class="tg-3xi5">
              <select id="exampleFormControlSelect1" name="p1[]">
                <option {{ $item->p1 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p1 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p1 === 2 ? 'selected' : '' }}>2</option>
              </select>
              </td>
              <td class="tg-3xi5">
              <select id="exampleFormControlSelect1" name="p2[]">
                <option {{ $item->p2 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p2 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p2 === 2 ? 'selected' : '' }}>2</option>
              </select>
              </td>
              <td class="tg-3xi5">
              <select id="exampleFormControlSelect1" name="p3[]">
                <option {{ $item->p3 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p3 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p3 === 2 ? 'selected' : '' }}>2</option>
              </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p4[]">
                <option {{ $item->p4 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p4 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p4 === 2 ? 'selected' : '' }}>2</option> 
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p5[]">
                <option {{ $item->p5 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p5 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p5 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p6[]">
                <option {{ $item->p6 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p6 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p6 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p7[]">
                <option {{ $item->p7 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p7 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p7 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p8[]">
                <option {{ $item->p8 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p8 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p8 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p9[]">
                <option {{ $item->p9 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p9 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p9 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p10[]">
                <option {{ $item->p10 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p10 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p10 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p11[]">
                <option {{ $item->p11 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p11 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p11 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p12[]">
                <option {{ $item->p12 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p12 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p12 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p13[]">
                <option {{ $item->p13 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p13 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p13 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p14[]">
                <option {{ $item->p14 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p14 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p14 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p15[]">
                <option {{ $item->p15 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p15 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p15 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
              <td class="tg-3xi5">
                <select id="exampleFormControlSelect1" name="p16[]">
                <option {{ $item->p16 === 0 ? 'selected' : '' }}>0</option>
                <option {{ $item->p16 === 1 ? 'selected' : '' }}>1</option>
                <option {{ $item->p16 === 2 ? 'selected' : '' }}>2</option>
                </select>
              </td>
            @empty
            <tr>
              <td>
                Mahasiswa Belum Mengambil KRS
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
        <div class="d-flex">
          <button type="submit" class="btn btn-success ml-auto">Simpan Absen</button>
        </div>
        </form>
      </div>
  </div>
  
</div>
@endsection