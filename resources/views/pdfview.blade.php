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
<?php
$ctr = 1;
?>

@foreach($forms as $form)
   

        <br>
        <br>
        <div style="border-style:solid; background-color: gold; border-width: 1px; display: inline-block;  z-index: -9">

            {{$form-> firstName}} <br>
            {{$form-> lastName}} <br>
            {{$form-> gender}}  <br>
            {{$form-> ageRange}}    <br>
            {{$form-> mobileNumber}}    <br>
            {{$form-> email}}   <br>
            {{$form-> nationality}} <br>
            {{$form-> activity}} <br>
            {{$form-> facebook}} <br>
            {{$form-> instagram}} <br>


        </div>
        <br>
        @endforeach

</html>
