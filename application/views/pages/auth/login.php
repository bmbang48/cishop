<main class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Login
                </div>
                <div class="card-body">
                    <?= form_open('login', ['methos' => 'POST']) ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan email', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <?=
                    form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>