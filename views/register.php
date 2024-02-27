<h1>Create an account</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form action="" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" value=" value="<?php echo $model->$firstname ?>"" class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('firstname')?>
        </div>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>