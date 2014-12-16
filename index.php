<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="//use.edgefonts.net/abril-fatface.js"></script>
<link rel ="stylesheet" href ="look.css" type ="text/css">

<?php
error_reporting(E_ALL);

$flatErr = "";
$checkedValue2 = "";
$checkedValue4 = "";
$checkedValue6 = "";
$checkedValue8 = "";
$checkedValue1 = "";
$checkedValue3 = "";
$checkedValue5 = "";
$checkedValue7 = "";
$checkedValue8 = "";
$checkedValue9 = "";
$checkedValue10 = "";
$checkedValue11 = "";
$checkedValue12 = "";
$checkedText1 = "";
$checkedText2 = "";
$checkedText3 = "";
$checkedText4 = "";
$checkedText5 = "";


if (isset($_POST["metro_design"]) && isset($_POST["one_page"]) && isset($_POST["skeuomorphic_design"]) && isset($_POST["flat_design"])) {
   if ($_POST["metro_design"] == "no" && $_POST["one_page"] == "no" && $_POST["skeuomorphic_design"] == "no" && $_POST["flat_design"] == "no") {
     $flatErr = "Nothing? ..what will be the design trends 2015 in your opinion";
     $checkedValue2 = "checked";
     $checkedValue4 = "checked";
     $checkedValue6 = "checked";
     $checkedValue8 = "checked";

      /*Abfrage Letzte Radio Buttons*/
      if (isset($_POST["followed"])) {
       if ($_POST["followed"] == "yes") {
        $checkedValue9 = "checked";
       }
      }
      if (isset($_POST["followed"])) {
       if ($_POST["followed"] == "no") {
        $checkedValue10 = "checked";
       }
      }
      if (isset($_POST["should"])) {
       if ($_POST["should"] == "yes") {
        $checkedValue11 = "checked";
       }
      }
      if (isset($_POST["should"])) {
       if ($_POST["should"] == "no") {
        $checkedValue12 = "checked";
       }
      }
      /*Textfelder*/
      if(isset($_POST["metro_design_comment"]))
        $checkedText1 = $_POST["metro_design_comment"];

      if(isset($_POST["one_pages_comment"]))
        $checkedText2 = $_POST["one_pages_comment"];

      if(isset($_POST["skeuomorphic_design_comment"]))
        $checkedText3 = $_POST["skeuomorphic_design_comment"];

      if(isset($_POST["flat_design_comment"]))
        $checkedText4 = $_POST["flat_design_comment"];

       if(isset($_POST["bullshit_comment"]))
         $checkedText5 = $_POST["bullshit_comment"];

    }  else {

   /* Gruppe Anfrage Yes*/
   if (isset($_POST["metro_design"])){
    if ($_POST["metro_design"] == "yes") {
     $checkedValue1 = "checked";
    }
   }

   if (isset($_POST["one_page"])){
    if ($_POST["one_page"] == "yes") {
     $checkedValue3 = "checked";
    }
   }
   if (isset($_POST["skeuomorphic_design"])) {
    if ($_POST["skeuomorphic_design"] == "yes") {
     $checkedValue5 = "checked";
    }
   }
   if (isset($_POST["flat_design"])){
    if ($_POST["flat_design"] == "yes") {
     $checkedValue7 = "checked";
    }
   }
   /* Gruppe Anfrage No*/
   if (isset($_POST["metro_design"])){
    if ($_POST["metro_design"] == "no") {
     $checkedValue2 = "checked";
    }
   }
   if (isset($_POST["one_page"])){
    if ($_POST["one_page"] == "no") {
     $checkedValue4 = "checked";
    }
   }

   if (isset($_POST["skeuomorphic_design"])){
    if ($_POST["skeuomorphic_design"] == "no") {
     $checkedValue6 = "checked";
    }
   }
   if (isset($_POST["flat_design"])){
    if ($_POST["flat_design"] == "no") {
     $checkedValue8 = "checked";
    }
   }
   /*Abfrage Letzte Radio Buttons*/
   if (isset($_POST["followed"])) {
    if ($_POST["followed"] == "yes") {
     $checkedValue9 = "checked";
    }
   }
   if (isset($_POST["followed"])) {
    if ($_POST["followed"] == "no") {
     $checkedValue10 = "checked";
    }
   }
   if (isset($_POST["should"])) {
    if ($_POST["should"] == "yes") {
     $checkedValue11 = "checked";
    }
   }
   if (isset($_POST["should"])) {
    if ($_POST["should"] == "no") {
     $checkedValue12 = "checked";
    }
   }
 /*/////////////////////////////////////////////////////////*/
 $empfaenger = 'iherzog@sabic.uberspace.de';
 $betreff = 'survey_designtrends2015';
 $nachricht = 'Metro Design: '. $_POST['metro_design'] . '<br>' . "-----------------------------" . "<br>" .
 'No?: Teach me with a comment: ' . $_POST['metro_design_comment'] . "<br>" . "-----------------------------" . "<br>" .
 'One Page: '.$_POST['one_page'] . "<br>" . "-----------------------------" . "<br>" .
 'No?: Teach me with a comment: ' . $_POST['one_pages_comment'] . "<br>" . "-----------------------------" . "<br>" .
 'Skeuomorphic Design: ' . $_POST['skeuomorphic_design'] . "<br>" . "-----------------------------" . "<br>" .
 'No?: Teach me with a comment: ' . $_POST['skeuomorphic_design_comment'] . "<br>" . "-----------------------------" . "<br>" .
 'Flat Design: '. $_POST['flat_design'] . "<br>" . "-----------------------------" . "<br>" .
 'No?: Teach me with a comment: ' . $_POST['flat_design_comment'] . "<br>" . "-----------------------------" . "<br>" .
 'None of these things! Why?: Teach me with a comment:' . $_POST['bullshit_comment'] . "<br>" . "-----------------------------" . "<br>" .
 'Have you ever followed/used design trend? ' . $_POST['followed'] . "<br>" . "-----------------------------" . "<br>" .
 'Should we follow design trends? ' . $_POST['should'] . "<br>" . "-----------------------------" . "<br>" .
 $header = 'From: webmaster@example.com' . "<br>";
 $header = "Mime-Version: 1.0\r\n";
 $header = "Content-type: text/html; charset=utf-8";

 if (mail($empfaenger, $betreff, $nachricht, $header)){
 echo 'erfolg';
 }
 /*/////////////////////////////////////////////////////////*/
 }
}
?>

