<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mail = $_POST['mail'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];


/*try{
    $bdd = new PDO('mysql:host=localhost;dbname=PPE_straming;charset=utf8;', 'root', '');
    $stmt = $bdd->prepare("insert into registration(first_name, last_name, mail, ville, pays) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $mail, $ville, $pays);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$bdd->close();

}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
*/

$bdd = new mysqli('localhost','root','','PPE_straming');
	if($bdd->connect_error){
		echo "$bdd->connect_error";
		die("Connection Failed : ". $bdd->connect_error);
	} else {
		$stmt = $bdd->prepare("insert into registration(first_name, last_name, mail, ville, pays) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $mail, $ville, $pays);
		$execval = $stmt->execute();
		echo $execval;
		echo "reçu";
		$stmt->close();
		$bdd->close();
	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" type="image" sizes="32x32" href="asset/disney_plus_icon_156735-removebg-preview.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/connect.css">
	<link rel="stylesheet" href="css/footer.css">

    
    <title>Disney+</title>
</head>
<body>
    <header>
        <img class="image_header" src="./asset/disney_plus_icon_156735-removebg-preview.png" alt="">
        <h1>Film, séries TV et bien plus en illimité</h1>
    </header>
    <main>

		<section>
			<h2>Validation &#9989;</h1>
			<p>Votre formulaire a bien été envoyé</p>
		</section>
	
	</main>

	<footer> 
        <p>&copy;- Disney+  -2022</p>
    </footer>


    <script src="./js/page2.js"></script>
</body>

</html>


