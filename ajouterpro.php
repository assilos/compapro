 <?php
 require '../entities/produit.php';
	require '../core/produitC.php';
	$pro = new produit;
	$proC = new produitC;
	if (isset($_POST['type']))
	{
		$type = $_POST['type'];
		$pro->set_type($type);
	}
	if (isset($_POST['nom']))
	{
		$nom = $_POST['nom'];
		$pro->set_nom($nom);
	}
	if (isset($_POST['prixG']))
	{
		$prixG = $_POST['prixG'];
		$pro->set_prixG($prixG);
	}
	if (isset($_POST['prixC']))
	{
		$prixC = $_POST['prixC'];
		$pro->set_prixC($prixC);
	}
	if (isset($_POST['prixMG']))
	{
		$prixMG = $_POST['prixMG'];
		$pro->set_prixMG($prixMG);
	}
		$name = $_FILES['image']['name'];
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	if (isset($_POST['ajouterpro'])) 
	{
		echo 'ok';
		echo '<br>';
		if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
		{
			echo 'uploaded';
			echo '<br>';
			var_dump($name);
			$pro->set_image($name);
		}
		else
		{
			echo 'non';
		} 
		echo '<br>';
		var_dump($pro);
		var_dump($proC->ajouterproduit($pro));
	}
	?>
