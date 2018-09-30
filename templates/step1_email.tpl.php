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

<p></p>
<h2><?php echo $this->t('new_head_other'); ?></h2>
<ul>
	<li><a href="index.php"><?php echo $this->t('return'); ?></a></li>
<?php if (isset($this->data['logouturl'])) {?>
	<li><a href="<?php echo $this->data['logouturl'];?>"><?php echo $this->t('{status:logout}'); ?></li>
<?php } 
echo '</ul>';

$this->includeAtTemplateBase('includes/footer.php'); ?>
