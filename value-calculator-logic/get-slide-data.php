<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $templateSourceFilename = 'template.pptx';
  $inputZipFilename = 'template.zip';
  $extractFolderName = 'template';


  // // create copy of template and change extension
  // copy('./'.$templateSourceFilename, './'.$inputZipFilename);

  // // unzip
  // $zip = new ZipArchive;
  // $res = $zip->open('./'.$inputZipFilename);
  // $zip->extractTo('./'.$extractFolderName);
  // $zip->close();


  // read from extracted file
  $slide = 12;
  $doc = new DOMDocument();
  $doc->load('./template/ppt/slides/slide'.$slide.'.xml');
  $slide = $doc->documentElement->getElementsByTagName('t');

  // var_dump($slide->item(18));
  // echo '<br><br>';
  foreach ($slide as $key => $item) {
    echo $key.'<br>';
    var_dump($item);
    echo '<br><br>';
  }

  // $slide1->item(0)->nodeValue = $companyName;
  // $slide10->item(0)->nodeValue = '導入効果イメージ例 / '.$companyName.'社様 (契約更新時)';
  // $slide12->item(18)->nodeValue = '年間コスト1/'.$savingsRatio.'に'; // 1/8

  die();
?>
