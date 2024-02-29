<h1>Create an account</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form action="" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" value="<?= isset($model->firstname)? $model->firstname:''; ?>" class="form-control<?php echo $model->hasErrors('firstname') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('firstname')?>
        </div>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?= isset($model->lastname)? $model->lastname:''; ?>" class="form-control<?php echo $model->hasErrors('lastname') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('lastname')?>
        </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?= isset($model->email)? $model->email:''; ?>" class="form-control<?php echo $model->hasErrors('email') ? ' is-invalid' : '' ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('email')?>
        </div>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" value="<?= isset($model->password)? $model->password:''; ?>" class="form-control<?php echo $model->hasErrors('password') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('password')?>
        </div>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" value="<?= isset($model->confirmPassword)? $model->confirmPassword:''; ?>" class="form-control<?php echo $model->hasErrors('confirmPassword') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('confirmPassword')?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>