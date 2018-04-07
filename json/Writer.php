<?php
namespace json;

class Writer{
  protected $file_path;

  public function __construct($file_path){
    $this->file_path = $file_path;
  }

  public function write(array $data){
    $output = json_encode($data)."\n";
    
    $written = file_put_contents($this->file_path, $output, FILE_APPEND);
    return ($written===false) ? false : $output;
  }
}