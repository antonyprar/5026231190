@extends('template')
@section('content')

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><i class="fas fa-users mr-2"></i>Daftar Karyawan</h4>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Pangkat</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $k)
                        <tr>
                            <td>{{ $k->NIP }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->pangkat }}</td>
                            <td>Rp {{ number_format($k->gaji, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('eas.destroy', $k->NIP) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 text-right">
                <a href="{{ route('eas.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle mr-2"></i>Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
