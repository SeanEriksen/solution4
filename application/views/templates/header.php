<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

    <style type="text/css">

        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #b3ccff;
            color: white;
        }

        body {
            background-color: #0b2b7a;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #d1d3d8;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #f0f3f3;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        input {
            margin-bottom: 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }

        .btn {
            outline: 0;
            border: none;
            border-top: none;
            border-bottom: none;
            border-left: none;
            border-right: none;
            box-shadow: inset 2px -3px rgba(0, 0, 0, 0.15);
        }

        .btn:focus {
            outline: 0;
            -webkit-outline: 0;
            -moz-outline: 0;
        }


    </style>
</head>
<body>