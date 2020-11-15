<?php 
$navbaricn='./images/pngkit_fax-png_2073204.png';
$nava=[
  'index.php',
  'academics.php',
  'skills.php',
  'about.php',
  'contact.php',

];
$navl=[
  'HOME',
  'ACADEMICS',
  'SKILLS',
  'ABOUT',
  'CONTACT'

];
$txt1=[
  'AMEENA KAZI',
  'AN ASPIRING ENGINEERING STUDENT',
  'HELPFUL AND FREINDLY IN NATURE',
  'LIKES TO DO CODING AND IS INTERESTED IN APP DEVELOPEMENT'

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=no">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Quicksand&display=swap" rel="stylesheet">
    <title>resume</title>
</head>
<body>
  <div class="body">
    <div class="ellipse1"></div>
    <div class="ellipse2"></div>
    <div class="ellipse3"></div>
    <div class="navbar">
        <img src="<?php echo $navbaricn ?>" alt="">
        <ul>
            <li><a href="<?php echo $nava[0] ?>"><?php echo $navl[0] ?></a></li>
            <li><a href="<?php echo $nava[1] ?>"><?php echo $navl[1] ?></a></li>
            <li><a href="<?php echo $nava[2] ?>"><?php echo $navl[2] ?></a></li>
            <li><a href="<?php echo $nava[3] ?>"><?php echo $navl[3] ?></a></li>
            <li><a href="<?php echo $nava[4] ?>"><?php echo $navl[4] ?></a></li>
        </ul>
    </div>
    
    <div class="txt1">
      <h4><?php echo $txt1[0] ?></h4>
      <p><?php echo $txt1[1] ?> </p> 
      <p><?php echo $txt1[2] ?> </p>
      <P><?php echo $txt1[3] ?></P>
    </div>
  </div>

</body>
</html>