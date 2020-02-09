<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ env('APP_NAME') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body>
    <div id="app">
        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
    <script type="text/javascript" src="js/app.js"></script>

    <script>
        axios.get('/oauth/clients')
        .then(response => {
            console.log(response.data);
        });
    </script>
    </body>
</html>
