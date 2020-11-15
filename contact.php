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
$gh=[
    './images/GitHub-Mark.png',
    'AmeenaKazi'
];
$gl=[
    './images/1280px-Gmail_Icon.svg.webp',
    'kaziak075@gmail.com'

];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  
    <title>Contact</title>
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
    <div class="gh">
       <img src="<?php echo $gh[0] ?>" alt="">
       <p><?php echo $gh[1] ?></p>
    </div>
    <div class="gl">
        <img src="<?php echo $gl[0] ?>" alt="">
        <p><?php echo $gl[1] ?></p>

    </div>
    
</body>
</html>