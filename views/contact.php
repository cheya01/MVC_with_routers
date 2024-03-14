<?php
/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */

use app\core\Form\TextAreaField;

$this->title = 'Contact';

?>
<h1>Contact</h1>

<?php $form = (new app\core\Form\Form)->begin('', 'post')?>
<?php echo $form->field($model, 'subject')?>
<?php echo $form->field($model, 'email')?>
<?php echo new TextAreaField($model, 'body')?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php (new app\core\Form\Form)->end()?>
