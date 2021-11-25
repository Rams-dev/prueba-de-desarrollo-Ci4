<?= $this->extend('template/layout')?>
<?= $this->section('content')?>
    <h2 class="text-center text-info">Agregar nuevo cliente</h2>
    
    <div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 m-auto mt-5">
        <form action="<?=base_url('home/store')?>" method="post">
            <?= $this->include('client/form')?>             
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-success px-2">Crear cliente</button>
            </div>
        </form>
    </div>

<?= $this->endSection()?>