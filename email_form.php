<?php

	$Location = isset($_GET['Location']) ? $_GET['Location'] : '';
	
	$svnumber = isset($_GET['svnumber']) ? $_GET['svnumber'] : '';
 
    $LeftOfficetxt = isset($_GET['LeftOfficetxt']) ? $_GET['LeftOfficetxt'] : '';
 
    $ArriveSitetxt = isset($_GET['ArriveSitetxt']) ? $_GET['ArriveSitetxt'] : '';
 
    $LeftSitetxt = isset($_GET['LeftSitetxt']) ? $_GET['LeftSitetxt'] : '';
 
    $ArriveOfficetxt = isset($_GET['ArriveOfficetxt']) ? $_GET['ArriveOfficetxt'] : '';
	
	$diag = isset($_GET['diag']) ? $_GET['diag'] : '';
	$diag3 = str_replace(" ", "%20", $diag);
	
	$lottopartsin = isset($_GET['lottopartsin']) ? $_GET['lottopartsin'] : '';
	
	$PartNumberin = isset($_GET['PartNumberin']) ? $_GET['PartNumberin'] : '';
	
	$SerialNunberin = isset($_GET['SerialNunberin']) ? $_GET['SerialNunberin'] : '';
	
	$AssetNumberin = isset($_GET['AssetNumberin']) ? $_GET['AssetNumberin'] : '';
	
	$PartNumberout = isset($_GET['PartNumberout']) ? $_GET['PartNumberout'] : '';
	
	$SerialNunberout = isset($_GET['SerialNunberout']) ? $_GET['SerialNunberout'] : '';
	
	$AssetNumberout = isset($_GET['AssetNumberout']) ? $_GET['AssetNumberout'] : '';
	

	if($AssetNumberin != '' or $AssetNumberout != ''){
	$email_subject = "Job%20Update,%20".$svnumber."%20".$Location;

    $email_message = "Hey%20Team,%20%0D%0A%20%0D%0A";
 
    $email_message .= $svnumber ."%20%0D%0A";
 
    $email_message .= $Location ."%20%0D%0A%20%0D%0A";
 
    $email_message .= "Left%20Office:%20".$LeftOfficetxt."%20%0D%0A";
 
    $email_message .= "Arrived%20Site:%20".$ArriveSitetxt."%20%0D%0A";
	
	$email_message .= "Left%20Site:%20".$LeftSitetxt."%20%0D%0A";
	
	$email_message .= "Arrived%20Office:%20".$ArriveOfficetxt."%20%0D%0A%20%0D%0A";
	
	
	$email_message .= "Parts%20In%20%0D%0A";
	$email_message .= "Part%20Number:%20" . $PartNumberin . "%20%0D%0A";
	$email_message .= "Serial%20Number:%20".$SerialNunberin."%20%0D%0A";
	$email_message .= "Asset%20Number:%20" . $AssetNumberin . "%20%0D%0A%20%0D%0A";
	
	$email_message .= "Parts%20Out%20%0D%0A";
	$email_message .= "Part%20Number:%20".$PartNumberout."%20%0D%0A";
	$email_message .= "Serial%20Number:%20".$SerialNunberout."%20%0D%0A";
	$email_message .= "Asset%20Number:%20".$AssetNumberout."%20%0D%0A%20%0D%0A";
	
	$email_message .= $diag3 . "%20%0D%0A%20%0D%0A";
	
	$header = "From: OneField";
	
	echo "<body onload=document.getElementById('send').click();onload=window.history.back()></body>";
	echo "<a id='send' href=mailto:dengupdates@datacom.co.nz;AucklandCoordinators@datacom.co.nz?Subject=$email_subject&body=$email_message>Send</a>";
	}
	else{
	$email_subject = "Job%20Update,%20".$svnumber."%20".$Location;

    $email_message = "Hey%20Team,%20%0D%0A%20%0D%0A";
 
    $email_message .= $svnumber ."%20%0D%0A";
 
    $email_message .= $Location ."%20%0D%0A%20%0D%0A";
 
    $email_message .= "Left%20Office:%20".$LeftOfficetxt."%20%0D%0A";
 
    $email_message .= "Arrived%20Site:%20".$ArriveSitetxt."%20%0D%0A";
	
	$email_message .= "Left%20Site:%20".$LeftSitetxt."%20%0D%0A";
	
	$email_message .= "Arrived%20Office:%20".$ArriveOfficetxt."%20%0D%0A%20%0D%0A";
	
	
	$email_message .= "Parts%20In%20%0D%0A";
	$email_message .= "Part%20Number:%20" . $PartNumberin . "%20%0D%0A";
	$email_message .= "Serial%20Number:%20".$SerialNunberin."%20%0D%0A%20%0D%0A";
	
	$email_message .= "Parts%20Out%20%0D%0A";
	$email_message .= "Part%20Number:%20".$PartNumberout."%20%0D%0A";
	$email_message .= "Serial%20Number:%20".$SerialNunberout."%20%0D%0A%20%0D%0A";
	
	$email_message .= $diag3 . "%20%0D%0A%20%0D%0A";
	
	$header = "From: OneField";
	
	
	echo "<body onload=document.getElementById('send').click();onload=window.history.back()></body>";
	echo "<a id='send' href=mailto:dengupdates@datacom.co.nz;AucklandCoordinators@datacom.co.nz?Subject=$email_subject&body=$email_message>Send</a>";
	}
 ?>
 

 

 
