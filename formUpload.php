<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN bootstrap v4.5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"><!-- my css -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h1 class="display-1 text-white">Inserisci un'immagine</h1>
                <!-- form caricamento immagine --> 
                <form name="form" method="post" action="upload.php" enctype="multipart/form-data">
                    <small id="emailHelp" class="form-text text-muted">L'unico formato file supportato è il jpg</small>
                    <div class="form-group">
                        <input onchange="readURL(this);" name="my_file" id="img" type="file" class="form-control-file" id="exampleFormControlFile1">
                        <img style="width: 100px; height: 100px;" id="blah" src="#" alt="la tua immagine" />
                    </div>
                    <!-- bottone di default disabilitato finchè i controlli js non vengono superati --> 
                    <button id="buttonSubmit" type="submit" name="submit" value="Upload" class="btn btn-primary" disabled>Invia</button>
                </form>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="js/script.js"></script> <!-- myscript -->
</body>
</html>
