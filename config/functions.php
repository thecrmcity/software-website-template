<?php

require_once 'database.php';

function input_data($data)
{
	$data = trim($data);
	$data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['contactform']))
{
	$fullname = input_data($_POST['fullname']);
	$useremail = input_data($_POST['useremail']);
	$userphone = input_data($_POST['userphone']);
	$message = input_data($_POST['message']);

	$sql = "INSERT INTO `khap_contact`(`kp_fullname`, `kp_email`, `kp_mobile`, `kp_message`, `kp_sentdate`, `kp_status`) VALUES ('$fullname', '$useremail', '$userphone', '$message', now(), '1')";
	$res = mysqli_query($conn,$sql);
	if($res == true)
	{
		header('Location:../thank-you.php');
	}
}

if(isset($_POST['subscribes']))
{
	$subemail = input_data($_POST['subemail']);
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	$sql = "INSERT INTO `khap_subscribe`( `kp_subemail`, `kp_entrydate`, `kp_ipaddress`, `kp_status`) VALUES ('$subemail', now(),'$ipaddress', '1')";
	$res = mysqli_query($conn,$sql);
	if($res == true)
	{
		header('Location:../index.php');
	}
}

if(isset($_POST['giveproject']))
{
	$proname = input_data($_POST['proname']);
	$fullname = input_data($_POST['fullname']);
	$fullemail = input_data($_POST['fullemail']);
	$mobile = input_data($_POST['mobile']);
	$company = input_data($_POST['company']);
	$protype = input_data($_POST['protype']);
	$doctype = input_data($_POST['doctype']);
	$prodetails = str_replace("'", "\'", $_POST['prodetails']);
	$prodetails = input_data($prodetails);
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	$sql = "INSERT INTO `khap_project`(`kp_proname`, `kp_fullname`, `kp_email`, `kp_mobile`, `kp_company`, `kp_projectype`, `kp_documentype`, `kp_porjectdetails`, `kp_createdate`, `kp_ipaddress`, `kp_status`) VALUES ('$proname', '$fullname', '$fullemail', '$mobile', '$company', '$protype', '$doctype', '$prodetails', now(), '$ipaddress', '1')";
	$res = mysqli_query($conn,$sql);
	if($res == true)
	{
		header('Location:../thank-you.php');
	}
}
?>