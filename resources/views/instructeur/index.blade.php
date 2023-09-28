<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructeurs</title>
</head>
<style>
    th, td {
        border: 1px solid black;
    }
</style>
<body>
    <h1>Instructeurs</h1>
    <a href="{{ route('instructeur.create') }}">Create</a>

    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Mobiel</th>
                <th>DatumInDienst</th>
                <th>AantalSterren</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructeur as $instructeur)
            <tr>
                <td>{{$instructeur->Voornaam}}</td>
                <td>{{$instructeur->Tussenvoegsel}}</td>
                <td>{{$instructeur->Achternaam}}</td>
                <td>{{$instructeur->Mobiel}}</td>
                <td>{{$instructeur->DatumInDienst}}</td>
                <td>{{$instructeur->AantalSterren}}</td>
                <td>
                    <a href="{{ route('instructeur.edit', $instructeur->id) }}">U</a>
                </td>
                <td>
                    <form action="{{ route('instructeur.delete', $instructeur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">X</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

</body>
</html>