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

	<title>Clínica Los Cedros de Tapiales S.A.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="<?= base_url(); ?>css/style.css" media="screen, projection" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/query.js"></script>

	<script type="text/javascript">
		$(document).ready(menu);
			
			var contador = 1;

		function menu(){
			$('.toggle').click(function(){
				if(contador == 1){
					$('#element').animate({
						right: '0em'
					});
					contador = 0;
				}else{
					contador = 1;
					$('#element').animate({
						right: '-100%'
					});
				}
			})
		}
	</script>

</head>
