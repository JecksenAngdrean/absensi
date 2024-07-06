@extends('user.layouts.layout3')

@section('content')
<div id="absen">
    <div class="container">
        
        <h5>Tahun Akademik:</h5>
        <div class="row">
            <form style="padding: 15px" method="GET" action="{{ url('datadosen') }}" class="form-inline">
                @csrf
                <div class="form-group mb-2">
                    <label for="tahunAkademik" class="sr-only">Tahun Akademik</label>
                    <select class="form-control" id="tahunAkademik" name="tahunakademik" required>
                        <option value="">Pilih Tahun Akademik</option>
                        @foreach($tahunAkademiks as $ta)
                        <option value="{{ $ta->id }}" {{ request('tahunakademik') == $ta->id ? 'selected' : '' }}>{{ $ta->tahun_akademik }} {{ $ta->semester }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Data Dosen</h4>
                @if(isset($pesan))
                    {{ $pesan }}
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Dosen</th>
                            <th>Jumlah Mata Kuliah</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dosenData as $index => $dosen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dosen['nama'] }}</td>
                            <td>{{ $dosen['jumlah_mata_kuliah'] }}</td>
                            <td>
                            <a href="{{ url('datadosen') }}/{{ $dosen['id'] }}?bulan={{ date('Y-m') }}" class="btn btn-primary">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection