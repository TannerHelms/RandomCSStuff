
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Php First Test Notes</title>
      <link rel="stylesheet" type="text/css" href="../master.css">
<style>
h2, p{
color: white;
}
#atag {
    color: #32CD32;
    font-size: 20px;
}
</style>
  </head>
<body>
  <a id="atag" href="../index.php"><h1>Back</p></h1></a>
  <h2>Displaying Database with HTML:</h2>
  <p>We use the SELECT command through PHP, and store the values in a variable. We than check if there are any rows, and if there is we go through a while loop
     and use echos to store the data in an HTML table. This code orders the table alphabetically by first name</p>
  <img src="../images/code9.png" alt="code9">
  <h2>Deleting Record by ID:</h2>
  <p>We pass in the ID from the user input. We run the SQL that deletes a record.</p>
  <img src="../images/code10.png" alt="code10">
  <p>This would be the delete record input form to get the ID from the user. At the bottom is a link to update the record
     by ID.</p>
  <img src="../images/code12.png" alt="code12">
  <h2>Updating Record by ID:</h2>
  <p> We're going to pass in all the variables to get to another page, When you click the update abduction form.</p>
  <img src="../images/code13.png" alt="code13">
  <p>This is the code of the page opened when the submit button is clicked. We pass in all the variables from the input form, and then we run the SQL
     code in PHP that updates the record with the given variables.</p>
  <img src="../images/code14.png" alt="code14">
</body>
</html>
