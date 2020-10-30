
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="searchDB.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded" rel="stylesheet">

  <title>Search DB</title>
  <script>
  $(document).ready(function(){
    $("#item1div").hide();
    $("#item2div").hide();
    $("#item3div").hide();
    $("#item4div").hide();
    $("#item5div").hide();
    $("#item6div").hide();


      $("#item1nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item1div").toggle(1000);
      });
      $("#item2nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item2div").toggle(1000);
      });
      $("#item3nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item3div").toggle(1000);
      });
      $("#item4nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item4div").toggle(1000);
      });
      $("#item5nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item5div").toggle(1000);
      });
      $("#item6nav").click(function(){
        $("#item1div").hide();
        $("#item2div").hide();
        $("#item3div").hide();
        $("#item4div").hide();
        $("#item5div").hide();
        $("#item6div").hide();
          $("#item6div").toggle(1000);
      });
  });
</script>
<script>
body {
background: #0000FF;
font-family: 'BioRhyme Expanded', serif;
}
#header {
  grid-area: hd;
  background-color: #FFFF00;
  border: 3px solid #FF0000;
  padding: 20px;
  text-align: center;
  font-family: 'BioRhyme Expanded', serif;

}
#navBar{
  grid-area:navBar;
  background-color: #FFFF00;
  border: 3px solid #FF0000;
  padding: 20px;
  font-family: 'BioRhyme Expanded', serif;
}
#search {
  grid-area: search;
  background-color: #FFFF00;
  border: 3px solid #FF0000;
  padding: 20px;
  font-family: 'BioRhyme Expanded', serif;
}

#instructions {
  grid-area: instruct;
  background-color: #FFFF00;
  border: 3px solid #FF0000;
  padding: 20px;
  font-family: 'BioRhyme Expanded', serif;
}

#footer {
  grid-area: ft;
  background-color: #FFFF00;
  border: 3px solid #FF0000;
  padding: 20px;
  font-family: 'BioRhyme Expanded', serif;
}

#master {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: auto auto auto auto;
  grid-gap: 10px;
  grid-template-areas:
  'hd          hd '
  'search      instruct'
  'navBar      navBar'
  'ft          ft ';
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

table{
  border: 3px solid black;
  border-collapse: collapse;
}
tr,td{
  border: 1px solid black;
  text-align:center;
}
tr:nth-child(even) {
  background-color: #565656;
}
th{
  padding: 2px 4px;
}

</script>

</script>
</head>
<body>
  <div id="master">

    <div id="header">
      <h3>Search The Database</h3>
    <a href="../index.php"><h4>Click to go back to the main page...</h4></a>
    </div>
    <div id="navBar">
      <ul>
				<li>
					<a id="item1nav" class="active" href="#1"><h5>Show Database</h5></a>
				</li>
				<li>
					<a id="item2nav" href="#2"><h5>Sort by First Name</h5></a>
				</li>
				<li>
					<a id="item3nav" href="#3"><h5>Sort by Last Name</h5></a>
				</li>
				<li>
					<a id="item4nav" href="#4"><h5>Search By ID</h5></a>
				</li>

				<li>
					<a id="item5nav" href="#5"><h5>Delete By ID</h5></a>
				</li>
        <li>
					<a id="item6nav" href="#6"><h5>Edit Record</h5></a>
				</li>
			</ul>
    </div>

  </div>

    <div id="instructions">
    </div>

    <div id="footer">
      <div id="item1div">
        <?php
        include "../php/fullDB.php";
        ?>
      </div>
      <div id="item2div">
        <?php
        include "../php/item2.php";
        ?>
      </div>
      <div id="item3div">
        <?php
        include "../php/item3.php";
        ?>
      </div>
      <div id="item4div">
      <form method="post" action="../php/search.php">
        <h4>Show Record by ID</h4>
        <label for="ID_input">ID:</label>
        <input type="text" name="ID_input" id="ID_input">
        <input type="submit" name="submitID" value="Show Record">
      </form>
    </div>


    <div id="item5div">


      <form method="post" action="../php/delete.php">
        <h4>Delete Record by ID</h4>
        <label for="ID_input2">ID:</label>
        <input type="text" name="ID_input" id="ID_input2">
        <input type="submit" name="submitID" value="Delete Record">
      </form>


    </div>

    <div id="item6div">

      <form method="post" action="../php/edit.php">
        <h4>Select Record to Edit by ID</h4>
        <label for="ID_input">ID:</label>
        <input type="text" name="ID_input" id="ID_input">
        <input type="submit" name="submitID" value="Show Record">
      </form>


    </div>




    </div>

  </div>

</body>

</html>
