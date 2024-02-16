<main role="main" class="container">
    <?php $this->load->view('layouts/_alert');
    ?>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Formulir Alamat Pengiriman</div>
                <div class="card-body">
                    <form action="<?= base_url("/checkout/create") ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama penerima" value="<?= $input->name ?>">
                            <?= form_error('name') ?>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" cols="30" rows="5" class="form-control"><?= $input->address; ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="text" class="form-control" name="phone" placeholder="Masukkan nomor telepon penerima" value="<?= $input->phone ?>">
                            <?= form_error('phone'); ?>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            Cart
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Qty</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart as $row) : ?>
                                        <tr>
                                            <td><?= $row->title; ?></td>
                                            <td><?= $row->qty; ?></td>
                                            <td class="text-end">Rp. <?= number_format($row->price, 0, ',', '.'); ?>,-</td>
                                            <td class="text-end">Rp. <?= number_format($row->subtotal, 0, ',', '.'); ?>,-</td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">Total</th>
                                        <th class="text-end">Rp. <?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.'); ?>,-</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>