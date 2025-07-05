<?php 
    $usernames.txt = "login.php";
    $contents = file_get_contents($usernames.txt      );
    $contents = explode("\n", $contents);

foreach($contents as $values){
     $loginInfo = explode(":", $values);
        $user = $loginInfo[0];
        $password = $loginInfo[1];

    if($user == $_POST['username'] && $password == $_POST['password']){
        session_start(); 
        header('Location: browse.php');
   }
    else{
        echo '<script>alert("Please verify your username and password.");</script>'
    }
}
    ?>
