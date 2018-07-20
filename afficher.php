<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<?php		require '../entities/produit.php';
    require '../core/produitC.php';
	$pro = new produitC;
	$tab = $pro->afficherproduit($pro);
	
	foreach ($tab as $row ) {
?>
             	<tr>
		<td><img src=<?php echo 'upload/'.$row['Image'].''; ?> height="200" width="200"></td>
		
    	<td><?php echo $row['Type']; ?></td>
			
    	<td><?php echo $row['Nom'] ;?></td>
				
        <td><?php echo $row['Prix_MG']; ?></td>
			
    	<td><?php echo $row['Prix_C']; ?></td>
			
    	<td><?php echo $row['Prix_G'];?></td>
			
</tr>
<?php }?>
	</table>




</body>
</html>