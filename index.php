<?php
echo "<center>";
echo "<form action='index.php' method='post'>";
echo "<input type='submit' name='submit'>";
echo "</form>'";
echo "</center>";

if(isset($_POST["submit"])){

    fopen("test.txt","a");

}

?>

