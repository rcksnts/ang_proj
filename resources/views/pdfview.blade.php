<?php
/**
 * Created by PhpStorm.
 * User: jotan
 * Date: 1/30/2018
 * Time: 11:12 PM
 */
?>
<head>
    <style>
        * {
            font-family: 'Raleway', sans-serif;
        }
    </style>

</head>
<html>

First Name: {{ $form->firstName }}<br>
Last Name: {{ $form->lastName}}    <br>
Gender: {{ $form->gender }} <br>
Age Range: {{ $form->ageRange }}   <br>
Mobile Number: {{ $form->mobileNumber }}   <br>
Email: {{ $form->email }}  <br>
Nationality: {{ $form->nationality}} <br>
Activity: {{ $form->activity }}   <br>
Facebook: {{ $form->facebook }}   <br>
Instagram: {{ $form->instagram }} <br> <br> <br>
Signatures: <img src="{{ public_path() . '/signatures/1.png' }}" height="100px" width="100px">
Signatures: <img src="{{ public_path() . '/signatures/2.png' }}" height="100px" width="100px">


</html>
