<div class="container mt-3">
    <div class="row mb-3">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL;?>/mahasiswa/cari" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) :?>
                <li class="list-group-item">
                    <?= $mhs['nama'];?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge text-bg-danger float-end ms-2 text-decoration-none" onclick="return confirm('apakah yakin untuk menghapus?');">Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge text-bg-success float-end ms-2 text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'];?>">Edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge text-bg-primary float-end ms-2 text-decoration-none">Detail</a>
                </li>
                <?php endforeach?>
            </ul>   
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                    <option value="Bisnis Digital">Bisnis Digital</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>