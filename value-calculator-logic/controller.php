<?php
  /**
   * DEV
   */
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  /*
    get input values
  */

  // get form values from post and escape
  $companyName = htmlspecialchars($_POST['form-company-name']);
  $noOfEmployees = htmlspecialchars($_POST['form-number-of-employees']);
  $staffAvgHourlyWage = htmlspecialchars($_POST['form-staff-avg-hourly-wage']);
  $numberOfAnnualContractRenewals = htmlspecialchars($_POST['form-number-of-annual-contract-renewals']);
  $contractCreationTime = htmlspecialchars($_POST['form-contract-creation-time']);
  $bookBindingSealingTime = htmlspecialchars($_POST['form-book-binding-sealing-time']);
  $shippingTime = htmlspecialchars($_POST['form-shipping-time']);
  $dataEntry = htmlspecialchars($_POST['form-data-entry']);
  $contractFiling = htmlspecialchars($_POST['form-contract-filing']);
  $emailTo = htmlspecialchars($_POST['form-email']);
  // // test values
  // $companyName = 'abc123';
  // $noOfEmployees = '10';
  // $staffAvgHourlyWage = '1200';
  // $numberOfAnnualContractRenewals = '1';
  // $contractCreationTime = '30';
  // $bookBindingSealingTime = '20';
  // $shippingTime = '30';
  // $dataEntry = '30';
  // $contractFiling = '5';

  /*
    settings
  */

  $templateSourceFilename = 'template.pptx';
  $outputPptFilename = $companyName.'御中_WelcomeHR_コストパーフォーマンス'.date('Ymd').'.pptx';
  $redirectFrom = '/template-value-calculator-top';
  $redirectTo = '/template-value-calculator-thanks.php';

  $inputZipFilename = 'template.zip';
  $extractFolderName = 'template';
  $outputZipFilename = 'output.zip';


  /*
    calculate times and costs
  */

  // calculate times and costs
  $sumOfTimes = $contractCreationTime + $bookBindingSealingTime + $shippingTime + $dataEntry + $contractFiling;
  $timeBefore = $noOfEmployees * $sumOfTimes * $numberOfAnnualContractRenewals;
  $timeBeforeHours = round($timeBefore / 60);
  $timeAfter = $noOfEmployees * 3 * $numberOfAnnualContractRenewals;
  $timeAfterHours = round($timeAfter / 60);
  $costBefore = $timeBeforeHours * $staffAvgHourlyWage * $numberOfAnnualContractRenewals;
  $systemCost = $noOfEmployees * 150 * $numberOfAnnualContractRenewals;
  $laborCost = $timeAfterHours * 2000 * $numberOfAnnualContractRenewals;
  $totalCost = $systemCost + $laborCost;
  $savingsRatio = floor($costBefore / $totalCost);


  /*
    create new ppt file
  */

  // create copy of template and change extension
  copy('./'.$templateSourceFilename, './'.$inputZipFilename);

  // unzip
  $zip = new ZipArchive;
  $res = $zip->open('./'.$inputZipFilename);
  $zip->extractTo('./'.$extractFolderName);
  $zip->close();


  // make edits to slides
  $doc = new DOMDocument();


  // slide 1
  $doc->load("./template/ppt/slides/slide1.xml");
  $slide1 = $doc->documentElement->getElementsByTagName('t');
  $slide1->item(0)->nodeValue = $companyName;
  $doc->save("./template/ppt/slides/slide1.xml");

  // slide 10
  $doc->load("./template/ppt/slides/slide10.xml");
  $slide10 = $doc->documentElement->getElementsByTagName('t');
  $slide10->item(0)->nodeValue = '導入効果イメージ例 / '.$companyName.'社様 (契約更新時)';
  $doc->save("./template/ppt/slides/slide10.xml");

  // slide 11
  $doc->load("./template/ppt/slides/slide11.xml");
  $slide11 = $doc->documentElement->getElementsByTagName('t');
  $slide11->item(8)->nodeValue = '■契約更新対象者数 : '.$noOfEmployees.'名';
  $slide11->item(9)->nodeValue = '■店長の時給 : '.number_format($staffAvgHourlyWage).'円';
  $slide11->item(10)->nodeValue = '■契約更新の回数 : 年'.$numberOfAnnualContractRenewals.'回';
  $slide11->item(11)->nodeValue = $noOfEmployees.'人';
  $slide11->item(12)->nodeValue = $sumOfTimes.'分';
  $slide11->item(18)->nodeValue = $numberOfAnnualContractRenewals.'回';
  $slide11->item(13)->nodeValue = number_format($timeBefore).'分';
  $slide11->item(17)->nodeValue = $timeBeforeHours.'時間';
  $slide11->item(20)->nodeValue = $noOfEmployees.'人';
  $slide11->item(27)->nodeValue = $numberOfAnnualContractRenewals.'回';
  $slide11->item(22)->nodeValue = number_format($timeAfter).'分';
  $slide11->item(26)->nodeValue = $timeAfterHours.'時間';
  $doc->save("./template/ppt/slides/slide11.xml");

  // slide 12
  $doc->load("./template/ppt/slides/slide12.xml");
  $slide12 = $doc->documentElement->getElementsByTagName('t');
  $slide12->item(8)->nodeValue = '■契約更新対象者数 : '.$noOfEmployees.'名';
  $slide12->item(9)->nodeValue = '■店長の時給 : '.number_format($staffAvgHourlyWage).'円';
  $slide12->item(10)->nodeValue = '■契約更新の回数 : 年'.$numberOfAnnualContractRenewals.'回';
  $slide12->item(11)->nodeValue = $timeBeforeHours.'時間';
  $slide12->item(12)->nodeValue = $staffAvgHourlyWage.'円';
  $slide12->item(16)->nodeValue = $numberOfAnnualContractRenewals.'回';
  $slide12->item(13)->nodeValue = number_format($costBefore).'円';
  $slide12->item(29)->nodeValue = $noOfEmployees.'人';
  $slide12->item(25)->nodeValue = $numberOfAnnualContractRenewals.'回';
  $slide12->item(31)->nodeValue = number_format($systemCost).'円';
  $slide12->item(20)->nodeValue = $timeAfterHours.'時間';
  $slide12->item(34)->nodeValue = $numberOfAnnualContractRenewals.'回';
  $slide12->item(22)->nodeValue = number_format($laborCost).'円';
  $slide12->item(27)->nodeValue = number_format($totalCost).'円';
  $slide12->item(18)->nodeValue = '年間コスト1/'.$savingsRatio.'に';
  $doc->save("./template/ppt/slides/slide12.xml");

  // re-zip
  $rootPath = realpath('./'.$extractFolderName);
  $zip = new ZipArchive();
  $zip->open($outputZipFilename, ZipArchive::CREATE | ZipArchive::OVERWRITE);

  $files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
  );

  foreach ($files as $name => $file) {
    if (!$file->isDir()) {
      $filePath = $file->getRealPath();
      $relativePath = substr($filePath, strlen($rootPath) + 1);
      $zip->addFile($filePath, $relativePath);
    }
  }

  $zip->close();

  // rezip as output file
  rename('./'.$outputZipFilename, './'.$outputPptFilename);



  /*
    send email and redirect
  */
  include_once './email-content.php';
  $emailSubject = getEmailSubject();
  $emailMessage = getEmailMessage($companyName);
  $emailHeaders = getEmailHeaders();
  $emailAttachments = array('./'.$outputPptFilename);

  // send email
  // $emailSent = wp_mail($emailTo, $emailSubject, $emailMessage, $emailHeaders, $emailAttachments);
  $emailSent = true;

  if ($emailSent) {
    // redirect to thanks page
    $location = $redirectTo;
    $location .= '?companyname='.$companyName;
    $location .= '&timebefore='.$timeBefore;
    $location .= '&timeafter='.$timeAfter;
    $location .= '&filename='.urlencode($outputPptFilename);

    header('location: '.$location);
    die();
  } else {
    // error sending email; go back to top page
    header('location: '.$redirectFrom);
    die();
  }

?>
