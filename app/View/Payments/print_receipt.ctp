<div id = 'container'>
	<div id = 'receipt'>
		<table id="tableheader">
			<tr> 
				<td class = 'leftheader'>RECIBO</td>
				<td class = 'centerheader'>No.</td>
				<td class = 'rightheader'><?php echo $payment['Payment']['id']; ?></td>
			</tr>
			<tr> <td> </td><td>&nbsp;</td></tr>	<tr> <td> 
			<tr>		
				<td class = 'leftheader'>FECHA: <?php echo $payment['Payment']['date']; ?></td>
				<td class = 'centerheader'>$</td>
				<td class = 'rightheader'><span id = "amount" ><?php echo number_format($payment['Payment']['amount'], 0, '.', '.');?></span></td>
			</tr>	
		</table>
		
		<table id="tabledata">
			<tr> 
				<td class = "label">RECIB&Iacute; DE:</td>
				<td class = "data"><?php echo $payment['Lease']['holder_name'];?></td>
			</tr>
			<tr> <td> </td><td>&nbsp;</td></tr>			
			<tr> 
				<td class = "label">LA CANTIDAD DE:</td>
				<td id = "datainwords"></td>
			</tr>
			<tr> <td> </td><td>&nbsp;</td></tr>			
			<tr> 
				<td class = "label">EN CONCEPTO DE:</td>
				<td class = "data">Pago de arriendo del contrato 
					No. 00-<?php echo $payment['Lease']['id'];?>  
					desde la fecha <?php echo $payment['Payment']['from_date'];?> 
					hasta la fecha <?php echo $payment['Payment']['to_date'];?>
				</td>
			</tr>
		</table>	
		<table id="tablefooter">
			<tr> 
				<td class = 'leftfooter'>Observaciones.</td>
				<td></td>			
			</tr>	
			<tr> 
				<td class = 'leftfooter'></td>
				<td class = 'rightfooter'>Firma:</td>		
			</tr>
		</table>	
	</div>
<div id ="footerMessage">No se aceptan reclamos sin recibo de pago</div>
</div>
<script language="javascript" type="text/javascript">		
	
	             $(document).ready(function() {             	
	                $("#amount").ready(function(){                    
	                    var amount = $("#amount").text();
	                    var realamount = amount.replace(".","");
	                    var montoenletras = NumeroALetras(realamount);
	                	$("#datainwords").html(montoenletras);
	                });                   
	            });           
</script>
