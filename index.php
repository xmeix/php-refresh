
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"/>
        <label>password:</label>
        <input type="password" name="password"/>
        <input type="submit" name="login" value="Log in"/>
   </form>
</body>
</html>

<?php 
    
    echo "_________________________________<br>";
    // foreach($_POST as $key => $value){
    //     if(!empty($value)) echo "{$key} = {$value} <br>"; 
    // }

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)){
            echo "Username is missing";        
        }elseif(empty($password)){
            echo "Password is missing";    
        }    
}

    
?>
