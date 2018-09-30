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
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
			<?php if (isset($this->data['email'])) echo htmlspecialchars($this->data['email']); ?>
			<p class="help-block"><?php echo $this->t('lpw_para2'); ?></p>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default"><?php echo $this->t('submit_mail'); ?></button>
			</div>
		</div>
	</form>
</div>  	  

<p>
<ul>
	<li><a href="index.php"><?php echo $this->t('return'); ?></a></li>
</ul>
</p>

<?php $this->includeAtTemplateBase('includes/footer.php'); ?>
