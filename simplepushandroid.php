//$registrationIDs = array( "APA91bHvpkWECPbOqIoocyjeHNZYaKd8Hu8lBVxarUHOKHM20SVdrqez8f0oMPEZOn5NuKN2_QisbfEaKfz-de94d7I0LVwn_Of0BSS5kaQ6gPDBd3F1sz5rSYRrBi37Vl3UVT0rT3lK");



<?php
// Replace with real server API key from Google APIs
try
{


$apiKey="AIzaSyA7yMwyRxhhyRw-wuK4vbki43N1K9CImcc";

// Replace with real client registration IDs

$registrationIDs=array("APA91bEHTLeghZgRDTOCqSKOeHIW80yA-ky3W4xo9OAq46kmIO3_HWkySqHYZr94rrooz_MKWLLQA6M584nM3k3XZ3GyQ2MuwhhB33LNKOOqOtijKG445YZHH2bExkhsaumi5aDaN9TbbG_VSK4qaYmlVElfuN1p_w");

// Message to be sent
$message="hi jayesh joshi ";

// Set POST variables

$url='https://android.googleapis.com/gcm/send';
$fields=array('registration_ids'=>$registrationIDs,'data'=> array("message"=>$message),);
$headers=array('Authorization: key='.$apiKey,'Content-Type: application/json');
// Open connection
$ch=curl_init();
// Set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
// Execute post
$result=curl_exec($ch);
// Close connection
curl_close($ch);
echo $result;
//print_r($result);
//var_dump($result);
}
catch(Exception $e)
{
echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
