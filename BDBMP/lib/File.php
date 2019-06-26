<?php
class File {
    public static function build_path($path_array) { 
        $ROOT_FOLDER = 'D:\wamp\www\BDBMP';
        return $ROOT_FOLDER. '/' . join('/', $path_array);
    }
}
?>