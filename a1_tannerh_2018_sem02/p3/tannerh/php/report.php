<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" / />
    <title>Aliens Abduct Me</title>
      <link rel="stylesheet" type="text/css" href="../master.css">
  </head>
  <body>

    <div id="master">

      <div id="header">

        <h1>Aliens Abduct Me</h1>
        <?php
          require 'DBconnect_4parm.php';
         ?>
      </div>

      <div id="data">
        <?php
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $when_it_happened = $_POST['when'];
        $how_long = $_POST['howlong'];
        $how_many = $_POST['howmany'];
        $other_abductees = $_POST['otherabductees'];
        $alien_description = $_POST['aliendescription'];
        $what_they_did = $_POST['whattheydid'];
        $abductees_description = $_POST['abducteesdescription'];
        $frank_spotted = $_POST['frankspotted'];
        $email = $_POST['email'];
        $other = $_POST['other'];

        require 'DBaddRecords.php';

        echo '<br />';
        echo 'thanks for submitting the form. </br>';
        echo 'You were abducted ' .$when_it_happened;
        echo ' and were gone for ' .$how_long.'</br>';
        echo 'Number of aliens ' .$how_many.'</br>';
        echo 'Describe them: ' .$alien_description.'</br>';
        echo 'The aliens did this: ' .$what_they_did.'</br>';
        echo 'Was Frank there? ' .$frank_spotted.'</br>';
        echo 'Other comments: ' .$other.'</br>';
        echo 'Your email is ' .$email.'</br>';
        echo '<hr />';
        echo 'Meta Data';

        $indicesServer = array(
          'PHP_SELF',
          'GATEWAY_INTERFACE',
          'SERVER_ADDR',
          'SERVER_NAME',
          'SERVER_SOFTWARE',
          'SERVER_PROTOCOL',
          'REQUEST_METHOD',
          'REQUEST_TIME',
          'REQUEST_TIME_FLOAT',
          'QUERY_STRING',
          'DOCUMENT_ROOT',
          'HTTP_ACCEPT',
          'HTTP_ACCEPT_CHARSET',
          'HTTP_ACCEPT_ENCODING',
          'HTTP_ACCEPT_LANGUAGE',
          'HTTP_CONNECTION',
          'HTTP_REFERER',
          'HTTP_USER_AGENT',
          'HTTPS',
          'REMOTE_ADDR',
          'REMOTE_HOST',
          'REMOTE_PORT',
          'REDIRECT_REMOTE_USER',
          'SCRIPT_FILENAME',
          'SERVER_SIGNATURE',
          'PATH_TRANSLATED',
          'SCRIPT_NAME',
          'REQUEST_URL',
          'PHP_AUTH_DIGEST',
          'PHP_AUTH_USER',
          'PHP_AUTH_PW',
          'AUTH_TYPE',
          'PATH_INFO',
          'ORIG_PATH_INFO'
        );

        echo '<table id="metadata_table">';
        foreach($indicesServer as $arg){
          if(isset($_SERVER[$arg])){
            echo '<tr><td>'.$arg.'</td><td>'.$_SERVER[$arg].'</td></tr>';
          } else {
            echo '<tr><td>'.$arg.'</td><td>---</td></tr>';
          }
        }

        echo '</table>';
        ?>

        <a href="../index.php">Main Page!</a>
      </div>

    </div>

  </div>





  </body>
</html>
