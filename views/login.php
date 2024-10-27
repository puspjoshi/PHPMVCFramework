<?php
/**
* @var $model \app\models\User 
* @var $this \eork\phpmvc\View
*/

$this->title = "Login";
?>

<h1>Login page</h1>
<?php

  use eork\phpmvc\form\Form;

  $form = Form::begin('','post');
?>
    
    
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php
  Form::end();
?>
