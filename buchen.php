<br>
    <div class = form-buchen>
    <form action="" target="_blank" method="post" autocomplete="on">
        <label for="datum">Datum: </label>
        <input type="date" id="datum" name="datum" value="<?php if(isset($_POST["datum"])) echo $_POST["datum"];?>" required></input></br>
        <input type="radio" id="doppelzimmer" name="zimmer"  required autofocus></input>
        <label for="doppelzimmer">Doppelzimmer (85€/Tag)</label> 
        <input type="radio" id="einzelzimmer" name="zimmer" required></input>
        <label for="einzelzimmer">Einzelzimmer (70€/Tag)</label></br>
        <input type="checkbox" id="fruehstueck" name="fruehstueck"></input>
        <label for="fruehstueck">Frühstück (Aufpreis 10€/Tag/Zimmer)</label></br>
        <input type="checkbox" id="parkplatz" name="parkplatz"></input>
        <label for="fruehstueck">Parkplatz (Aufpreis 5€/Tag/Zimmer)</label></br>
        <input type="checkbox" id="haustiere" name="haustiere"></input>
        <label for="fruehstueck">Mitnahme von Haustieren (Aufpreis 5€/Tag/Zimmer)</label></br>

        <br/><br/>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="buchen">Buchen</button>
    </form>
</div>