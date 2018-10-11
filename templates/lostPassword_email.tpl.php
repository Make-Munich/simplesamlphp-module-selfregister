<?php

$this->data['header'] = $this->t('{selfregister:selfregister:link_lostpw}');
$this->data['head'] = '<link rel="stylesheet" href="resources/selfregister.css" type="text/css">';

$this->includeAtTemplateBase('includes/header.php'); ?>

<?php if(isset($this->data['error'])){ ?>
	  <div class="error"><?php echo $this->data['error']; ?></div>
<?php }?>

<div>
	<form method="post" action="lostPassword.php">
		<div class="form-group">
			<p class="help-block"><?php echo $this->t('lpw_para1'); ?></p>
    		<label for="lostEmail">Email</label>
			<input type="email" class="form-control" id="lostEmail" placeholder="Email" name="emailreg">
			<?php if (isset($this->data['email'])) echo htmlspecialchars($this->data['email']); ?>
			<p class="help-block"><?php echo $this->t('lpw_para2'); ?></p>
  		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default"><?php echo $this->t('submit_mail'); ?></button>
		</div>
	</form>
</div>  	  

<h2><?php echo $this->t('new_head_other'); ?></h2>
<ul class="lead">
<li><a href="index.php"><?php echo $this->t('return'); ?></a></li>
</ul>

<?php $this->includeAtTemplateBase('includes/footer.php'); ?>
