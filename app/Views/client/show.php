<?= $this->extend('template/layout')?>
<?= $this->section('content')?>

<h2 class="text-center">Información de  <?= $client['name']?></h2>

<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 m-auto">
        <div class="card p-2 mt-4">
            <ul class="p-0">
                <li class="list-group-item d-flex justify-content-between border-0">
                    <p>Nombre</p>
                    <p><?= $client['name']?></p>
                </li>
                <li class="list-group-item d-flex justify-content-between border-0 border-bottom-1">
                    <p>Apellido paterno</p>
                    <p><?= $client['lastname']?></p>
                </li>
                <li class="list-group-item d-flex justify-content-between border-0">
                    <p>Apellido materno</p>
                    <p><?= $client['mothers_lastname']?></p>
                </li>
                <li class="list-group-item d-flex justify-content-between border-0">
                    <p>Fecha de nacimiento</p>
                    <p><?= $client['birthday']?></p>
                </li>
            </ul>
        </div>

        <a href="<?= base_url('home')?>" class="btn btn-default mt-5">Regresar a la lista</a>
</div>


<?= $this->endSection()?>