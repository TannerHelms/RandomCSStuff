
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
    <h2>HTML form:</h2>
    <p>This is the code for an imput form. The Label tags aren't necessarily needed, but are useful for labeling the input tags. The
       for = "" part of the label tag is associated with the id of the element, and not the name. It's probably not the best practice to
       make the id and name the same thing.</p>
    <img src="../images/code1.png" alt="code1">
    <h2>PHP form:</h2>
    <p>This shows you how to get and use the inputs the user put in the form. When you use variables in php, you put a $ in front of the word,
       so remember to do that. You retrieve the values by using $_POST[] (inside the [] you put the name of the input tag, not the id). Using
       $_GET[] will work too; POST is more safe, but GET allows you to use the URL to come back to the page.</p>
    <img src="../images/code2.png" alt="code2">
    <h2>PHP Metadata:</h2>
    <p>This has nothing to do with the input form, but gives you data about the user using php. There is $_SERVER[] where you put a certain
       string inside [] and it will return a string of the data (for example "SERVER_NAME" will give you the name of the server). So here we're
       using an array to list the strings you can put in $_SERVER[]</p>
    <img src="../images/code3.png" alt="code3">
    <p>Now we're going to display the metadata using echo to make a table. We're using a for loop to put each entry of the array inside $_SERVER[]</p>
    <img src="../images/code4.png" alt="code4">
  </body>
</html>
