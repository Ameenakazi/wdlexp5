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
  'CONTACT',

];
$imgs=[
    './images/htmll.png',
    './images/download.png',
    './images/iconfinder_121-css3_4202020.png',
    './images/29165.svg'
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>skills</title>
</head>
<body>
    <div class="ellipse1"></div>
    <div class="ellipse2"></div>
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
    <div class="c1">
        <img src="<?php echo $imgs[0] ?>" alt="">
    </div>
    <div class="c2">
        <img src="<?php echo $imgs[1] ?>" alt="">
    </div>
    <div class="c3">
        <img src="<?php echo $imgs[2] ?>" alt="">
    </div>
    <div class="c4">
        <img src="<?php echo $imgs[3] ?>" alt="">
    </div>
</body>
</html>