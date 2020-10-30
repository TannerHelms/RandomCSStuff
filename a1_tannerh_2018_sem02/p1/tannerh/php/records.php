<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
include 'DBconnect_4parm.php';

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $last ='', $emails = '', $website = '', $comments='', $error = '', $id = '')
{ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title> <?php
		if($id!='') { echo "Edit Record";
		} else { echo "New Record";
		}
			?> </title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style>
			body {
				background-image: url(" ../images/wood1.jpg");
				text-align: left;
				color: #66ccff;
				font-family: 'Gloria Hallelujah', cursive;
				text-shadow: 2px 2px 2px
			}
		</style>
	</head>
	<body>
		<h1> <?php
		if($id!='') { echo "Edit Record";
		} else { echo "New Record";
		}
	?>
		</h1>
		<?php
		if($error!='') {
		echo "<div style='padding:4px; border:1px solid red; color:red'>".$error."</div>";
		}
		?>

		<form action="" method="post">
			<div>
				<?php if ($id != '')
{
				?>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<p>
				ID: <?php echo $id; ?>
				</p>
				<?php
				}
				?>

				<strong>First Name: *</strong>
				<input type="text" name="firstname"
				value="<?php echo $first; ?>"/>
				<br/>
				<strong>Last Name: *</strong>
				<input type="text" name="lastname"
				value="<?php echo $last; ?>"/>
				<br />
				<strong>Email: *</strong>
				<input type="text" name="email"
				value="<?php echo $emails; ?>"/>
				<br>
				<strong>Website: *</strong>
				<input type="text" name="website"
				value="<?php echo $website; ?>"/>
				<p>
					Comments: *
				</p>
				<textarea name="comments" rows="10" cols="30"><?php echo $comments; ?></textarea>								
			<p>* required</p>
			<input type="submit" name="submit" value="Submit" />
			</div>
		</form>
	</body>
</html>

<?php }
	/*
	EDIT RECORD
	*/
	// if the 'id' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['id']))
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// make sure the 'id' in the URL is valid
	if (is_numeric($_POST['id']))
	{
	// get variables from the URL/form
	$id = $_POST['id'];
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);
	$website = htmlentities($_POST['website'], ENT_QUOTES);
	$comments = htmlentities($_POST['comments'], ENT_QUOTES);
	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '' || $email == '' || $website == '' || $comments == '')
	{
	// if they are empty, show an error message and display the form
	$error = 'ERROR: Please fill in all required fields!';
	renderForm($firstname, $lastname, $email, $website, $comments, $error, $id);
	}
	else
	{
	// if everything is fine, update the record in the database
	if ($stmt = $conn->prepare("UPDATE MyGuests SET firstname = ?, lastname = ?, email = ?, website = ?, comments = ?
	WHERE id=?"))
	{
	$stmt->bind_param("sssssi", $firstname, $lastname, $email, $website, $comments, $id);
	$stmt->execute();
	$stmt->close();
	}
	// show an error message if the query has an error
	else
	{
	echo "ERROR: could not prepare SQL statement.";
	}
	// redirect the user once the form is updated
	header("Location: ../index.php#about");
	}
	}
	// if the 'id' variable is not valid, show an error message
	else
	{
	echo "Error!";
	}
	}
	// if the form hasn't been submitted yet, get the info from the database and show the form
	else
	{
	// make sure the 'id' value is valid
	if (is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
	// get 'id' from URL
	$id = $_GET['id'];
	// get the recod from the database
	if($stmt = $conn->prepare("SELECT * FROM MyGuests WHERE id=?"))
	{
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$stmt->bind_result($id, $firstname, $lastname, $email, $reg_date, $website, $comments); // I CHANGED $email and $reg_date
	$stmt->fetch();
	// show the form
	renderForm($firstname, $lastname, $email, $website, $comments, NULL, $id);
	$stmt->close();
	}
	// show an error if the query has an error
	else
	{
	echo "Error: could not prepare SQL statement";
	}
	}
	// if the 'id' value is not valid, redirect the user back to the view.php page
	else
	{
	header("Location: ../index.php#viewRecords");
	}
	}
	}
	/*
	NEW RECORD
	*/
	// if the 'id' variable is not set in the URL, we must be creating a new record
	else
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// get the form data
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);
	$website = htmlentities($_POST['website'], ENT_QUOTES);
	$comments = htmlentities($_POST['email'], ENT_QUOTES);
	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '' || $email == '' || $website == '' || $comments == '')
	{
	// if they are empty, show an error message and display the form
	$error = 'ERROR: Please fill in all required fields!';
	renderForm($firstname, $lastname, $email, $website, $comments, $error);
	}
	else
	{
	// insert the new record into the database
	if ($stmt = $conn->prepare("INSERT MyGuests (firstname, lastname, email, website, comments) VALUES (?, ?, ?, ?, ?)"))
	{
	$stmt->bind_param("sssss", $firstname, $lastname, $email, $website, $comments);
	$stmt->execute();
	$stmt->close();
	}
	// show an error if the query has an error
	else
	{
	echo "ERROR: Could not prepare SQL statement.";
	}
	// redirec the user
	header("Location: ../index.php");
	}
	}
	// if the form hasn't been submitted yet, show the form
	else
	{
	renderForm();
	}
	}
	// close the mysqli connection
	$conn->close();
?>
