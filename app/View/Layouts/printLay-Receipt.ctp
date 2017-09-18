<!DOCTYPE html>
<html lang='es'>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Imprimir</title>
	<?php
		echo $this->Html->meta('icon', 'img/main-icon.png', array('type' => 'icon'));		
		echo $this->Html->css(array('print-style-receipt'));
        echo $this->Html->script(array('jquery.min','amountinwords.js'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>        
        <script language="javascript" type="text/javascript">	
                    
            $(document).ready(function(){    
                $('#printRec').click(function(){                    
                    $('#printRec').hide();
                    $('#goBack').hide();                     
                    window.print();
                    $('#printRec').show();
                    $('#goBack').show();                   
                });
                
                $('#goBack').click(function(){
                    window.history.back();
                });               
                                
            });
        </script>
        
</head>
<body>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        
</body>
</html>
