<?php
echo "<center>";
echo "<form action='index.php' method='post'>";
echo "<input type='submit' name='submit'>";
echo "</form>'";
echo "</center>";

if(isset($_POST["submit"])){

    fopen("https://github.com/Tummemo/testweb/test.txt","a");

}

?>

