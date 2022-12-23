<div>
    <div class="mt-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="container">
                    <h3>Tambah Guru</h3>
                    <form wire:submit.prevent='simpandata' class="row">
                        <div class="form-group col-sm-6">
                            <label>Nama</label>
                            <input wire:model='nama' autofocus type="text" class="form-control">
                            @error('nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Mapel</label>
                            <input wire:model='mapel' autofocus type="text" class="form-control">
                            @error('mapel')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Kelas</label>
                            <select wire:model='kelas' class="custom-select" id="inputGroupSelect01">
                                <option selected value="">Choose...</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('kelas')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Jurusan</label>
                            <select wire:model='jurusan' class="custom-select" id="inputGroupSelect01">
                                <option selected value="">Choose...</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                <option value="Desain komunikasi visual">Desain komunikasi visual</option>
                            </select>
                            @error('jurusan')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-dark">Simpan Guru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
