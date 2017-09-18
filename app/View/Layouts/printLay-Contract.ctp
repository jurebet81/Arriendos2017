<!DOCTYPE html>
<html lang='es'>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Imprimir</title>
	<?php
		echo $this->Html->meta('icon', 'img/main-icon.png', array('type' => 'icon'));
		echo $this->Html->css(array('print-style-contract'));
        echo $this->Html->script('jquery.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>   
        
</head>
<body>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        
</body>
</html>
