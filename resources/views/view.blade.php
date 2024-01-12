<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        th, td {
            border: 1px solid #e0e0e0;
            text-align: left;
            padding: 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td>{{$person->firstname}}</td>
                <td>{{$person->lastname}}</td>
                <td>
                    @if($person->type == '0')
                        <img src="https://usphea1.sgp1.digitaloceanspaces.com/{{$person->picture}}" alt="Profile Picture">
                    @else
                        <a href="/viewtable/{{$person->id}}">Click me</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
