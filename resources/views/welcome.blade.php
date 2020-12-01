<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL Shortner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style>
        </style>

        <style>
            body {
            background: #f1f1f1;
            font-size: 1.8rem;
            font-family: 'Hind', sans-serif;
            padding: 3em;
            }

            .input-field:last-of-type {
            margin-bottom: 1rem;
            }

            p {
                font-size: .5em;
                color: #ff9393; 
            }

            #app {
                width: 90%;
                margin: auto;
                margin-top: 10%;
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                display: inline-block;
            }

            #app .m-b-md {
                width: 100%;
                background-color: #26a69a;
                color: white;
                padding: .7em;
            }

            #app .form-group, #app .alert {
                width: 90%;
                margin: auto;
            }

            .btn {
                margin: 0 auto;
                display: flex;
            }

            #final {
                width: 90%;
                margin: auto;
                padding: 1em 0em 1em 0em;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="title m-b-md">
            Welcome to our URL Shortner
            </div>
            <div class="form-group">
            <label for="url">URL*</label>
            <input type="text" class="form-control" id="url" required placeholder="https://www.google.com" name="url" v-model="newUrl.url">
            </div>

            <button class="btn btn-primary" @click.prevent="createUrl()">
            Shorten My URL!
            </button>

            <h5 id="final"></h5>
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
