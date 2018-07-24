<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="expires" content="-1"/>
	<meta name="description" content="" />
	<meta name="author" content="Florencia Acosta - Graphic Designer & Front End Developer | Fernando Prado - Back End Developer & Data Base Management" />
	<meta name="keywords" content=""/>

	<title>Sanatorio Privado Madero</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="<?= base_url(); ?>admin/css/bootstrap.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>admin/css/bootstrap-theme.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>admin/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>admin/js/npm.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>admin/js/validationRules.js"></script>

	<link rel="stylesheet" href="<?= base_url(); ?>admin/js/cleditor/jquery.cleditor.css" />
	<script src="<?= base_url(); ?>admin/js/cleditor/jquery.cleditor.js"></script>
	<script src="<?= base_url(); ?>admin/js/cleditor/jquery.cleditor.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#cleditorInput").cleditor({
				controls: // controls to add to the toolbar
					"bold italic underline strikethrough subscript superscript | font size " +
					"style | color highlight removeformat | bullets numbering | outdent " +
					"indent | alignleft center alignright justify | undo redo | ",
				useCSS: false,
				bodyStyle: // style to assign to document body contained within the editor
					"cursor:text"
			});
		});
	</script>
</head>
