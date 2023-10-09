<div class="container">
    <h3 class="mb-3">Edit Peminjaman Milik <?= $data['peminjam'] ['nama_peminjam']?></h3>
    <form action="<?= BASE_URL; ?>/peminjam/updatePeminjam" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['peminjam']['id']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Nama Peminjaman</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['peminjam']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Jenis Barang</label>
                <select name="jenis_barang" class="form-select" aria-label="Default select example">
                    <option disable hidden selected><?= $data['peminjam']['jenis_barang'] ?></option>
                    <option value="Laptop">Laptop</option>
                    <option value="HP">HP</option>
                    <option value="Adaptor LAN">Adaptor LAN</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="judul">Nomer Barang</label>
                <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['peminjam']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['peminjam']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['peminjam']['tgl_kembali'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

