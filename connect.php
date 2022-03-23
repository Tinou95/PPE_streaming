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



