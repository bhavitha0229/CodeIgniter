<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    </script>

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">


                <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                    <li>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> Ci APP </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?php echo base_url(); ?>projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?php echo base_url(); ?>users/register">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>



                    <li>
                        <?php if ($this->session->userdata('logged_in')) : ?>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> LOG OUT </a>
                        <?php endif; ?>
                    </li>



                </ul>



            </div>
        </nav>
    </nav>




    <div class="container">
        <div class="col-xs-3">

            <?php $this->load->view('users/login_view'); ?>

        </div>
        <div class="col-xs-9">
            <?php $this->load->view($main_view); ?>
        </div>

    </div>

</body>

</html>