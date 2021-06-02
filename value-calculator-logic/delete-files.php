<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $delete_file = '_file.pptx';
  $delete_dir = '_folder';

  ////

  if (is_dir($delete_dir)) {
    $iterator = new RecursiveDirectoryIterator($delete_dir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file) {
      if ($file->isDir()){
        rmdir($file->getRealPath());
      } else {
        unlink($file->getRealPath());
      }
    }
    rmdir($delete_dir);
  }

  if (file_exists($delete_file)) {
    unlink($delete_file);
  }
?>
