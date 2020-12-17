<?php

// la classe upload estende la classe padre

class Upload extends Extension
{
    public $file, $path;
    private $cartella, $filename, $ext,$temp_name,$path_filename_ext;

    public function replace_extension($path_complete, $new_extension)
    {
        parent::replace_extension($path_complete, $new_extension);
    }
        
    // funzione di upload file
    final public function uploadFile($cartella, $file, $path, $filename,$ext,$tmp)
    {
        // informazione sul file
        $this->cartella = $cartella;
        $this->file = $file;
        $this->path = $path;
        $this->filename = $filename;
        $this->ext =  $ext;

        $this->temp_name = $tmp;
        $this->path_filename_ext = $cartella . $filename . "." . $ext;

        $path_complete = $this->path_filename_ext;
        $new_extension = 'jp2';

        #controllo sull'unicità del file, eventuale messaggio di errore
        if (file_exists($this->path_filename_ext)) {
            echo "Non puoi caricare lo stesso file più volte";
        }else{
            // eseguo l'upload nella cartella.
            move_uploaded_file($tmp, $this->path_filename_ext);
            echo "Ottimo file caricato";
            // stampo l'immagine a video
            echo '<div><img style="width:300px" src='. $this->path_filename_ext .'></div>';
        }
    }
}


