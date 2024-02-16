<main class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card mb-3">
                <div class="card-header">
                    <span>Formulir Produk</span>
                </div>
                <div class="card-body">
                    <?= form_open_multipart($form_action, ['method' => 'POST']); ?>
                    <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                    <div class="form-group mb-2">
                        <label for="produk">Produk</label>
                        <?= form_input('title', $input->title, [
                            'class' => 'form-control', 'id' => 'title',
                            'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true
                        ]) ?>
                        <?= form_error('title') ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description">Deskripsi</label>
                        <?= form_textarea(['name' => 'description', 'value' =>
                        $input->description, 'row' => 4, 'class' => 'form-control']) ?>
                        <?= form_error('descriptions') ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="harga">Harga</label>
                        <?= form_input(['type' => 'number', 'name' => 'price', 'value' =>
                        $input->price, 'class' => 'form-control', 'required' => true]); ?>
                        <?= form_error('price') ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="kategori">Kategori</label>
                        <?= form_dropdown(
                            'id_category',
                            getDropDownList(
                                'category',
                                ['id', 'title']
                            ),
                            $input->id_category,
                            ['class' => 'form-control']
                        ) ?>
                        <?= form_error('id_category') ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Ada Stock ?</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <?= form_radio([
                                'name' => 'is_available', 'value' => 1,
                                'checked' => $input->is_available == 1 ? true : false,
                                'class' => 'form-check-input'
                            ]) ?>
                            <label for="" class="form-check-label">Tersedia</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio([
                                'name' => 'is_available', 'value' => 0,
                                'checked' => $input->is_available == 0 ? true : false,
                                'class' => 'form-check-input'
                            ]) ?><label for="" class="form-check-label">Kosong</label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Gambar</label>
                        <br>
                        <?= form_upload('image') ?>
                        <?php if ($this->session->flashdata('image_error')) : ?>
                            <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                        <?php endif; ?>
                        <?php if ($input->image) : ?>
                            <img src="<?= base_url("/images/product/$input->image") ?>" alt="" height="150">
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Slug</label>
                        <?= form_input('slug', $input->slug, [
                            'class' => 'form-control', 'id' => 'slug',
                            'required' => true
                        ]) ?>
                        <?= form_error('slug') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>