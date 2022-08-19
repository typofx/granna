<?php 

include 'LoginLanguages.php';

include 'config.php';
session_start();

 $brlToSend = $_SESSION['brlToSend'];
 $eurToReceive = $_SESSION['eurToReceive'];
 $pix = $_SESSION['pix'];

if (!isset($_SESSION['email']))
    {    header("Location: index.php");    }

    $email = $_SESSION['email'];

$date = date_create();
 date_add($date,date_interval_create_from_date_string("6 hours"));
 $dateRun = date_format($date,"H:i d/m/y");

 date_add($date,date_interval_create_from_date_string("1 days,23 hours"));
 $dateOver = date_format($date,"H:i d/m/y");

    $sqlRecipient = "SELECT * FROM recipient WHERE ( (email='$email') AND ( pix = '$pix' ) )";
	$resultRecipient = mysqli_query($conn, $sqlRecipient);
		        if ($resultRecipient->num_rows > 0)
		            {
		                //echo "<script>alert('RECIPIENT THERE')</script>";
		                $row = $resultRecipient->fetch_assoc();
		                $namerecipient = $row["namerecipient"];
		                //pix already here
                        $bank = $row["bank"];
                        $branch = $row["branch"];
                        $account = $row["account"];
                        $type = $row["type"];

		            }
		            else {echo "<script>alert('ERROR')</script>";}


if (isset($_POST['submit']))
    {
	$recipientID = $_SESSION['id'];
	$pix = $_SESSION['pix'];
	$brlToSend = $_SESSION['brlToSend'];
	$eurToReceive = $_SESSION['eurToReceive'];

		$sql = "INSERT INTO ticket (email, pix, brlToSend, eurToReceive, dateRun, dateOver)
				VALUES ('$email', '$pix', '$brlToSend', '$eurToReceive', '$dateRun', '$dateOver')";
		$result = mysqli_query($conn, $sql);
            
        

			if ($result) { 

			    //echo "<script>alert('OKAY')</script>";
                    header("location: https://www.granna.ie/login/selectBank.php");
				
			   } else { echo "<script>alert('FAIL')</script>";}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>granna</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"><center><h2>New Ticket</h2></center><br></p>
            
            <div class="input-group"><label for="BRLvalue">Registered email</label>      <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>   </div>
			<div class="input-group"><label for="BRLvalue">Payee's PIX Key</label>             <input type="text" name="pix" value="<?php echo $pix; ?>" disabled>                   </div>
			<div class="input-group"><label for="BRLvalue">EUR to be transfered</label>  <input type="text" name="eurToReceive" value="<?php echo $eurToReceive; ?>" disabled> </div>
			<div class="input-group"><label for="BRLvalue">BRL to be received</label>    <input type="text" name="brlToSend" value="<?php echo $brlToSend; ?>" disabled>       </div> 
			<div class="input-group"><label for="BRLvalue">Order created at</label>      <input type="text" name="dateRun" value="<?php echo $dateRun?>" disabled>             </div>
			<div class="input-group"><label for="BRLvalue">Payment expiry date</label>   <input type="text" name="dateOver" value="<?php echo $dateOver?>" disabled>           </div>
            <div class="input-group">
                <br>
                <p class="login-text" style="font-size: 2rem; font-weight: 800;"><center><h3>Payee's Full Info</h3></center><br></p>
            </div><br>
            <?php printf("Name : <i>". $namerecipient. "</i>".
                     "<br>Bank : <i>".$bank.              "</i>".
                     "<br>Branch : <i>".$branch.          "</i>".
                     "<br>Account : <i>".$account.         "</i>".
                     "<br>Type : <i>".$type); ?>            </i>
                     <br><br><br>
			<div class="input-group"><button name="submit" class="btn">Create Invoice</button></div>
			<p class="login-register-text"><a href="https://www.granna.ie/login/main.php">Cancel</a></p>

		</form>
	</div>
</body>
</html>
