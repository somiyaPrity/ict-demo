<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "flatmsdb";

$conn = mysqli_connection($server,$username,$password,$dbname );

if(isset($_POST['submit'])){
 if(!empty($_POST['petitionerName']) && !empty($_POST['petitionerFatherName']) && !empty($_POST['petitionerMotherName']) && !empty($_POST['address']) && !empty($_POST['nid']) && !empty($_POST['companyName']) && !empty($_POST['companyAddress']) && !empty($_POST['tradeNo']) && !empty($_POST['tin']) && !empty($_POST['bankName']) && !empty($_POST['incomeSource']) && !empty($_POST['service'])){
    
  $petitionerName = $_POST['petitionerName'];
  $petitionerFatherName = $_POST['petitionerFatherName'];
  $petitionerMotherName = $_POST['petitionerMotherName'];
  $address = $_POST['address'];
  $nid = $_POST['nid'];
  $companyName = $_POST['companyName'];
  $companyAddress = $_POST['companyAddress'];
  $tradeNo = $_POST['tradeNo'];
  $tin = $_POST['tin'];
  $bankName = $_POST['bankName'];
  $incomeSource = $_POST['incomeSource'];
  $service = $_POST['service']);

  $query = "insert into company_profile(petitionerName,petitionerFatherName,petitionerMatherName, address, nid, companyName,companyAddress,tradeNo,tin,bankName,incomeSource,service,petitionerId ) values("$petitionerName"," $petitionerFatherName"," $petitionerMotherName","$address","$nid"," $companyName ","$companyAddress"," $tradeNo"," $tin","$bankName","$incomeSource"," $service",0)"

  $run = mysqli_query($conn,$query) or dir(mysqli_error());

  if($run){
   echo "form submitted successfully";
  }else{
   echo "form not submitted";
  }

 }
 else{
  echo "all fields required"
 }
}
?>