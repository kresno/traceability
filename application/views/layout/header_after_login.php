<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> <?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>public/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>public/css/sb-admin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">

    <?php if($role > 0) {
    echo "<link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css'>";
    }?>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
