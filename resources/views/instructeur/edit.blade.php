<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit instructeur</title>
</head>
<body>
    <h1>Edit instructeur</h1>
    <a href="{{route('instructeur.index')}}">Back to index</a><br><br><br>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('instructeur.update', ['instructeur' => $instructeur])}}">
        @csrf
        @method('put')

<label for="Voornaam-input">Voornaam:</label><br>
<input type="text" id="Voornaam-input" name="Voornaam" placeholder="verplicht" value="{{$instructeur->Voornaam}}"> <br>

<label for="Tussenvoegsel-input">Tussenvoegsel:</label><br>
<input type="text" id="Tussenvoegsel-input" name="Tussenvoegsel" value="{{$instructeur->Tussenvoegsel}}"> <br>

<label for="Achternaam-input">Achternaam:</label><br>
<input type="text" id="Achternaam-input" name="Achternaam" placeholder="verplicht" value="{{$instructeur->Achternaam}}"> <br><br>

<label for="Mobiel-input">Mobiel:</label><br>
<input type="tel" id="Mobiel-input" name="Mobiel" placeholder="verplicht" value="{{$instructeur->Mobiel}}"> <br><br>


<label for="DatumInDienst-date">DatumInDienst:  (verplicht veld)</label><br>
<input type="date" id="DatumInDienst-date" name="DatumInDienst" value="{{$instructeur->DatumInDienst}}"> <br><br>

<label for="AantalSterren-input">AantalSterren:</label><br>
<input type="text" id="AantalSterren-input" name="AantalSterren" placeholder="verplicht" value="{{$instructeur->AantalSterren}}"> <br><br>

<button type="submit" class="button">Submit Change</button>
    </form>
</body>
</html>