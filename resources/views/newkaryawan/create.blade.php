@extends('template')
@section('content')

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fas fa-user-plus mr-2"></i>Tambah Data Karyawan</h4>
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
            @endif

            <form method="POST" action="{{ route('eas.store') }}">
                @csrf
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">NIP</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="NIP"
                               placeholder="Contoh: 123456789" maxlength="9" required>
                        <small class="form-text text-muted">Harus 9 karakter dan unik</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Nama Lengkap</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Pangkat</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="pangkat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Gaji</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="gaji" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary mr-2">
                            <i class="fas fa-save mr-2"></i>Simpan
                        </button>
                        <a href="{{ route('eas.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

