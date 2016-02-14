<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $bday = $_POST['bday'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
    if(empty($firstname) || empty($lastname) || empty($age) || empty($sex) || empty($bday) || empty($email) || empty($comment)) {

		echo "Заповніть обовязкові поля";
	} 
	else{
		foreach ($_POST as $key => $value) {
			if ($value === 0 || $value === "") {}
			else {
		        echo "<tr>";
		        echo "<td>";
		        echo $key;
		        echo "</td>";
		        echo "<td>";
		        echo " - ";
		        echo $value;
		        echo "</td>";
		        echo "</tr>";
		        echo "<br>";
		    }
    }
	}
    }
?>

