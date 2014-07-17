<?php $form=$this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'type' => 'horizontal',
	)
);?>
	<div class="account-wall">
		<div class="ribbon-wrapper">
			<div class="ribbon-front">
				<h1 class="text-center" style="color:white;"><b>Login</b></h1>
			</div>
			<div class="ribbon-edge-topleft"></div>
			<div class="ribbon-edge-topright"></div>
			<div class="ribbon-edge-bottomleft"></div>
			<div class="ribbon-edge-bottomright"></div>
			<div class="ribbon-back-left"></div>
			<div class="ribbon-back-right"></div>
		</div>
		<hr>
        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
        <form class="form-signin">
        <?php echo $form->textFieldGroup(
			$model,
			'username',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-10 col-lg-offset-1',
				),
				'prepend' => '<i class="glyphicon glyphicon-user"></i>',
				'labelOptions' => array('label' => false),
			)
		); ?>			

		<?php echo $form->passwordFieldGroup(
			$model,
			'password',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-lg-10 col-lg-offset-1',
				),
				'prepend' => '<i class="glyphicon glyphicon-lock"></i>',
				'labelOptions' => array('label' => false),
			)
		); ?>
		<?php echo CHtml::submitButton(Yii::t('SVGA', 'Inicia sessió'), array("class"=>"btn btn-lg btn-primary btn-block"));?> 	

		</div>

		</form>
		<br/><br/>
		<?php $this->endWidget(); ?>