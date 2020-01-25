<div class="content-wrapper">
    <section class="content">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>">
                <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $mahasiswa['nim']; ?>">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $mahasiswa['tgl_lahir']; ?>">
            </div>
            <div class="form-group">
                <label for="">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Multimedia</option>
                    <option>Tehknik Komputer Jaringan</option>
                    <option>Tehknik Bisnis Sepeda Montor</option>
                </select>
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </section>
</div>