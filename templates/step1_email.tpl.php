<?php

$this->data['header'] = $this->t('{selfregister:selfregister:link_newuser}');
$this->data['head'] = '<link rel="stylesheet" href="resources/selfregister.css" type="text/css">';

$this->includeAtTemplateBase('includes/header.php'); ?>

<?php if(isset($this->data['error'])){ ?>
	  <div class="error"><?php echo $this->data['error']; ?></div>
<?php }?>

<div>
	<form method="post" action="newUser.php">
	<?php
		if (isset($this->data['RelayState'])) {
			echo('<input type="hidden" name="RelayState" value="' . $this->data['RelayState'] . '" />');
		}
	?>
		<div class="form-group">
			<p class="help-block"><?php echo $this->t('s1_para1'); ?></p>
    		<label for="lostEmail">Email</label>
			<input type="email" class="form-control" id="lostEmail" placeholder="Email" name="emailreg">
			<?php if (isset($this->data['email'])) echo htmlspecialchars($this->data['email']); ?>
			<p class="help-block"><?php echo $this->t('s1_para2'); ?></p>
  		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default"><?php echo $this->t('submit_mail'); ?></button>
		</div>
	</form>
</div> 

$this->includeAtTemplateBase('includes/footer.php'); ?>
