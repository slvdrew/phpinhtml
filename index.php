<!DOCTYPE html>
<html>
  <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
<body>
<?php include 'listgroup.php' ?>
<h2><?= "Hello! My name is $name." ?></h2>

<p><?= "This is a list of 3 things about why I like coding!" ?></p>
<ul>
  <li><?= "$reasonOne" ?></li>
  <li><?= "$reasonTwo" ?></li>
  <li><?= "$reasonThree" ?></li>
</ul>

</body>
</html>