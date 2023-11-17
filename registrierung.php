<br>
    <div class = form-signin>
    <p>Anrede:</p>
    <form action="" target="_blank" method="post" autocomplete="on">
        <input type="radio" id="herr" name="anrede" value="Herr" required>
        <label for="herr">Herr</label><br/>
        <input type="radio" id="frau" name="anrede" value="Frau" required>
        <label for="herr">Frau</label><br/>
        <input type="radio" id="keine" name="anrede" value="keine" required>
        <label for="keine">keine</label><br/>
    <br>
        <label for="vorname">Vorname:</label><br/>
        <input type="text" id="vorname" name="vorname" value="<?php if(isset($_POST["vorname"])) echo $_POST["vorname"];?>" required><br/>
        <label for="nachname">Nachname:</label><br/>
        <input type="text" id="nachname" name="nachname" value="<?php if(isset($_POST["nachname"])) echo $_POST["nachname"];?>" required><br/>
        <label for="email">Email Adresse:</label><br/>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"];?>" required><br/>
        <label for="username">Username:</label><br/>
        <input type="text" id="username" name="username" value="<?php if(isset($_POST["username"])) echo $_POST["username"];?>" required><br/>
        <label for="passwort">Passwort:</label><br/>
        <input type="password" id="passwort" name="passwort" required><br/>
        <label for="passwort">Passwort nochmal:</label><br/>
        <input type="password" id="passwortnochmal" name="passwortnochmal" required><br/><br/>
        
        <button class="btn btn-lg btn-success btn-block" type="submit" name="registrieren">Registrieren</button>
    </form>
</div>


    
