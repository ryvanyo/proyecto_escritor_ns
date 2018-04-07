<?php
namespace php;

class Writer{
  protected $file_path;

  public function __construct($file_path){
    $this->file_path = $file_path;
  }

  public function write(array $data){
    if (!is_file($this->file_path)) {
      $output = "<?php\n";
    } else {
      $output = "";
    }
    $output .= '$arr[] = '.var_export($data, true).";\n";
    
    $written = file_put_contents($this->file_path, $output, FILE_APPEND);
    return ($written===false) ? false : $output;
  }
}