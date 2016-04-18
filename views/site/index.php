<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
$this->title = 'ADD CLIENT';
?>
<div class="site-client">
    <h1><?= Html::encode($this->title) ?></h1>
    <a class="btn btn-primary" href="/basic/web/index.php?r=site%2Fclient">Client List</a>

    <?php if (Yii::$app->session->hasFlash('formSubmitted')): ?>

        <div class="alert alert-success">
            Your form has been submitted successfully. <br> Please click on <strong>Client List</strong> to see the details.
        </div>

    <?php else: ?>

        <div class="row form">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'gender')->dropDownList(['Female' => 'Female', 'Male' => 'Male']); ?>
                <?= $form->field($model, 'phone'); ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'address'); ?>
                <?= $form->field($model, 'nationality'); ?>
                <?= $form->field($model, 'education_background')->textArea(['rows' => 6]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<script src="/basic/web/assets/225ded7c/jquery.js"></script>
<script src="/basic/web/assets/eb112ea7/yii.js"></script>
<script src="/basic/web/assets/eb112ea7/yii.validation.js"></script>
<script src="/basic/web/assets/eb112ea7/yii.activeForm.js"></script>
<script src="/basic/web/assets/ef95db48/js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#contact-form').yiiActiveForm([{"id": "contactform-name", "name": "name", "container": ".field-contactform-name", "input": "#contactform-name", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {"message": "Name cannot be blank."});
                }}, {"id": "contactform-phone", "name": "phone", "container": ".field-contactform-phone", "input": "#contactform-phone", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {"message": "Phone cannot be blank."});
                }}, {"id": "contactform-email", "name": "email", "container": ".field-contactform-email", "input": "#contactform-email", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {"message": "Email cannot be blank."});
                    yii.validation.email(value, messages, {"pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/, "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/, "allowName": false, "message": "Email is not a valid email address.", "enableIDN": false, "skipOnEmpty": 1});
                }}, {"id": "contactform-education_background", "name": "education_background", "container": ".field-contactform-education_background", "input": "#contactform-education_background", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {"message": "Education Background cannot be blank."});
                }}], []);
    });
</script>