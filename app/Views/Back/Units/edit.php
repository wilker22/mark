<?php echo $this->extend('Back/Layout/main'); ?>

<?php echo $this->section('title'); ?>

<?php echo $title ?? ''; ?>

<?php echo $this->endSection(); ?>



<?php echo $this->section('css'); ?>


<?php echo $this->endSection(); ?>



<?php echo $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
        </div>
        <div class="card-body">
            <form action="<?php echo (route_to('unit.update', $unit->id)) ?>" method="PUT">
                <?php echo csrf_field() ?>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="name">Nome</label>
                        <input type="text" name="name" value="<?php echo old('name', $unit->name) ?>" class="form-control" aria-describedby="emailHelp" placeholder="Nome">

                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Telefone</label>
                        <input type="text" name="phone" value="<?php echo old('phone', $unit->phone) ?>" class="form-control" placeholder="Telefone">

                    </div>

                    <div class="form-group col-md-4">
                        <label for="coordinator">Coordenador</label>
                        <input type="text" name="coordinator" value="<?php echo old('coordinator', $unit->coodinator) ?>" class="form-control" placeholder="Coordenador">

                    </div>
                    <div class="form-group col-md-4">
                        <label for="starttime">Abertura</label>
                        <input type="time" name="starttime" value="<?php echo old('starttime', $unit->starttime) ?>" class="form-control" placeholder="Inicio Expediente">

                    </div>
                    <div class="form-group col-md-4">
                        <label for="endtime">Fechamento</label>
                        <input type="time" name="endtime" value="<?php echo old('endtime', $unit->endtime) ?>" class="form-control" placeholder="Fim do Expediente">

                    </div>
                    <div class="form-group col-md-4">
                        <label for="servicetime">Tempo de Atendimento</label>
                        <div class="input-group mb-3">
                            
                            <select class="custom-select" name="servicetime" id="servicetime">
                                <option value="0" class="form-control">Escolha a Opcao...</option>
                                <option value="10min" <?php  echo($unit->servicetime == '10min' ? 'selected' : '') ?>>10 Minutos</option>
                                <option value="20min"  <?php  echo($unit->servicetime == '20min' ? 'selected' : '') ?>>20 minutos</option>
                                <option value="30min"  <?php  echo($unit->servicetime == '30min' ? 'selected' : '') ?>>30 minutos</option>
                                <option value="1h"  <?php  echo($unit->servicetime == '1h' ? 'selected' : '') ?>>1 hora</option>
                                <option value="2h"  <?php  echo($unit->servicetime == '2h' ? 'selected' : '') ?>>2 horas</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" value="<?php echo old('email', $unit->email) ?>" class="form-control" placeholder="E-mail">

                    </div>
                    <div class="form-group col-md-4">
                        <label for="address">Enderaco</label>
                        <input type="text" name="address" value="<?php echo old('address', $unit->address) ?>" class="form-control" placeholder="End3ereco">

                    </div>
                    <div class="col-md-12 mb-3 mb-4">
                        <?php echo form_hidden('active', 0); ?>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" value="1" <?php if ($unit->active) : ?> checked <?php endif; ?> class="custom-control-input" id="active" name="active">
                            <label for="active" class="custom-control-label">Registro Ativo</label>
                        </div>
                    </div>


                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

<?php echo $this->endSection(); ?>




<?php echo $this->section('js'); ?>


<?php echo $this->endSection(); ?>