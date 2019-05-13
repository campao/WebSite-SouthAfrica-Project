<?php /* 

FICHIER DE REQUETES SQL UNIQUEMENT !!!!!!!!!!!!!!!!!!!

*/
include "init/databconn.php"; 
include "../init/databconn.php"; 

 


function addUser($FName, $LName, $Adress1, $Adress2, $Postal, $Code, $Email, $Cellnum, $Password, $UserImage, $Status){

   global $DBConnect;
	  $reqin = "INSERT INTO `tbl_User` ( `ID`,`FName`, `LName`, `adress1`, `adress2`, `Postal`, `Code`, `Email`, `CellNum`, `Password`, `userImage`, `Status`) VALUES(NULL,'".$FName."','".$LName."', '".$Adress1."', '".$Adress2."', '".$Postal."', '".$Code."', '".$Email."', '".$CellNum."', '".$Password."', '".$UserImage."', '".$Status."')";

   //var_dump($reqin);
   //$insertUser = $DBConnect->query($reqin);

   $insertUser= mysqli_query($DBConnect,$reqin);

   var_dump($insertUser);
}


function addPatient($FName, $LName, $Roomno, $Password, $NextOfKinID, $Adress1, $Adress2, $Postal, $GradeClassification, $prescript, $patientImage){

   global $DBConnect;

    $reqin = "INSERT INTO `tbl_Patient` ( `ID`,`FName`, `LName`, `Roomno`, `Password`, `NextOfKinID`, `adress1`, `adress2`, `Postal Code`, `GradeClassification`, `prescript`, `patientImage`) VALUES(NULL,'".$FName."','".$LName."', '".$Roomno."','".$Password."', '".$NextOfKinID."', '".$Adress1."', '".$Adress2."', '".$Postal."', '".$GradeClassification."', '".$prescript."', '".$patientImage."')";

   //var_dump($reqin);
   //$insertUser = $DBConnect->query($reqin);

   $insertUser= mysqli_query($DBConnect,$reqin);

   var_dump($insertUser);
}

function droptablesql(){
   global $DBConnect;
   
   $sqlDropTPatient ="DROP TABLE `tbl_Patient`";
   $sqlDropTUser ="DROP TABLE `tbl_User`";            

   $QResultDTPatient = mysqli_query($DBConnect, $sqlDropTPatient);

   $QResultDTUser = mysqli_query($DBConnect, $sqlDropTUser);

   if ($QResultDTUser == TRUE) {
      echo "TABLE USER DROPPED";
   }

   if ($QResultDTPatient == TRUE) {
      echo "TABLE PATIENT DROPPED";
   }

   echo "DONE DROP";
}

function createsql(){
   global $DBConnect;

   $sqlCreateTUser = "CREATE TABLE `tbl_User`(
  `ID` int(11) AUTO_INCREMENT PRIMARY KEY,
  `FName` varchar(30),
  `LName` varchar(30),
  `adress1` varchar(50),
  `adress2` varchar(50),
  `Postal` varchar(50),
  `Code` int(11),
  `Email` varchar(30),
  `CellNum` varchar(30),
  `Password` varchar(100),
  `userImage` text,
  `Status` varchar(10))";


$sqlCreateTPatient = "CREATE TABLE `tbl_Patient`(
  `ID` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `FName` varchar(50),
  `LName` varchar(50),
  `Roomno` varchar(50),
  `Password` varchar(100),
  `NextOfKinID` int(11),
  `adress1` varchar(50),
  `adress2` varchar(50),
  `Postal Code` int(11),
  `GradeClassification` char(50),
  `prescript` int(11),
  `patientImage` text)";



  $sqlCreateTUserresult = mysqli_query($DBConnect, $sqlCreateTUser);

  if ($sqlCreateTUserresult == TRUE) {
     echo "WELL USER TABLE CREATED";
  }

  $sqlCreateTPatientresult = mysqli_query($DBConnect, $sqlCreateTPatient);

  if ($sqlCreateTPatientresult == TRUE) {
     echo "WELL PATIENT TABLE CREATED";
  }

  //FOREING KEY
  
/*if (mysqli_query($DBConnect,"ALTER TABLE `tbl_Patient` ADD INDEX( `NextOfKinID`);") == TRUE){
      echo "SET INDEX GOOD";
      echo mysqli_query($DBConnect,"ALTER TABLE `tbl_Patient` ADD INDEX( `NextOfKinID`);");
   }*/


 if (mysqli_query($DBConnect,"ALTER TABLE `tbl_Patient` ADD FOREIGN KEY (`NextOfKinID`) REFERENCES `tbl_User`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;") == TRUE){
      echo "CONSTRAINT GOOD";
   }

   echo "DONE CREATE";

}

