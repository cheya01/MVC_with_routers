<?php
/** @var $model \app\models\User */
?>
<h1>Login</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php $form = (new app\core\Form\Form)->begin('', "post")?>

<?php echo $form->field($model, 'email')?>
<?php echo $form->field($model, 'password')->passwordField()?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo (new app\core\Form\Form)->end()?>