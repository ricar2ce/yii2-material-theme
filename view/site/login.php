<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
        <div class="card card-login">
            <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="card-body ">
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput() ?>
                  <!--   <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control"> -->
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                   <!--  <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control"> -->
                </div>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
           <div class="card-footer justify-content-center">
                <?= Html::submitButton('Login', ['class' => 'btn btn-rose btn-link btn-block', 'name' => 'login-button']) ?>
           </div>
           <div class="card-footer">
           </div>
           <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
