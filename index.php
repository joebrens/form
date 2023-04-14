<?php
if(isset($_post["name"])){
$b=$_post["name"];
}
else{
$b=7;
}
$c="<html>
<body>
<form action='http://localhost/form/index.php' method='post'>
<input type='submit' value='submit'>
</form>
</body>
</html>";
echo $b;
echo$c;
?>