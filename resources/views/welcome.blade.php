<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* ... (Your existing styles) ... */

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Additional styles */
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Choose a file:</label>
            <input type="file" name="file" id="file">
        </div>

        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname">
        </div>

        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div>
            <input type="radio" name="type" value="1" id="blockStorage">
            <label for="blockStorage">Block Storage</label><br>
            <input type="radio" name="type" value="0" id="digitalSpace">
            <label for="digitalSpace">Digital Space</label><br>
        </div>

        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
</body>
</html>
