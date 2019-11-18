<?php

namespace App\Core;

use App\Utilities\FlashMessage;

class UploadedFile
{

    private $file;
    private $path_in_storage;
    const DEFAULT_SUBFOLDER_FORMAT = 'Ym';
    const error = array(
      1 =>'upper than max size',
    );

    public function __construct($fileName, $sub_folder = null)
    {
        $this->file = $_FILES[$fileName];
        if($this->file['error']!=0){
            throw new \Exception(self::error[$this->file['error']]);
        }


        if ($sub_folder == null){
            $sub_folder = date(self::DEFAULT_SUBFOLDER_FORMAT);
        }

        $sub_folder_path = BASE_STORAGE_PATH . $sub_folder;


        if (!file_exists($sub_folder_path)) {
            mkdir($sub_folder_path);
        }

        $this->path_in_storage = $sub_folder . DIRECTORY_SEPARATOR . $this->new_full_file_name();
    }

    private function new_full_file_name(){
        return  $this->generate_new_file_name() . $this->extension();
    }

    private function generate_new_file_name()
    {
        return $this->generate_random_str() . $this->sub_original_name();
    }


    public function extension()
    {
        $name = explode('.', $this->file['name']);
        return '.' . end($name);
    }


    private function generate_random_str()
    {
        return bin2hex(random_bytes(2)) . '-' . date('y_m_d_H_i_s') . '-';
    }

    private function sub_original_name($length = 10)
    {
        $clean_name = str_replace(' ' , '' , $this->file['name']);
        $original_name = basename($clean_name, $this->extension());
        return substr($original_name, 0, $length);
    }


    public function mimeType()
    {
        return $this->file['type'];
    }


    public function size($type = 'b')
    {
        if ($type == 'b') {
            return $this->file['size'];
        } elseif ($type == 'KB') {
            return round(ceil($this->file['size'] / 1024), 1);
        } elseif ($type == 'MB') {
            return round($this->file['size'] / 1024 / 1024, 1);
        }

    }


    private function upload($path)
    {
        return move_uploaded_file($this->file['tmp_name'] , $path);
    }

    public function save()
    {
       $full_path = BASE_STORAGE_PATH . $this->path_in_storage;

       if($this->upload($full_path)){
           return storage_url($this->path_in_storage);
       }
       return false;

    }

    public function destroy()
    {
        $full_path = BASE_STORAGE_PATH . $this->path_in_storage;

        if(!file_exists($full_path)){
            return;
        }
        $old_name = basename($full_path);
        $new_name = 'DELETED-' . $old_name;
        $new_full_path = str_replace($old_name, $new_name , $full_path);
        rename($full_path,$new_full_path);
    }


    public function details()
    {
        if($this->file['error']!=0){
            echo $this->file['error'];
        }
        var_dump($this->file);
        die();
    }


}