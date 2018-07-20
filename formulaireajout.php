 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="ajouterpro.php" method="post" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<td> Type:</td>
 			<td>  <select name="type">
 				<option value="Clothing"> Clothing</option>
 				<option value="food"> Food and Beverage </option>
 				<option value="Home Appliance"> Home Appliance </option>
 			</select></td>

 		</tr>
 		<tr>
 		<td> Nom:</td>
 		<td> <input type="text" name="nom" id="nom" placeholder="Donner le nom du produit" required></td>
 	    </tr>
 	    <tr>
 	    	<td>Prix Carrefour:</td>
 	    	<td><input type="number" name="prixC" id="prixC" placeholder="Donner le prix " required></td>
 	    </tr>
 	    <tr>
 	    	<td>Prix MG:</td>
 	    	<td><input type="number" name="prixMG" id="prixMG" placeholder="donner le prix" required></td>
 	    </tr>
 	    <tr>
 	    	<td>Prix Geant:</td>
 	    	<td><input type="number" name="prixG" id="prixG" placeholder="donner le prix" required></td>
 	    </tr>
 	    <tr>
 	    	<td>Image:</td>
 	    	<td><input type="file" name="image" id="image" required></td>
 	    </tr>
 	    <tr>
 	    	<td><input type="submit" name="ajouterpro" name=""></td>
 	    </tr>
 	</table>


 </form>

 </body>
 </html>