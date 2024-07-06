@extends('user.layouts.layout2')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h4>Edit Pertemuan: {{ $schedule->matkul->matkul }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('detailschedule.update', ['id' => $schedule->id, 'idschedule' => $detailSchedule->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tanggal_pertemuan">Tanggal Pertemuan</label>
                    <input type="date" name="tanggal_pertemuan" class="form-control" value="{{ $detailSchedule->tanggal_pertemuan }}">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{url('absen')}}/{{$schedule->id}}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection