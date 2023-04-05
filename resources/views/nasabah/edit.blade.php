@extends('nasabah.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Nasabah
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('nasabah.update', $Nasabah->no_rekening) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="no_rekening">No Rekening</label>
                        <input type="text" name="no_rekening" class="form-control" id="no_rekening" value="{{ $Nasabah->no_rekening }}" ariadescribedby="no_rekening">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Nasabah->nama }}" ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $Nasabah->alamat }}" ariadescribedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="jenis_tabungan">Jenis Tabungan</label>
                        <input type="text" name="jenis_tabungan" class="form-control" id="jenis_tabungan" value="{{ $Nasabah->jenis_tabungan }}" ariadescribedby="jenis_tabungan">
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo</label>
                        <input type="text" name="saldo" class="form-control" id="saldo" value="{{ $Nasabah->saldo }}" ariadescribedby="saldo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection