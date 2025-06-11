@extends('template')
@section('content')

	<h3>Data Air Conditioner</h3>
    <br>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/tugascrud/tambah" class="btn btn-success">
            Tambah Air Conditioner <i class="bi bi-plus-circle ms-2"></i>
        </a>
        <div class="mb-4">
            <form action="/tugascrud/cari" method="GET" class="d-flex" style="max-width:400px; gap:10px;">
                <input type="text" name="cari" class="form-control" placeholder="Cari air conditioner..." value="{{ old('cari') }}">
                <button class="btn btn-secondary" type="submit">
                <i class="bi bi-search"></i> Cari
                </button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="text-center">Merk</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Tersedia</th>
                    <th class="text-center">Berat</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ac as $k)
                <tr>
                    <td>{{ $k->merkairconditioner }}</td>
                    <td class="text-center">{{ $k->hargaairconditioner }}</td>
                    <td class="text-center">
                        @if($k->tersedia == '1')
                            <span class="badge badge-success">Ya</span>
                        @else
                            <span class="badge badge-danger">Tidak</span>
                        @endif
                    </td>
                    <td class="text-center">{{ $k->berat }}</td>
                    <td class="text-center">
                        <a href="/tugascrud/edit/{{ $k->ID }}" class="btn btn-sm btn-primary mr-1">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="/tugascrud/delete/{{ $k->ID }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br/>
    {{ $ac->links() }}

@endsection
