<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 ?>
<h1>Blog Create</h1>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title') ?>

<?= $form->field($model, 'detail')->textArea(); ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'url') ?>

<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>


<?php ActiveForm::end(); ?>
