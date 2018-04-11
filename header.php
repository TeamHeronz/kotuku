<?php
/**
 * The general header for all pages except Classroom
 *
 * Displays all of the <head> section and everything up until <main>
 *
 *
 * @package Kotuku
 */

 ?>

<!doctype html>
<html lang="en-UK">
<head>
  <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?> </title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&amp;subset=cyrillic,greek,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=greek-ext,vietnamese" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <head>
  <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?> </title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&amp;subset=cyrillic,greek,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=greek-ext,vietnamese" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header id="masthead" class="c-flex">
    <div class="c-flex-3of12">
      <a href="https://heronz.org/">
      <img class="o-logo" src="https://heronz.org/wp-content/uploads/2018/01/logo_heavy-1.svg" alt="Heronz Logo">
      </a>
    </div>
    <nav class="c-flex-5of12">
      <a href="https://heronz.org/about/">About</a>
      <a href="https://heronz.org/programmes/">Programmes</a>
      <a href="https://heronz.org/team/">Team</a>
    </nav>
    <div class="c-flex-4of12">
      <a href="https://heronz.org/enrol/"><button class="o-btn-secondary" href="">Enrol</button></a>
      <form  onsubmit="location.href='https://www.heronz.org/classroom/' + document.getElementById('tutorCode').value; return false;"/>
        <input type="text" id="tutorCode" placeholder="or type tutor code" style="font-family: 'Alegreya Sans', Helvetica, sans-serif;"/>
        <input type="submit" class="o-btn-secondary" value="Enter"/>
      </form>
    </div>
  </header>

  <main>