
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
    <h2>PHP to Database Connection:</h2>
    <p>This is the php code to connnect to your database. That way you can access the database and use SQL commands through the website. The
       Dev section is to connect to a local server, and the Ops section is used to connect to a public server. You can choose which one to use.</p>
    <img src="../images/connectdb1.png" alt="code1">
    <p>This shows how to close the connection to the database when your done with it. You don't want to keep the connection running in the
       background when you don't need it.</p>
    <img src="../images/code6.png" alt="code2">
    <h2>Adding Records with PHP:</h2>
    <p>This shows the process of adding records to a database. The 'require' or 'include' functions just run the php file. 'include' means
       that it will run the file and if it doesn't work, the code skips it. 'require' means that it will run the file and if it doesn't work,
       the code will end there and stop running. The picture shows that we connect to the database, retrieve our form variables, add records,
       and then close the connection.</p>
    <img src="../images/code7.png" alt="code3">
  </body>
</html>
