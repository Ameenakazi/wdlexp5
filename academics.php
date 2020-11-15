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
$x=[
    './images/cbse-logo-1.png',
    'CGPA-10',
    'X'
];
$xii=[
    './images/MSBSHSE_logo.png',
    '81.52%',
    'XII'
];

$be=[
    './images/mu.png',
    'RCOE ',
    'SEM-I:7.87',
    'SEM-II:9.0',
    'SEM-III:9.50 ',
    'SEM-IV:9.45',
    'B.E'
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
   <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bokor&display=swap" rel="stylesheet">
    <title>academics</title>
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
    <div class="x">
        <div class="overlay1">
            <div class="ov1">
                <img src="<?php echo $x[0] ?>" alt="">
                <p><?php echo $x[1] ?></p>
            </div>
        </div>
        <div class="r1">
            <h3><?php echo $x[2] ?></h3>
        </div>
        <div class="t1"></div>
    </div>
    <div class="xii">
        <div class="overlay1">
            <div class="ov2">
                <img src="<?php echo $xii[0] ?>" alt="">
                <p><?php echo $xii[1] ?></p>
            </div>
        </div>
        <div class="r2">
            <h3><?php echo $xii[2] ?></h3>
        </div>
        <div class="t2"></div>
    </div>
    <div class="be">
        <div class="overlay1">
            <div class="ov3">
                <img src="<?php echo $be[0] ?>" alt="">
                <ol>
                    <li><?php echo $be[1] ?> </li>
                    <li><?php echo $be[2] ?>  </li>
                    <li><?php echo $be[3] ?>  </li>
                    <li><?php echo $be[4] ?> </li>
                    <li><?php echo $be[5] ?>  </li>
                </ol>
            </div>
        </div>
        <div class="r3">
            <h3><?php echo $be[6] ?></h3>
        </div>
        <div class="t3"></div>
    </div>
</body>
</html>