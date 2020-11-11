<?php
 if(isset($_POST['submit'])){
    function sound (){
        $string=$_POST['sound'];
        $str2=$_POST['sound2'];

        echo metaphone($str);
        echo "<br>";
        echo metaphone($str2);
        echo "<br>";
        echo "<br>";

        echo soundex($str);
        echo "<br>";
        echo soundex($str);

        echo "sound()";
    }
//     if(isset ($_POST['submit'])){
//         if(soundex($_POST['sound1'])===soundex($_POST['sound2'])){
//             echo"They are Homophones";
//         }
//     sound();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php $_SEVER['PHP_SELF']?>" method="post">
    <input type="text" name="sound1" id="r" placeholder="enter sound"> 
<input type="text" name="sound2"  id="s" placeholder="enter sound">
<input type="submit" name="submit" value="check" id="">
    </form>
</body>
</html>