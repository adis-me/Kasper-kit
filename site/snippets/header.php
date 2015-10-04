<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="shortcut icon" href="">

    <?php echo css('assets/css/screen.css') ?>
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400"/>

</head>
<body class="<?php if(isset($bodyClass)) { echo $bodyClass; }; ?>">

<?php snippet('menu') ?>
