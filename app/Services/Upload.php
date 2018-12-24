<?php namespace App\Services;


class Upload
{

    public function resize($origem, $destino, $max_width, $max_height, $force = false)
    {
        list($orig_width, $orig_height) = getimagesize($origem);
        $width = $orig_width;
        $height = $orig_height;
        if ($force) {
            $width = $max_width;
            $height = $max_height;
        } else {
            if ($width > $height) {
                $height = $height * $max_width / $width;
                $width = $max_width;
            } else {
                $width = $width * $max_height / $height;
                $height = $max_height;
            }
        }
        $image_p = imagecreatetruecolor($width, $height);
        //$image = imagecreatefromjpeg($origem);
        //Trocar linha acima para upload jpg/png com fundo branco
        $image = imagecreatefromstring(file_get_contents($origem));
        $branco = imagecolorallocate($image_p, 255, 255, 255);
        imagefill($image_p, 0, 0, $branco);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0,
            $width, $height, $orig_width, $orig_height);
        imagejpeg($image_p, $destino, 100);
    }

}
