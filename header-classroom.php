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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&amp;subset=cyrillic,greek,vietnamese" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800&amp;subset=greek-ext,vietnamese" rel="stylesheet">
 	<?php wp_head(); ?>
</head>

<body>

<main>