function loaddatasql(){

   echo "WELCOME IN THIS FUNCTION";

global $DBConnect;

$sqlInsP2 = "LOAD DATA LOCAL INFILE 'excel_files/userData.csv' INTO TABLE tbl_User 
            FIELDS TERMINATED BY ';'
            LINES TERMINATED BY '\n'";

$sqlInsP = "LOAD DATA LOCAL INFILE 'excel_files/patientData2.csv' INTO TABLE tbl_Patient 
            FIELDS TERMINATED BY ';'
            LINES TERMINATED BY '\n'";


$QResultTA2 = mysqli_query($DBConnect, $sqlInsP2);

$QResultTA = mysqli_query($DBConnect, $sqlInsP);

if ($QResultTA2 == TRUE) {
   echo "LOADED USER";
}

if ($QResultTA == TRUE) {
   echo "LOADED PATIENT";
}

echo "YOUYOU";

}


function delete($ID){
   global $DBConnect;
   $del = "DELETE FROM `tbl_User` WHERE `tbl_User`.`ID` = '".$ID."' ";
   $delreq = mysqli_query($DBConnect,$del);
}

function db_login($user, $password){
	global $DBConnect, $quersub;
		$querystr = "SELECT * FROM tbl_User WHERE FName = '".$user."' AND Password= '".$password."'"; //OK

		$quersub = mysqli_query($DBConnect, $querystr); // Ok

		return $quersub;
}

function insertmodif($ID ,$FName, $LName, $Adress1, $Adress2, $Postal, $Code, $Email, $Cellnum, $Password, $UserImage, $Status){
	global $DBConnect;

	echo $FName;
	echo $ID;

	$uptsql = "UPDATE tbl_User SET FName = '".$FName."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql);
   	if ($uptUser == TRUE) {
   		echo "YOUYOU";
   		echo $uptsql;
   	}
   	else echo "NOPE";

   	$uptsql1 = "UPDATE tbl_User SET `LName` = '".$LName."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql1);

   	$uptsql2 = "UPDATE tbl_User SET `adress1` = '".$Adress1."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql2);

   	$uptsql3 = "UPDATE tbl_User SET `adress2` = '".$Adress2."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql3);

   	$uptsql4 = "UPDATE tbl_User SET `Postal` = '".$Postal."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql4);

   	$uptsql5 = "UPDATE tbl_User SET `Code` = '".$Code."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql5);

   	$uptsql6 = "UPDATE tbl_User SET `Email` = '".$Email."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql6);
 
   	$uptsql7 = "UPDATE tbl_User SET `CellNum` = '".$Cellnum."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql7);
     
     if ($Password != ""){
   	$uptsql8 = "UPDATE tbl_User SET `Password` = '".md5($Password)."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql8);}

   	if ($UserImage != ""){
   		$uptsql9 = "UPDATE tbl_User SET `userImage` = '".$UserImage."' WHERE ID = '".$ID."'";
   		$uptUser= mysqli_query($DBConnect, $uptsql9);}


   	$uptsql10 = "UPDATE tbl_User SET `Status` = '".$Status."' WHERE ID = '".$ID."'";
   	$uptUser= mysqli_query($DBConnect, $uptsql10);
}

function userprofill($id){
  global $DBConnect;
  $querystr3 = "SELECT * FROM tbl_User WHERE ID = ".$id."";
  $userresult3 = mysqli_query($DBConnect,$querystr3);
  return $userresult3;
}

function getuserslist(){
	global $DBConnect,$userslist,$userresult;
	$querystr = "SELECT * FROM tbl_User";
	$userresult = mysqli_query($DBConnect,$querystr);
	//$userslist = mysqli_fetch_array($userresult);
	return $userslist;
}

function getallpatientlist(){
   global $DBConnect,$patientfulllist,$patientfullresult;
  $querystr4 = "SELECT * FROM tbl_Patient";
  $patientfullresult = mysqli_query($DBConnect,$querystr4);
  return $patientfulllist;
}

function getpatientlist($id){

  global $DBConnect,$patientslist,$patientresult;
  
  $querystr2 = "SELECT p.`id`, p.`FName`, p.`LName`, p.`Roomno`, p.`NextOfKinID`, p.`adress1`,p.`patientImage` FROM tbl_Patient p JOIN  tbl_User u ON u.`id` = p.`NextOfKinID` WHERE u.`id` = ".$id." ";
  $patientresult = mysqli_query($DBConnect,$querystr2);

}


function getpatient(){
  global $DBConnect;

}

function getstat($id){
  global $DBConnect;

  $queryrequest = "SELECT Status FROM tbl_User WHERE id = ".$id."";
  $queryresult = mysqli_query($DBConnect,$queryrequest);
  return $queryresult;
}

?>