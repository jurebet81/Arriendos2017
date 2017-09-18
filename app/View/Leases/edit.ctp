<div class="edit">

    <fieldset>
        <legend>Modificar Contrato</legend>        
        <?php echo $this->Form->create('Lease', array ('action' => 'edit'));?>               
        
        <label>NOMBRE DEL INQUILINO:</label>
            <?php echo $this->Form->input('holder_name',  array ('label' => ''));?><br>
            
        <table>
        	<tr>    	
        	<td><label>N&Uacute;MERO DE C&Eacute;DULA: </label>
            	<?php echo $this->Form->input('holder_identification',  array ('label' => ''));?>
            </td>
            <td><label>TEL&Eacute;FONO</label>
            	<?php echo $this->Form->input('holder_phone',  array ('label' => ''));?>
            </td>
       	</tr>
       	<tr id = "separator"> <td> <label></label></td> <td> <label> </label> </td> </tr>
       	
       	<tr>
        	<td><label>UBICACI&Oacute;N:</label>
            	<?php echo $this->Form->input('Location.name',  array ('label' => '', 'readonly' => 'readonly'));?></td>
        	<td><label>APARTAMENTO A TOMAR:</label>
            	<?php echo $this->Form->input('Apartment.name',  array ('label' => '','readonly' => 'readonly'));?></td> 
        </tr>
        <tr> <td> <label> </label></td> <td> <label> </label> </td> </tr> 
         <tr>	
        	<td><label>VALOR DE ARRIENDO:</label>
            	<?php echo $this->Form->input('amount',  array ('label' => ''));?></td>  
        	<td><label>ARRENDADOR:</label>
            	<?php echo $this->Form->input('Renter.name',  array ('label' => ''));?></td>
        </tr> 
        <tr> <td> <label> </label></td> <td> <label> </label> </td> </tr>    	
        <tr>     
        	<td><label>FECHA INICIO DE CONTRATO:</label>
            	<?php echo $this->Form->input('init_date', array('class'=>'datepicker1', 'type'=>'text','label'=>'', 'readonly' => 'readonly' )); ?></td> 
        	<td><label>FECHA FIN DE CONTRATO:</label>
            	<?php echo $this->Form->input('end_date', array('class'=>'datepicker', 'type'=>'text','label'=>'', 'readonly' => 'readonly' )); ?> </td>
        </tr>
        <tr> <td> <label> </label></td> <td> <label> </label> </td> </tr>               
      	</table>
      	
      	<label>INFORMACI&Oacute;N ADICIONAL:</label>       
            	<?php echo $this->Form->input('observations', array ('label' => ' ')); ?> 
        <?php echo $this->Form->input('id', array('type' => 'hidden'));   ?>
    </fieldset>
    
        <?php echo $this->Form->button(' Volver ', array ('alt' =>'CakePHP', 'url' =>
             array('controller' => 'provider', 'action' => 'view')));  ?>  
        <?php echo $this->Form->end(" Actualizar "); ?>
    
</div>

<script language="javascript" type="text/javascript">
		
             $(document).ready(function() {
             	          	
                $( "input.datepicker" ).datepicker({
                    dateFormat: 'yy-mm-dd',
                    yearRange: "-100:+50",
                    changeMonth: true,
                    changeYear: true,
                    constrainInput: false,
                    showOn: 'both',
                    buttonImage: "/img/calendar.png",
                    buttonImageOnly: true                                        
                });
             });
                
           
</script>