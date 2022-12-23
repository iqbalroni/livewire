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
        @if ($status_update)
            <livewire:siswa.siswa-update></livewire:siswa.siswa-update>
        @else
            <livewire:siswa.siswa-add></livewire:siswa.siswa-add>
        @endif
        <div class="mt-3 mb-5">
            <div class="card shadow">
                <div class="card-body">
                    @if ($cari != '')
                        <h5>Hasil Dari Mencari Data {{ ucwords($cari) }}</h5>
                    @else
                        <h5>Tabel Data Siswa</h5>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input autofocus wire:model="cari" type="text" class="form-control"
                                    placeholder="Search">
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->kelas . ' ' . $row->jurusan }}</td>
                                    <td>
                                        <div wire:click='getDataSiswa({{ $row->id }})'
                                            class="btn btn-warning btn-sm">Edit</div>
                                        <div wire:click='DeleteSiswa({{ $row->id }})'
                                            class="btn btn-danger btn-sm">Hapus</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="paginate">
                        {{ $data->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
