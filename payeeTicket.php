<?php 

include 'LoginLanguages.php';

include 'config.php';
session_start();



if (!isset($_SESSION['email']))
    {    header("Location: index.php");    }

//$email = $_GET['email'];
$email = $_SESSION['email'];

// GMT ISSUE

$dateRun = gmdate("H:i d/m/y");
//$dateRun = gmdate("H,G,");

$date = date_create();
date_add($date,date_interval_create_from_date_string("2 days, 4 hours"));
//echo date_format($date,"H:i d/m/y");
$dateOver = date_format($date,"H:i d/m/y");



if (isset($_POST['submit']))
    {
	//$email = $_POST['namerecipient'];
	//$email = $_POST['email'];
	$recipientID = $_SESSION['id'];
	$pix = $_POST['pix'];
	$brlToSend = $_POST['brlToSend'];
	$eurToReceive = $_POST['eurToReceive'];
	//$dateRun = $_POST['dateRun'];
	//$dateOver = date_add($_POST['dateRun'],date_interval_create_from_date_string("2 days"));

		//$sql = "SELECT * FROM recipient WHERE ( (email='$email') AND ( cpf='$cpf' OR pix = '$pix' ) )";
		//$result = mysqli_query($conn, $sql);
		//if (!$result->num_rows > 0)
		   // {
			$sql = "INSERT INTO ticket (email, recipientID, pix, brlToSend, eurToReceive, dateRun, dateOver)
					VALUES ('$email', '$recipientID','$pix', '$brlToSend', '$eurToReceive', '$dateRun', '$dateOver')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				//header('location: https://www.granna.ie/login/list.php?email='.$email);
				//header('location: https://www.granna.ie/login/main.php');
			   } else {         echo "<script>alert('OKAY')</script>";}
		               //} else { echo "<script>alert('Woops! Recipient Already Exists.')</script>";}
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

			<div class="input-group"><input type="text" placeholder="$_SESSION['email']" name="email" value="<?php echo $_SESSION['email']; ?>" ></div>
			<div class="input-group"><input type="text" placeholder="$_SESSION['id'];" name="recipientID"  value="<?php echo $_SESSION['id']; ?>" ></div>
			<div class="input-group"><input type="text" placeholder="pix" name="pix" value="<?php echo $pix; ?>" ></div>
			<div class="input-group"><input type="text" placeholder="brlToSend" name="brlToSend" value="<?php echo $brlToSend; ?>" ></div>
			<div class="input-group"><input type="text" placeholder="eurToReceive" name="eurToReceive" value="<?php echo $eurToReceive; ?>" ></div>
			<div class="input-group"><input type="text" placeholder="dateRun" name="dateRun" value="<?php echo $dateRun?>" disabled></div>
			<div class="input-group"><input type="text" placeholder="dateOver" name="dateOver" value="<?php echo $dateOver?>" disabled></div>

			<div class="input-group"><button name="submit" class="btn">Add Ticket</button></div>
			<p class="login-register-text"><a href="https://www.granna.ie/login/main.php">Cancel</a></p>
		</form>
	</div>
</body>
</html>