</head>

<body>
<p id="part1" style="height: 128px;">2015</p>
<p id="part2" style="height: 21px;">DESIGNTRENDS</p>
<p id="part3">IM WWW</p><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <h2>Metro Design</h2>
        <input type="radio" name="metro_design" value="yes"<?php echo $checkedValue1;?>> YES
         <input type="radio" name="metro_design" value="no"<?php echo $checkedValue2;?>> NO


        <p>Teach me if you want:</p>
        <input type="text" name="metro_design_comment" size="50" value= <?php echo $checkedText1;?>><br><br>
    </p>

    <h2>One Pages</h2>
        <input type="radio" name="one_page" value="yes"<?php echo $checkedValue3;?>> YES
        <input type="radio" name="one_page" value="no"<?php echo $checkedValue4;?>> NO


        <p>YTeach me if you want:</p>
        <input type="text" name="one_pages_comment" size="50" value= <?php echo $checkedText2;?>><br><br>
    </p>

    <h2>Video Background</h2>
        <input type="radio" name="skeuomorphic_design" value="yes"<?php echo $checkedValue5;?>> YES
        <input type="radio" name="skeuomorphic_design" value="no"<?php echo $checkedValue6;?>> NO

        <p>Teach me if you want:</p>
        <input type="text" name="skeuomorphic_design_comment" size="50" value= <?php echo $checkedText3;?>><br><br>
    </p>

    <h2>Flat Design</h2>
        <input type="radio" name="flat_design" value="yes"<?php echo $checkedValue7;?>> YES
        <input type="radio" name="flat_design" value="no"<?php echo $checkedValue8;?>> NO


        <p>Teach me if you want:</p>
        <input type="text" name="flat_design_comment" size="50" value= <?php echo $checkedText4;?>><br><br>
    </p>

    <h2>None of these things!</h2>
    <p><b>Why?: </b>Please, teach me with a comment:<p/>
    <textarea name ="bullshit_comment" cols="38" rows="10" value= <?php echo $checkedText5;?>></textarea><span class="error"> * <?php echo $flatErr;?></span><br><br>

    <h2>Follow-up questions 1:</h2>
    <p>Have you ever followed/used design trend?</p>
    <p> <input type="radio" name="followed" value="yes"<?php echo $checkedValue9;?>> YES
        <input type="radio" name="followed" value="no"<?php echo $checkedValue10;?>> NO
    </p><br>

    <h2>Follow-up questions 2:</h2>
    <p><b>But the big question is</b> ...should we follow design trends?</p>
    <p> <input type="radio" name="should" value="yes"<?php echo $checkedValue11;?>> YES
        <input type="radio" name="should" value="no"<?php echo $checkedValue12;?>> NO
    </p><br><br>

    <input id ="bigButton" type="submit" value="UP INTO SPACE" onclick="Weiter()"><br><br>

</form>


</body>
</html>