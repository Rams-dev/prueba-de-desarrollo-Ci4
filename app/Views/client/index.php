<?= $this->extend('template/layout')?>
<?= $this->section('content')?>

<div class="d-flex justify-content-start">
    <a href="<?= base_url('Home/create')?>" class="btn btn-success btn-rounded d-flex align-items-center"><i class="fa fa-plus me-2"></i> Agregar</a>
</div>

<?php 
    if(count($clients) == 0){
?>

<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert" >
    <h3 class="text-center">Aun no tienes clientes agregados</h3>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php }else{?>
    <h2 class="text-center text-info">clientes</h2>

    <table class="table mt-5">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Nombre completo</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client) :?>
            <tr>
                <td><?=$client["id"]?></td>
                <td ><?=$client["name"]." ".$client["lastname"]." ".$client["mothers_lastname"]?></td>
                <td>
                    <div class="flex">
                        <a href="<?= base_url('home/show/'.$client['id'])?>" class="btn btn-info btn-sm text-white"><i class="fa fa-eye"></i></a>
                        <a href="<?= base_url('Home/edit/'.$client['id'])?>" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a>

                        <form action="<?='home/destroy/'.$client['id']?>" class="d-flex">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" onclick="return confirm('¿Realmente deseas eliminar este registro?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach ?> 
    </tbody>
    </table>

<?php } ?>
<?= $this->endSection()?>