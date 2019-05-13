<?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
include 'config.php';
/************************* 
SQL request to take all infos with help of email adress

*************************/
function modele_login($email){

    global $pdo, $message, $email, $user;
    $prepare = $pdo->prepare('
            SELECT
                *
            FROM
                users
            WHERE
                email = :email
            LIMIT
                1
        ');
        $prepare->bindValue('email', $email);
        $prepare->execute();
        $user = $prepare->fetch();

}
/************************ 
SQL request to insert into tbl_users an account

*************************/
function modele_registration($email, $password, $FName, $LName, $image, $status){
    global $pdo, $result, $message;
    $prepare = $pdo->prepare('
  INSERT INTO 
    users (email, password, FName, LName,image, status)
  VALUES
    (:email, :password, :FName, :LName, :image, :status)
  ');

  $prepare->bindValue(':email', $email);
  $prepare->bindValue(':password', $password);
  $prepare->bindValue(':FName', $FName);
  $prepare->bindValue(':LName', $LName);
  $prepare->bindValue(':image', $image);
  $prepare->bindValue(':status', $status);
  $result = $prepare->execute();
}


/************************ 
SQL request to Load Profil infos

*************************/

function modele_Profil($email){
  global $pdo, $message;

   $req = "SELECT * FROM users WHERE email = :email "; 
   $prepare = $pdo->prepare($req);
   $prepare->bindValue('email', $email);
   $prepare->execute();
   $user = $prepare->fetch();

}

function modele_List(){
  global $pdo, $message, $users;

   $req = "SELECT * FROM users"; 
   $prepare = $pdo->prepare($req);
   $prepare->execute();
   $users = $prepare->fetchall(PDO::FETCH_ASSOC);
 //  var_dump($users);
   return $users;
}


/************************ 
SQL request to verify if account is admin

*************************/
function modele_AdminProfil($email){
  global $pdo, $result, $message, $user;

   $req = "SELECT * FROM users WHERE status = 'admin' AND  email = :email "; 
   $prepare = $pdo->prepare($req);
   $prepare->bindValue('email', $email);
   $prepare->execute();
   $user = $prepare->fetchall();

}

/************************ 
SQL request to load infos about user 

*************************/

function modele_loadInfos($id){
  global $pdo, $users;

   $req = "SELECT * FROM users WHERE id = :id "; 
   $prepare = $pdo->prepare($req);
   $prepare->bindValue('id', $id);
   $prepare->execute();
   $users = $prepare->fetchall(PDO::FETCH_ASSOC);

}
/************************ 
SQL request to update status of user 

*************************/

  function modele_update_profile($id,$FName,$LName,$status) {
    global $pdo, $user;

    $req = 'UPDATE users SET FName=:FName, LName=:LName, status=:status WHERE id = :id ';
    $prepare = $pdo->prepare($req);
    $prepare->bindValue('FName', $FName);
    $prepare->bindValue('LName', $LName);
    $prepare->bindValue('status', $status);
    $prepare->bindValue('id', $id);
    $prepare->execute();
    $user = $prepare->fetch();
  }

/************************ 
SQL request to show Patient of a user with the id 

*************************/

function modele_showPatient($id){

  global $pdo, $user;

  /* $req = 'SELECT p.FName, p.LName, p.RoomNo, p.NextOfKinID, p.Adress, p.Grade_Classification, p.PatientImage FROM patient p JOIN users u ON u.id=p.NextOfKinID WHERE u.id = :id '; */
    $req = 'SELECT p.`id`, p.`FName`, p.`LName`, p.`RoomNo`, p.`NextOfKinID`, p.`Adress`, p.`Grade_Classification`, p.`PatientImage` FROM `patient` p JOIN `users` u ON u.`id`=p.`NextOfKinID` WHERE u.`id` = :id ';

    $prepare = $pdo->prepare($req);
    $prepare->bindValue('id', $id);
    $prepare->execute();
    $user = $prepare->fetchall(PDO::FETCH_ASSOC);

}
/************************ 
SQL request to insert into table patient

*************************/
function modele_signInPatient($id, $FName, $LName, $roomNo, $password, $address, $grade, $image){
    global $pdo, $result, $message;
    $prepare = $pdo->prepare("
  INSERT INTO 
    patient (FName, LName, RoomNo, Password, NextOfKinID, Adress, Grade_Classification, PatientImage)
  VALUES
    (:FName, :LName, :RoomNo, :Password,:id, :Address, :Grade_Classification, :PatientImage)
  ");

  $prepare->bindValue(':FName', $FName);
  $prepare->bindValue(':LName', $LName);
  $prepare->bindValue(':RoomNo', $roomNo);
  $prepare->bindValue(':Password', $password);
  $prepare->bindValue(':id', $id);
  $prepare->bindValue(':Address', $address);
  $prepare->bindValue(':Grade_Classification', $grade);
  $prepare->bindValue(':PatientImage', $image);
  $result = $prepare->execute();

}
/************************ 
SQL request to delete patient into table patient

*************************/
function modele_deletePatient($id){
  global $pdo, $users;

   $req = "DELETE FROM patient WHERE id = :id "; 
   $prepare = $pdo->prepare($req);
   $prepare->bindValue('id', $id);
   $prepare->execute();
   
}
