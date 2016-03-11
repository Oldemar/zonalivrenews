<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'ZonaLivre.News');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>bootstrap/css/bootstrap.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo $this->webroot; ?>bootstrap/js/bootstrap.js"></script>	
	<!-- Basic owl stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>owl/owl.carousel.css">
	 
	 <!-- Default owl Theme -->
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>owl/owl.theme.css">
	 
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('brapaper');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background: #F6F6F6">
	<div id="container">
		<div id="header">
			<?php
				echo $this->element('top-header-public');
				echo $this->element('middle-header-general');
			?>
		</div>
		<div id="content">
			<?php
				echo $this->fetch('content'); 
			?>
		</div>
		<div id="footer">
		<?php echo $this->element('Templates/footer'); ?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<script type="text/javascript">
		$.ajax ({
			url: 'http://developers.agenciaideias.com.br/cotacoes/json'
		}).done(function(data){
			$('.cotacaoUSD').html(' = R$ '+ data.dolar['cotacao']);
			$('.cotacaoEUR').html(' = R$ '+ data.euro['cotacao']);
		});
	</script>
	<!-- Include owl js plugin -->
	<script src="<?php echo $this->webroot; ?>owl/owl.carousel.js"></script>
	<!-- Include accounting js plugin -->
	<script src="<?php echo $this->webroot; ?>js/accounting.js"></script>

</body>
</html>
