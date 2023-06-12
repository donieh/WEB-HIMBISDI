<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-custom">Manajemen Data Admin</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-custom">
                Form Tambah Data Admin
            </h6>
        </div>
        <form action="admin_insert.php" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" placeholder="Masukkan email" name="email" required value="<?= $data['email'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" required value="<?= $data['nama'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label>Password: <sup class="text-danger">Kosongkan jika tidak mengubah password</sup></label>
                    <input type="password" class="form-control" placeholder="Masukkan password" name="password">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="index.php?menu=admin" class="btn btn-warning">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>

</div>
