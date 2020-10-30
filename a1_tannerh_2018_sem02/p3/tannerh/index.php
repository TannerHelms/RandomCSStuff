<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8" >
<title>p3 Tanner h</title>
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded" rel="stylesheet">



</head>
<style>
body{
  background-image: url(images/wood1.jpg);
}
h4{
  color: red;
  font-family: 'BioRhyme Expanded', serif;
}
#header {
  grid-area: hd;
  background-color: #CCC;
  background-image: url(images/blue.jpg);
  text-align: center;
  color: red;
  font-family: 'BioRhyme Expanded', serif;
  padding: 10px;
}

img:hover {
animation: shake 0.5s;
animation-iteration-count: infinite;
}

@keyframes shake {
0% { transform: translate(1px, 1px) rotate(0deg); }
10% { transform: translate(-1px, -2px) rotate(-1deg); }
20% { transform: translate(-3px, 0px) rotate(1deg); }
30% { transform: translate(3px, 2px) rotate(0deg); }
40% { transform: translate(1px, -1px) rotate(1deg); }
50% { transform: translate(-1px, 2px) rotate(-1deg); }
60% { transform: translate(-3px, 1px) rotate(0deg); }
70% { transform: translate(3px, 1px) rotate(-1deg); }
80% { transform: translate(-1px, -1px) rotate(1deg); }
90% { transform: translate(1px, 2px) rotate(0deg); }
100% { transform: translate(1px, -2px) rotate(-1deg); }
}

#instructions {
  grid-area: instruct;
  background-color: #CCC;
  background-image: url(images/blue.jpg);
}

#theiframe {
  grid-area: theiframe;
  width: 100%;
}

#footer {
  grid-area: ft;
  background-color: #CCC;
  background-image: url(images/blue.jpg);
}

#master {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: auto auto 500px 200px;
  grid-gap: 10px;
  grid-template-areas:
  'hd      hd      hd'
  'dat     dat     instruct'
  'dat     dat     theiframe'
  'ft      ft      ft';
}

#data {
  grid-area: dat;
  background-color: #CCC;
  background-image: url(images/blue.jpg);
  color: red;
  font-family: 'BioRhyme Expanded', serif;
  display: grid;
  grid-template-columns: 75% 25%;
  grid-template-rows: auto;
  grid-template-areas:
  'form gallery'


}
#gridData{
  grid-area: form;
}
/*
#firstname, #lastname, #email, #whenithappened, #howlong, #howmany, #aliendescription, #whattheydid, #otherabductions, #frankspotted, #other{
  margin-right: 200px;
  text-align: center;
}
*/
/*
#right{
  text-align: left;
}
*/
#left{
  margin-left: 15%;
}
#right{
margin-left: 70%;
}
#other{
  margin-left: 70%;
}
#h{
  text-align: center;
}
#middle{
  margin-left: 50%;
}
#submit{
margin-left: 45%;
}
hr{
  width: 78%;
}
#thetommy{
 margin-left: 30%;
}
#theGallery{

  max-height: 500px;
  max-width: 270px;
  overflow-y: scroll;
  margin-top:5%;

}
imageGalley{
margin-top:40%;
}
a {
    color: #32CD32;
    font-size: 20px;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>

  <div id="master">
    <div id="header">
      <h4>Alien Abduction!!!<br /></h4>
      <h5>By Tanner Helms -- 03/22/2018</h5>





    </div>
    <div id="data">
      <div id="imageGalley">
        <br><br><br><br><br><br>
        <h4>Image Gallery:</h4>
        <div id="theGallery">
      <img src="images/alien02.jpg">
      <img src="images/alien03.jpg">
      <img src="images/alien04.jpg">
      <img src="images/alien05.jpg">
      <img src="images/alien06.jpg">
      <img src="images/alien07.jpeg">
    </div>
      </div>
      <div id="gridData">

        <a href="pages/searchDB.php">Search Database</a>
        <h4 id="h">Aliens Adbducted Me!</h4>
      <h4 id="h">Alien Abduction form:</h4>
      <form method="post" action="php/report.php">



              <label id="left" for="firstname">First name</label><br>
              <input id="right" type="text" id="firstname" name="firstname" /><br/><hr>
              <label id="left" for="lastname">Last name</label><br>
              <input id="right" type="text" id="lastname" name="lastname" /><br/><hr>
              <label id="left" for="email">Email</label><br>
              <input id="right" type="text" id="email" name="email" /><br/><hr>
              <label id="left" for="when">When did this happen?</label><br>
              <input id="right" type="text" id="when" name="when" /><br/><hr>
              <label id="left" for="howlong">How long where you gone?</label><br>
              <input id="right" type="text" id="howlong" name="howlong" /><br/><hr>
              <label id="left" for="howmany">How many aliens were there?</label><br>
              <input id="right" type="text" id="howmany" name="howmany" /><br/><hr>
              <label id="left" for="aliendescription">Describe them</label><br>
              <input id="right" type="text" id="aliendescription" name="aliendescription" /><br/><hr>
              <label id="left" for="whattheydid">What did they do?</label><br>
              <input id="right" type="text" id="whattheydid" name="whattheydid" /><br/><hr>
              <label id="left" for="otherabductees">Where there other abductees?</label><br>
              <span id="middle">Yes</span><input  type="radio" value="yes" id="otherabductees" name="otherabductees" />
              No<input  type="radio" value="no" id="otherabductees" name="otherabductees" /><br/><hr>
              <label id="left" for="abducteesdescription">describe them</label><br>
              <input id="right" type="text" id="abducteesdescription" name="abducteesdescription" /><br/><hr>
              <label id="left" for="frankspotted">Did you see frank?</label><br>
              <span id="middle">Yes</span><input  type="radio" value="yes" id="frankspotted" name="frankspotted" />
              No<input  type="radio" value="no" id="frankspotted" name="frankspotted" /><br/><hr>
              <label id="left" for="other">Anything else you want to add?</label><br>
              <textarea id="other" name="other"></textarea></br><hr>
              <input id="right" type="submit" value="Report Abduction" name="submit" /><br/>


      </form>
      <br>
    </div>
    </div>
    <div id="instructions">
      <h4>instructions: instructions, or general info -- catch all</h4>
      <a href="pages/firstDocs.php">Create an HTML form. read & verify with php</a>
      <br><br><a href="pages/createTable.php">On our Dev server, create a DB, create a table, enter test data</a>
      <br><br><a href="pages/createDBTable.php">Php connecting to database, enter data from website</a>
      <br><br><a href="pages/editDB.php">Displaying database with html, deleting/showing/updating certain records</a>
      <br><br>









    </div>
<div id="theiframe">

    <div>
      <object type="text/html" data="pages/classmates.php" width="100%" height="500px" >
      </object>
    </div>
  </div>

    <div id="footer">

      <h4>Logos</h4>
      <img src="images/eagle.png" height="100px" alt="Frank">
      <img src="images/westada.png"  height="100px" alt="Frank">
      <img src="images/centennial.png"  height="100px" alt="Frank">

    </div>
  </div>


</body>

<html>


</html>
