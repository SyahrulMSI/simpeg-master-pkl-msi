<head>
    <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" class="stylesheet"> -->
    <style>
    body {
        background-image: url("assets/img/dinas.jpg");
        background-repeat: no-repeat;
        background-size: cover
    }
    </style>
</head>

<body>

    <div class="container">
        <style>
        body {
            background-image: url("assets/img/dinas.jpg");
            background-repeat: no-repeat;
            background-size: cover
        }
        </style>
        <!-- Outer Row -->
        <div class="image-center mb-12 ">
            <a href="<?=base_url()?>" class="logo"><img src="<?=base_url()?>assets/img/logo-light.png" width="20%"
                    style="display:block; margin:auto;" alt="logo"></a>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan'); ?>
                                    <form method="post" action="<?php echo base_url('auth/login'); ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username" name="username" autofocus>
                                            <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password"
                                                name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                                    </form>
                                    <hr>

                                    <!-- <div class="text-center">
                                    <a class="small" href="<?php echo base_url('registrasi'); ?>">Belum punya akun? Daftar!</a>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    </div>

    </div>
</body>

</html>