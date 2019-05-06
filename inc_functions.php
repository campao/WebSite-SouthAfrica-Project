<?php
/* PHP Project 
Author: Camille Paoletti 20180088
Date: 12/04/2019
*/
include 'DBQuery.php';

/************************  

function of login and use $_SESSION

************************/
function login(){
    global $pdo, $message, $email, $user;
    $message = '';

    if(!empty($_POST))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(hash('sha256', SALT.$_POST['password']));

        modele_login($email); //call of SQL request

        if(!$user)
        {
            $message = 'Email not found';
        }
        else
        {
            if($user->password === $password)
            {
                
                $_SESSION['user'] = [
                    'id' => $user->id,
                    'status' => $user->status
                ];

                var_dump($_SESSION['user']);

                $message = 'You are connected';
            }
            else
            {
                $message = 'Wrong password';
            }
        }
    }

}

/************************ 
    function to signIn

*************************/
    function signIn(){
global $pdo, $message, $result;

$message = '';

if(!empty($_POST))
{
  $email =htmlspecialchars($_POST['email']); //OKAI
  $password = htmlspecialchars(hash('sha256', SALT.$_POST['password'])); //OKAI
  $FName = htmlspecialchars($_POST['FName']);
  $LName = htmlspecialchars($_POST['LName']);
  $image = htmlspecialchars($_POST['image']);
  $status = htmlspecialchars($_POST['status']);


  
  modele_signIn($email, $password, $FName, $LName, $image, $status); //call of SQL request


  if($result){
    $message = '<p> User registered</p>';
  }
  else 
    $message = '<p> User not registered </p>';

  
}

}

/************************ 
    function to Load Profils for admin

*************************/

function LoadProfil(){
    global $users;
    modele_List();


 
}

/**********************

function to load informations about one user

***********************/

function loadInfos($id){
    global $users; 

    modele_loadInfos($id);

}

/**********************

function to update status of user

***********************/
function updateProfile($id){
  if(!empty($_POST)){
    $status = $_POST['status'];
    modele_update_status($id,$status);
    echo "<p> Update profile ! </p>";
  }
 
}
/**********************

function to show Patient of a user

***********************/

function showPatient($id){
  global $user; 

  modele_showPatient($id);
}