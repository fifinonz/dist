<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>
     <?php
      if(isset($title)){
        echo $title;
      } else {
        echo 'eCounty :: Admin panel';
      }
     ?>
   </title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap.css">
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/custom.css">

 </head>
 <body>
