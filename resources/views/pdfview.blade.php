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

?>

@foreach($form as $forms)

        <div style="border-style:solid; border-width: 1px; display: inline-block;  z-index: -9">

            {{$forms['firstName']}} <br>
            {{$forms['lastName']}} <br>
            {{$forms['gender']}}  <br>
            {{$forms['ageRange']}}    <br>
            {{$forms ['mobileNumber']}}    <br>
            {{$forms['email']}}   <br>
            {{$forms['nationality']}} <br>
            {{$forms['activity']}} <br>
            {{$forms['facebook']}} <br>
            {{$forms['instagram']}} <br>



        </div>
        <br>
        @endforeach

</html>
