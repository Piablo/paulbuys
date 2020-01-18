<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Wallpoet&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paul Buys</title>
</head>
<body>
<div class="main-container-header">
    <div class="logo-header">"PB"</div>
    <div class="nav-container-header">
        <a <?php if(is_page('library')) echo 'class="current-button-header"'?> href="library">Library</a>
        <a <?php if(is_page('interview')) echo 'class="current-button-header"'?> href="interview">Interview</a>
        <a <?php if(is_page('home')) echo 'class="current-button-header"'?> href="home">Resume</a>
    </div>
    <div class="hamburger-header">
        <i style="font-size: 40px; color: rgb(254,107,122)"class="fas fa-bars"></i>
    </div>
</div>
<div class="mobile-menu-container-header mobile-hide">    
    <a <?php if(is_page('home')) echo 'class="current-button-header"'?> href="home">Resume</a>
    <a <?php if(is_page('interview')) echo 'class="current-button-header"'?> href="interview">Interview</a>
    <a <?php if(is_page('library')) echo 'class="current-button-header"'?> href="library">Library</a>
</div>

</div>