               
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Pengurus</h1>
                    <div class="mb-4 text-primary">
                        Halaman ini digunakan untuk mengelola data-data pengurus. User dapat melakukan:
                        <ul>
                            <li type="1">Melihat data pengurus</li>
                            <li type="1">Menambah, mengubah dan menghapus data pengurus</li>
                        </ul>
                    </div>

                    <!-- DataTales Example -->               
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Form Tambah Data Pengurus
                            </h6>
                        </div>
                        <form action="pengurus_insert.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jabatan:</label>
                                <input type="text" class="form-control" placeholder="Masukkan jabatan" name="jabatan" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Jabatan:</label>
                                <input type="text" class="form-control" placeholder="Masukkan deskripsi jabatan jika diperlukan" name="jabatan2">
                            </div>
                            <div class="form-group">
                                <label>Nama pengurus:</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama pengurus" name="namapengurus" required>
                            </div>
                            <div class="form-group">
                                <label>Instagram:</label>
                                <input type="text" class="form-control" placeholder="Masukkan instagram" name="instagram" required>
                            </div>
                            <div class="form-group">
                                <label>Linkedin:</label>
                                <input type="text" class="form-control" placeholder="Masukkan linkedin" name="linkedin" required>
                            </div>
                            <div class="form-group">
                                <label>Periode: YYYY/YYYY</label>
                                <input type="text" class="form-control" placeholder="Masukkan periode" name="periode" pattern="[0-9]{4}/[0-9]{4}" required>
                                <small>Contoh: 2023/2024</small>
                            </div>
                            <div class="form-group">
                                <label>Foto:
                                </label>
                                <input type="file" class="form-control" placeholder="Masukkan foto" name="foto" required>
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=pengurus" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                    </div>

                </div>


