<?php
/** 
 * @var $this \eork\phpmvc\View 
 * @var $model \app\models\ContactForm
*/

use eork\phpmvc\form\Form;

$this->title = "Contact";
?>
<h1>Contact Us page</h1>

<?php $form = Form::begin('','post');?>

<?php echo $form->field($model, 'subject');?>
<?php echo $form->field($model, 'email');?>
<?php echo $form->textareaField($model, 'body');?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>

