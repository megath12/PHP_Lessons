

<?php

include "./session_sess.php";

$_SESSION['username']="pablo14";
echo $_SESSION['username'];

if(!isset($_SESSION['username'])){
    echo "You are not logged in";
}
else{
    echo "You are logged in";
}


?>

</body>
</html>