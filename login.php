<!--
    <br>
    <form action="action_page.php" target="_blank" method="post" autocomplete="on">
        <label for="username">Username:</label><br/>
        <input type="text" id="username" name="username" required autofocus><br>
        <label for="passwort">Passwort:</label><br/>
        <input type="password" id="passwort" name="passwort" required><br/><br/>
         <label for="email">Email Adresse:</label><br>    nötig?   -->
        <!-- <input type="text" id="email" name="email"><br><br> 
        <input type="submit" value="Einloggen"><br><br>
    </form>
    
    
    <a href="index.php?page=registrierung">Noch nicht registriert?</a>

-->
<?php
$msg = '';
?>

<?php
    $msg = '';
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin')
        {
            $msg = 'Login erfolgreich!';
        }

        else
        {
            $msg = 'Benutzername und/oder Passwort falsch';
        }

    }

    
    if (@$_POST['safeit'] == '1') {
        $logincookieduration = 31536000; //valid for 1 year
        setcookie("userID", $_SESSION['userID'], time() + $logincookieduration);
        setcookie("username", $_POST['username'], time() + $logincookieduration);
        setcookie("password", $_POST['password'], time() + $logincookieduration);
        setcookie("logincookie", $logincookieduration, time() + $logincookieduration);
    }
    ?>

</br>
<h4 class="text-center"><?php echo $msg; ?></h4>
<div class="container form-signin login">



</div>

<div class="form-signin">

    <form role="form" action="" method="post">
        <h5 class="text-center">Login</h5>
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_POST["username"])) echo $_POST["username"];?>" required autofocus></br>
        <input type="password" class="form-control" name="password" placeholder="Passwort" required><br>
        <input type="hidden" name="safeit" value="0" />
        <input type="checkbox" name="safeit" value="1">
        <label for="safeit">Eingeloggt bleiben!</label>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Einloggen</button>
    </form>

</div>