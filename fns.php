<?php


function validate_file($filename)
{
    $get_ext = explode('.',$filename);
    $get_ext2 = array_reverse($get_ext);
    $file_extension = $get_ext2[0];
    $extension = strtolower($file_extension);

    if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png')
    {
        return 'valid';
    }
    else
    {
        return 'invalid';
    }
}



function get_extension($filename)
{
    $get_ext = explode('.',$filename);
    $get_ext2 = array_reverse($get_ext);
    $file_extension = $get_ext2[0];
    $extension = strtolower($file_extension);

    return $extension;

}



?>