<?php 

/* 

Marc Bellerche 20180083/219402949
FICHIER DE FONCTIONS UNIQUEMENT !!!!!!!!!!!!!!!!!!!

*/
	include ("inc_query.php");

	function login(){
	global $id;

		if(isset($_POST['login']) AND isset($_POST['psw'])){
		$log = $_POST['login'];
		$psw = md5($_POST['psw']);
		$id = $_POST['ID'];

		}

		$userfound = db_login($log,$psw); //call the sql request
		
		$row = mysqli_fetch_assoc($userfound);

		if (mysqli_num_rows($userfound) > 0){

			//CASE 1 : USER = VISITOR

			if ($row['Status'] == "Visitor") {

       				//$ext = ".JPG";
       				//$imageURL = $imageURL.$ext;
       				profill($row);

			}

			//CASE 2 : USER = ADMIN

			elseif ($row['Status'] == "Admin") {
				echo "WELCOME ADMIN";
				header("Location:../views_gestion/modif.php?ID=".$row['ID']."");
			}

			elseif ($row['Status'] == "Matron") {
				
				header("Location:../views_gestion/modif.php?ID=".$row['ID']."");

			}

		}


		else {
				header("Location:login.php");
			}

	}

	function profill($row){

		$imageURL = 'photo/'.$row["userImage"];
		echo "<div class='profil'>";
       	echo "<img src=".$imageURL."></img></br>";
		echo "Name : ".$row["FName"]."</br>";
		echo "Last Name : ".$row["LName"]."</br>";
		echo "Email : ".$row["Email"]."</br>";
		echo "PassWord : ".$row["Password"]."</br>";
		echo "Cell num° : ".$row["CellNum"]."</br>";
		echo "Status : ".$row["Status"]."</br>";
		echo "</div>";
		echo "<a href='login.php'>";
		echo "<input type ='button' class='btn_size btnexit' value='Exit'></input>";
		echo "</a>";

	}


	function printusers(){
	global $userslist,$userresult;
	getuserslist();
	}

	function printallpatients(){
	global $patientfulllist,$patientfullresult;
	getallpatientlist();
	}

	function printpatient($id){
	global $patientslist,$patientresult,$id;
	getpatientlist($id);
	}

	function getinfouser(){
	global $DBConnect,$row;
	if (isset($_POST)) {
		$querystr = "SELECT * FROM tbl_User WHERE ID = '".$_POST['ID']."'";
		$userresult = mysqli_query($DBConnect,$querystr);
		$row = mysqli_fetch_assoc($userresult);
		//return $row;
		}
	}

	function userprofills($id){
	$rows = mysqli_fetch_assoc(userprofill($id));
	return $rows;
	}


function droptable(){
	droptablesql();
}

function createtable(){
	createsql();
}

function loaddata(){
	loaddatasql();
}

function getstatus($id){
	$row = mysqli_fetch_assoc(getstat($id));
	return $row;
}


?>