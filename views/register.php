<?php
/** @var $this \eork\phpmvc\View */

$this->title = "Register";
?>
<h1>Register page</h1>
<?php

use eork\phpmvc\form\Form;

  $form = Form::begin('','post');
  ?>
    <div class="row">
      <div class="col">
        <?php echo $form->field($model, 'firstname'); ?>
      </div>
      <div class="col">
        <?php echo $form->field($model, 'lastname'); ?>
      </div>
    </div>
    
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>

    <button type="submit" class="btn btn-primary">Submit</button>
<?php
  Form::end();
?>
