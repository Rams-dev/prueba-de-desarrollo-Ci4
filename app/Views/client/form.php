
<div class="form-group mb-3">
    <label for="name">Nombre</label>
    <input required type="text" class="form-control" name="name" <?php if(isset($client["name"])){ ?> value="<?= $client["name"]?>" <?php } ?>>
</div>

<div class="form-group mb-3">
    <label for="lastname">Apellido paterno</label>
    <input required type="text" class="form-control" name="lastname" <?php if(isset($client["lastname"])){ ?> value="<?= $client["lastname"]?>" <?php } ?>>
</div>
<div class="form-group mb-3">
    <label for="lastname">Apellido materno</label>
    <input required type="text" class="form-control" name="mothers_lastname" <?php if(isset($client["mothers_lastname"])){ ?> value="<?= $client["mothers_lastname"]?>" <?php } ?>>
</div>
<div class="form-group mb-3">
    <label for="birthday">fecha de nacimiento</label>
    <input required type="date" class="form-control" name="birthday" <?php if(isset($client["birthday"])){ ?> value="<?= $client["birthday"]?>" <?php } ?>>
</div>