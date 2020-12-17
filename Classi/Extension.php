<?php

# la classe Extension verifica il percorso del file passante, aggiungendo la nuova estensione
class Extension
{
    private $filename, $new_extension;

    // ottengo le informazione del percorso file e cambio estensione
    public function replace_extension($filename, $new_extension)
    {
        $this->filename = $filename;
        $this->new_extension = $new_extension;

        $info = pathinfo($filename);
        return $info['filename'] . '.' . $new_extension;
    }
}

