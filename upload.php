<?php

// l'action del form reindirizza qui

require_once 'Classi/Extension.php';
require_once 'Classi/Upload.php';

// istanza della classe 
$upload  = new Upload;
// con l'array globale prendo il name del file prelevato dal form
$upload->file = $_FILES['my_file']['name']; 
// prelevo le informazione sul percorso del file
$upload->path = pathinfo($upload->file);

$file = $upload->file;
$path = $upload->path;

// nuova estensione
$new_extension = 'jp2';
// percorso file, nome ed estensione
$path_filename = "img/subImg/" . $path['filename'] .".". $path['extension'];

// prendo il percorso e cambio estensione
$upload->replace_extension($path_filename, $new_extension);
$path['extension'] = $new_extension;

// upload del file nella cartella con la modifica estensione
$upload->uploadFile(
    "img/subImg/", //cartella
    $file, // file name del form
    $path, // info sul file
    $path['filename'],
    $new_extension,
    $_FILES['my_file']['tmp_name']
);

