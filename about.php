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
$tst2='ABOUT  ME';
$txt2=[
    'I’m Ameena Kazi pursuing engineering at Rizvi College Of Engineering and soon to Graduate from Mumbai University.',
    'I am interested in learning new programming languages,and implement them.',
    'My short term goal is to learn new languages ,and long term goal is to become a Full Stack Developer'
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Quicksand&display=swap" rel="stylesheet">

    <title>About</title>
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
         <div class="tst2">
            <h4><?php echo $tst2 ?></h4>
         </div>
        
    <div class="txt2">
        <p><?php echo $txt2[0] ?></p>
        <p><?php echo $txt2[1] ?></p>
        <p><?php echo $txt2[2] ?></p>
    </div>
    
</body>
</html>