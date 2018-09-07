<?php

function  msg_error($msgHeader,$msgContent){
    echo "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
   <h4>  <i class='icon fa fa-remove'></i> $msgHeader</h4>
    <p>$msgContent</p>
    </div>";
}
function  msg_success($msgHeader,$msgContent){
    echo "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
     <h4><i class='icon fa fa-check'></i>$msgHeader</h4>
    <p>$msgContent</p>
    </div>";
}
function delete_item($serial){
    include 'config/real-config.php';
if($mysqli->query("DELETE FROM item WHERE serial_no = '".$serial."'")){
msg_success('Operation Successful','Item Deleted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 
}
function new_institution($institute_name,$instNo,$usraccNo,$username, $password_hash, $email, $phone_no,$key,$timestamp){
    //inserting | Institute Details 
    include 'real-config.php';
          if($mysqli->query("INSERT INTO institute (institute_name,pro_key,institute_no)VALUES ('".$institute_name."','".$key."','".$instNo."')")){
            return true;
            if ($inst = $mysqli->prepare("SELECT id, institute_name FROM institute WHERE institute_no = ? LIMIT 1")) {
                $inst->bind_param('i',$instNo);  // Bind "$username" to parameter.   // Execute the prepared query.
                if(!$inst->execute()){
                    //return false;
                    echo "no1".$mysqli->error;
                }
                $inst->store_result();
            //inserting | Super User Details
                $inst->bind_result($id, $institute_name);
                $inst->fetch();
                    if ($inst->num_rows == 1) {
                       // $query = ;
                       // $query->bind_param("ssssi", $username,$password,$email,$phone1,$id);
                        if($mysqli->query("INSERT INTO users (username,dwp,email,phone1,institute_instituteID,entryDate,accNo)VALUES ('$username','$password_hash','$email','$phone_no','$id','$timestamp','$usraccNo')")){
                            return true;
                        }else{
                            return false;
                        }
                       //echo "User Insert 630yes";
                    }else{
                     return false;
                    }
                   // echo "Select ID yes";
                }else{
                    return false;
                }
               // echo "Insert  yes";

    }else{
        //return false;
        echo "no6".$mysqli->error;
    }       
}

function viewUsers(){
    if ($inst = $mysqli->prepare("SELECT id, institute_name FROM institute WHERE institute_no = ? LIMIT 1")) {
        $inst->bind_param('i',$instNo);  // Bind "$username" to parameter.   // Execute the prepared query.
        if(!$inst->execute()){
            return false;
        }
}
}
function check_serial($key){
	include 'real-config.php';
    $query = "SELECT * FROM ethusiast WHERE s_key = '".$key."' AND s_status = 'A'";
    $query_run = mysqli_query($mysqli,$query);
	if(!$query_run){
		echo    "Query Run Error".mysqli_error($mysqli);
		}else{
			$num_of_rows = mysqli_num_rows($query_run);
			if($num_of_rows == 1){
                $date = date('d/m/y');
                $mysqli->query("UPDATE `ethusiast` SET `s_status` = 'T', `i_date` = '$date' WHERE `ethusiast`.`s_key` = '".$key."'");
				  return true;
			}else{
				  return false;
			}
    }
}
function check_inst($inst_name){
	include 'real-config.php';
    $query = "SELECT * FROM institute WHERE institute_name = '".$inst_name."'";
    $query_run = mysqli_query($mysqli,$query);
	if(!$query_run){
		echo    "Query Run Error".mysqli_error($mysqli);
		}else{
			$num_of_rows = mysqli_num_rows($query_run);
			if($num_of_rows == 1){
				  return true;
			}else{
				  return false;
			}
    }
}
function add_user(){
            $fname = $_POST['fname'];
            $sname = $_POST['sname'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $phone1 = $_POST['phone1'];
            $phone2 = $_POST['phone2'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            $role = $_POST['role'];
            $accStatus = $_POST['accStatus'];
            $entryDate = date('Y/m/d H:i:s');
            $accNo = rand(500,700);
            $accNumber = "USR".$accNo;
            include 'config/real-config.php';
            $inst_id = getfield('institute_instituteID',$mysqli);
        // echo "lllllllllllllllll".$inst_id;
        if(check_username($username)==true){
        if($mysqli->query("INSERT INTO `users` (`accNo`, `username`,`gender`, `sname`, `fname`, `designation`, `dob`,`dwp`, `group`, `accStatus`, `entryDate`,`phone1`, `phone2`, `email`, `institute_instituteID`) VALUES (
        '".$accNumber."',
        '".$username."',
        '".$gender."',
        '".$sname."',
        '".$fname."',
        '".$designation."',
        '".$dob."',
        '".$password_hash."',
        '".$role."',
        '".$accStatus."',
        '".$date."',
        '".$phone1."',
        '".$phone2."',
        '".$email."',
        '".$inst_id."');")){
        msg_success('Operation Successful','User Added');
        }else{
        msg_error('Operation Failed','An Error Occured');
        echo $mysqli->error;
        }
    }else{
        msg_error('Operation Failed','Username Taken. Please Try Again');
    } 
     
}
function insertItem(){
    $location = $_POST['location'];
    $name = $_POST['user'];
    $cat = $_POST['cat'];
    $supplier_id = $_POST['supplier_id'];
    $Manufacturer = $_POST['Manufacturer'];
    $Model = $_POST['Model'];
    $Tag = $_POST['Tag'];
    $SerialNo = $_POST['SerialNo'];
    $partNumber = $_POST['partNumber'];
    $status = $_POST['status'];
    $IPAddress = $_POST['IPAddress'];
    $MACAddress = $_POST['MACAddress'];
    $RAMCapacity = $_POST['RAMCapacity'];
    $HardDiskCapacity = $_POST['HardDiskCapacity'];

    $Processor = $_POST['Processor'];
    $Supplier = $_POST['Supplier'];
    $os = $_POST['os'];
    $remarks = $_POST['remarks'];
   

    $entryDate = date('Y/m/d H:i:s');
    include 'config/real-config.php';
    $addedBy = getfield('fname',$mysqli);
// echo "lllllllllllllllll".$inst_id;

$query= "SELECT * FROM item  WHERE serial_no = '" . $SerialNo . "'";
include "real-config.php";
$query_run= mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($query_run);
$num = mysqli_num_rows($query_run);
if($num == 0){
if($mysqli->query("INSERT INTO `item` (`item_name`, `manufacturer`, `model`, `tag`, `serial_no`, `part_number`, `mac_address`, `ram`, `hd`, `processor`, `os`, `ipaddress`, `supplier`, `status`, `addedBy`, `remarks`, `computer_user_id`,`supplier_id`,`location`,`entry_date`)  VALUES (
'".$cat."',
'".$Manufacturer."',
'".$Model."',
'".$Tag."',
'".$SerialNo."',
'".$partNumber."',
'".$MACAddress."',
'".$RAMCapacity."',
'".$HardDiskCapacity."',
'".$Processor."',
'".$os."',
'".$IPAddress."',
'".$Supplier."',
'".$status."',
'".$addedBy."',
'".$remarks."',
'".$name."',
'".$supplier_id."',
'".$location."',
'".$entryDate."');")){
msg_success('Operation Successful','Item Inserted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 
}else{
msg_error('Operation Failed','An Item With This Serial No. Already Exists. Assigned to --'."".$row['usersname']);
echo $mysqli->error;
}
}
function return_no($item_name,$status){
    include 'real-config.php';
    $query = "SELECT * FROM item WHERE item_name = '".$item_name."' AND status = '".$status."'";
    $query_run = mysqli_query($mysqli,$query);
	if(!$query_run){
		echo    "Query Run Error".mysqli_error($mysqli);
		}else{
			$num_of_rows = mysqli_num_rows($query_run);
			echo $num_of_rows;
    }
} 
function check_username($username){
    include 'real-config.php';
    $query = "SELECT * FROM users WHERE username = '".$username."'";
    $query_run = mysqli_query($mysqli,$query);
    $num_of_rows = mysqli_num_rows($query_run);
	if($num_of_rows >= 1){
		return false;
		}else{
        return true;   
    }
} 
function add_computer_user(){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $dep = $_POST['dep'];
    $contact = $_POST['contact'];
    include 'config/real-config.php';
// echo "lllllllllllllllll".$inst_id;
if($mysqli->query("INSERT INTO `computer_user` (`id`, `ext-phone`, `fname`, `sname`, `dep`) VALUES (NULL, '".$contact."', '".$fname."', '".$sname."', '".$dep."');")){
msg_success('Operation Successful','User Inserted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 

}
function add_supplier(){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    include 'config/real-config.php';
// echo "lllllllllllllllll".$inst_id;
if($mysqli->query("INSERT INTO `supplier` (`id`, `name`, `contact`, `email`) VALUES (NULL, '".$name."', '".$phone."', '".$email."')")){
msg_success('Operation Successful','Supplier Inserted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 

}
function add_dep(){
    $dep_name = $_POST['name'];
    include 'config/real-config.php';
// echo "lllllllllllllllll".$inst_id;
if($mysqli->query("INSERT INTO `department` (`id`, `name`) VALUES (NULL, '".$dep_name."')")){
msg_success('Operation Successful','Department Inserted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 

}
function add_cat(){
    $cat_name = $_POST['name'];
    include 'config/real-config.php';
// echo "lllllllllllllllll".$inst_id;
if($mysqli->query("INSERT INTO `categories` (`id`, `cat_name`) VALUES (NULL, '".$cat_name."')")){
msg_success('Operation Successful','Category Inserted');
}else{
msg_error('Operation Failed','An Error Occured');
echo $mysqli->error;
} 
}
function send_email($item_name,$SerialNo,$userFrm,$userTo){
    require '../PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'itinventory001';          // SMTP username
$mail->Password = 'scosoft2015';             // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('email.address@gmail.com', 'Africell IT Inventory');
$mail->addAddress('john.muwuluzi@africell.ug');   // Add a recipient

//$mail->addCC('johnkalungi1@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML

$mail->Subject = 'Item Re-assigned';
$mail->Body    = $item_name. '(Serial No:<b>'.$SerialNo.'</b>,User: <b>'.$userFrm.'</b>) has been re-assigned to <b>'.$userTo;
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}







