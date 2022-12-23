<div>
    <div class="container mt-5">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('pesan') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <livewire:guru.guru-add>
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->nama_guru }}</td>
                                    <td>{{ $item->mapel }}</td>
                                    <td>{{ $item->kelas . ' ' . $item->jurusan }}</td>
                                    <td>
                                        <div class="btn btn-warning btn-sm">Edit</div>
                                        <div class="btn btn-danger btn-sm">Hapus</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
