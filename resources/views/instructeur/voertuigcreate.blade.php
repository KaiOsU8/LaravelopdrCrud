<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Voertuig</title>
</head>
<body>
    <h1>Create Voertuig</h1>
    <form method="post" action="">
    <label for="instructeur-select">Instructeur:</label>
<select name="instructeur" id="instructeur-select">
  <option value="">select:></option>
  <option value="">Bert	van	Sali</option>
  <option value="">Li		Zhan</option>
  <option value="">Yoeri	van	Veen</option>
  <option value="">Leroy		Boerhaven</option>
  <option value=""> Mohammed	El	Yassidi	</option>
</select> <br><br>

<label for="typeVoertuig-select">TypeVoertuig:</label>
<select name="typeVoertuig" id="typeVoertuig-select">
  <option value="">select:</option>
  <option value="">Personenauto</option>
  <option value="">Vrachtwagen</option>
  <option value="">Bus</option>
  <option value="">Bromfiets</option>
</select> <br><br>

<label for="type-input">Type:</label>
<input type="text" id="type-input" name="type" value=""> <br><br>

<label for="bouwjaar-date">Bouwjaar:</label>
<input type="date" id="bouwjaar-date" name="bouwjaar" value=""> <br><br>

<label for="brandstof-radio">Brandstof:</label>
    <input type="radio" id="Diesel" name="brandstof" value="Diesel" >
    <label for="brandstof-radio">Diesel</label>
    <input type="radio" id="Benzine" name="brandstof" value="Benzine" >
    <label for="brandstof-radio">Benzine</label>
    <input type="radio" id="Elektrisch" name="brandstof" value="Elektrisch" >
    <label for="brandstof-radio">Elektrisch</label> <br><br>

<label for="kenteken-input">Kenteken:</label>
<input type="text" id="kenteken-input" name="kenteken" value=""> <br><br>

<button type="submit" class="button">Create Voertuig</button>
    </form>
</body>
</html>