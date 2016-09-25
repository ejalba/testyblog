<!DOCTYPE html>
<html>
    <head>
        <title>Super-Duper Blog v5.02b</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Super-Duper Blog v5.02b</div>
            </div>
            <hr>
            <a href="http://localhost/blog2/public/">Home Page</a> |
            <a href="{{ action('PostController@index') }}">Blog Posts</a>
            </div>
    </body>
</html>
