<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Short URL</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        

        <style>
            body {
                background:#1a202c;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
            }

            .mtb {
                margin-top: 200px;
            }

            .bg-blue {
                background: #2d3748;
                border-radius: 10px;
            }

            .text-blue {
                color: #eee;
            }

            .form-control {
                background: transparent;
                border: transparent;
                color: #fff;
            }

            .form-control:focus {
                background: transparent;
                outline: none;
                border: none;
                box-shadow: none;
                color: #fff;
            }

            .btn-transparent {
                background: transparent;
            }
        </style>
    </head>
    <body >
        <div class="container mx-auto mtb">
            <img src="/img/mini-logo.png"> <br>
            <p class="text-blue ml-3">Make your link shorter.</p>
        
            <div class="bg-blue p-4">
               <form action="" method="post">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" name="" placeholder="Paste your link here ..." class="form-control" id="">
                        </div>
                        <div class="col-2 text-right">
                            <button type="submit" class="btn btn-transparent"><i class="fa text-white fa-1x fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </body>
</html>
