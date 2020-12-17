<?php
require_once 'Classi/Extension.php';
require_once 'Classi/Upload.php';

$directory = 'img'; #nome cartella

// restituisce il contenuto della directory sotto forma di struttura ad albero iterabile
$rdi = new RecursiveDirectoryIterator($directory);
// leggo tutti i file contenuti nella cartella
$rii = new RecursiveIteratorIterator($rdi);

// istanza della classe
$extension = new Extension;
$new_extension = 'jp2'; #nuova estensione 


// ciclo e leggo tutti i file con il loro info
foreach($rii as $file)
{
    
    // escludere le directory speciali . .. 
    if($file->isDir()){continue;}
    
    echo $file->getPathname() . '<br>';

    // controllo se l'immagine ha estensione jpg o jpeg
    if (exif_imagetype($file->getPathname()) == IMAGETYPE_JPEG) {

        # file name esistente
        echo $filePath =  $file->getPathname();

        // modifca estensione file 
        $fileUpload = $extension->replace_extension($file->getFilename(), $new_extension);

        #nuovo File name
        $newFileName =  $file->getPath() . '\\'. $fileUpload;

        // rinomina l'estensione file (sovrascrivi)
        rename($filePath, $newFileName);
    }
}

