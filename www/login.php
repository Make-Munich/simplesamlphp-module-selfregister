<?php

$config = SimpleSAML_Configuration::getInstance();
$session = SimpleSAML_Session::getSessionFromRequest();
$uregconf = SimpleSAML_Configuration::getConfig('module_selfregister.php');
/* Get a reference to our authentication source. */
$asId = $uregconf->getString('auth');

$as = new SimpleSAML_Auth_Simple($asId);

/* Require the usr to be authentcated. */
$as->requireAuth();

/* Retrieve attributes of the user. */
$attributes = $as->getAttributes();

$session = SimpleSAML_Session::getSessionFromRequest();
$data = $session->getData('selfregister:updated', 'attributes');
if ($data !== NULL) {
	$attributes = $data;
}


$links = array();
$links[] = array(
	'href' => 'https://projects.make-munich.de',
	'text' => '{selfregister:selfregister:link_project}',
);
$links[] = array(
	'href' => SimpleSAML_Module::getModuleURL('selfregister/reviewUser.php'),
	'text' => '{selfregister:selfregister:link_review}',
);
$links[] = array(
	'href' => SimpleSAML_Module::getModuleURL('selfregister/changePassword.php'),
	'text' => '{selfregister:selfregister:link_changepw}',
);
/* $links[] = array(
	'href' => SimpleSAML_Module::getModuleURL('selfregister/delUser.php'),
	'text' => '{selfregister:selfregister:link_deluser}',
); */
$links[] = array(
	'href' => $as->getLogoutURL(),
	'text' => '{status:logout}',
);
	

$html = new SimpleSAML_XHTML_Template(
		$config,
		'selfregister:index.tpl.php',
		'selfregister:selfregister');
$html->data['source'] = $asId;
$html->data['links'] = $links;

if(array_key_exists('status', $_GET) && $_GET['status'] == 'deleted') {
	$html->data['userMessage'] = 'message_userdel';
}


$html->show();

?>
