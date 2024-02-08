<main class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Kategori</span>
                    <a href="/admin-category-form.html" class="btn btn-sm btn-secondary">Tambah</a>

                    <div class="float-end">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm text-center" placeholder="Cari">
                                <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
                                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-eraser"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr>
                                    <td>2</td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['slug'] ?></td>
                                    <td>
                                        <a href="#"><button class="btn btn-sm">
                                                <i class="fas fa-edit text-info"></i>
                                            </button></a>
                                        <button class="btn btn-sm" onclick="return confirm('Yakin ingin hapus ?')">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <?= $pagination ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>