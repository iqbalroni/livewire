<div>
    <div class="mt-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="container">
                    <h3>Update Siswa</h3>
                    <form wire:submit.prevent="editSiswa" class="row">
                        <input type="hidden" wire:model='id_siswa'>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input autofocus wire:model="nama" type="text" class="form-control">
                                @error('nama')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kelas</label>
                                <select wire:model="kelas" class="custom-select" id="inputGroupSelect01">
                                    <option selected value="">Choose...</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                @error('kelas')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <select wire:model="jurusan" class="custom-select" id="inputGroupSelect01">
                                    <option selected value="">Choose...</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                    <option value="Desain komunikasi visual">Desain komunikasi visual</option>
                                </select>
                                @error('jurusan')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-dark">Update Siswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
