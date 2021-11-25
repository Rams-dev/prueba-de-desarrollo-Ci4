<?= $this->extend('template/layout')?>
<?= $this->section('content')?>

<h2 class="text-center">Modificar a <?= $client['name']?></h2>


<div class="col-lg-5 col-md-6 col-sm-10 col-xs-12 m-auto">
    <form action=<?= base_url("home/update/".$client['id'])?> method="post">
        <!-- <input type="hidden" name="_method" value="PATCH"> -->
        <?= $this->include('client/form')?>             
        <div class="d-flex justify-content-between mt-5">
            <button type="submit" class="btn btn-success px-2">Modificar cliente</button>
            <a href="<?=base_url('home')?>" class="btn btn-danger px-2">Cancelar</a>
        </div>
    </form>
</div>


<?= $this->endSection()?>