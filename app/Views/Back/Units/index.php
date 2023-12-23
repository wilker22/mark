<?php echo $this->extend('Back/Layout/main'); ?>

<?php echo $this->section('title'); ?>

<?php echo $title ?? ''; ?>

<?php echo $this->endSection(); ?>



<?php echo $this->section('css'); ?>
<!-- Custom styles for this page -->
<link href="<?php echo base_url('back/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<?php echo $this->endSection(); ?>



<?php echo $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
            <a href="<?php echo route_to('units.new')?>" class="btn btn-success btn-sm float-right">Nova</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
<<<<<<< HEAD
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ações</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Criado</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($units as $unit) : ?>
                            <tr>
                                <td>
                                    <!-- Default dropup button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Dropup
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php route_to('units.edit', $unit->id)?>">Editar</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $unit->name ?></td>
                                <td><?php echo $unit->email ?></td>
                                <td><?php echo $unit->phone ?></td>
                                <td><?php echo $unit->starttime ?></td>
                                <td><?php echo $unit->endtime ?></td>
                                <td><?php echo $unit->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
=======
                   <?php echo $units ?>
>>>>>>> 7fdaa5646703ae882f582af77ceecba6e014f57f
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

<?php echo $this->endSection(); ?>




<?php echo $this->section('js'); ?>

<!-- Page level plugins -->
<script src="<?php echo base_url('back/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('back/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('back/') ?>js/demo/datatables-demo.js"></script>

<?php echo $this->endSection(); ?>