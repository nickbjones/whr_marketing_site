<?php

  // escape all inputs

  $email = $POST['form-email'];

  // step 1
  $companyName = $POST['form-company-name'];
  $noOfEmployees = $POST['form-number-of-employees'];
  $staffAvgHourlyWage = $POST['form-staff-avg-hourly-wage'];
  $numberOfAnnualContractRenewals = $POST['form-number-of-annual-contract-renewals'];
  
  // step 2
  $contractCreationTime = $POST['form-contract-creation-time'];
  $bookBindingSealingTime = $POST['form-book-binding-sealing-time'];
  $shippingTime = $POST['form-shipping-time'];
  
  // step 3
  $dataEntry = $POST['form-data-entry'];
  $contractFiling = $POST['form-contract-filing'];

  // calculations
  $sumOfTimes = $contractCreationTime + $bookBindingSealingTime + $shippingTime + $dataEntry + $contractFiling;
  $timeNow = $noOfEmployees * $sumOfTimes * $numberOfAnnualContractRenewals;
  $timeWelcomeHr = $noOfEmployees * 3 * $numberOfAnnualContractRenewals;


  echo 'email: ' . $email . '<br>';
  echo 'companyName: ' . $companyName . '<br>';
  echo 'noOfEmployees: ' . $noOfEmployees . '<br>';
  echo 'staffAvgHourlyWage: ' . $staffAvgHourlyWage . '<br>';
  echo 'numberOfAnnualContractRenewals: ' . $numberOfAnnualContractRenewals . '<br>';
  echo 'contractCreationTime: ' . $contractCreationTime . '<br>';
  echo 'bookBindingSealingTime: ' . $bookBindingSealingTime . '<br>';
  echo 'shippingTime: ' . $shippingTime . '<br>';
  echo 'dataEntry: ' . $dataEntry . '<br>';
  echo 'contractFiling: ' . $contractFiling . '<br>';
  echo 'sumOfTimes: ' . $sumOfTimes . '<br>';
  echo 'timeNow: ' . $timeNow . '<br>';
  echo 'timeWelcomeHr: ' . $timeWelcomeHr . '<br>';


  // pp pg 11
  $field1 = $noOfEmployees;
  $field2 = $staffAvgHourlyWage;
  $field3 = $numberOfAnnualContractRenewals;
  // --
  $field4 = $noOfEmployees;
  $field5 = $sumOfTimes;
  $field6 = $numberOfAnnualContractRenewals;
  $field7 = $timeNow;
  // --
  $field8 = $noOfEmployees;
  // fix (3)
  $field9 = $numberOfAnnualContractRenewals;
  $field10 = $timeWelcomeHr;


  // pp pg 12
  $field1 = $noOfEmployees;
  $field2 = $staffAvgHourlyWage;
  $field3 = $numberOfAnnualContractRenewals;
  // --
  $field4 = $timeNow;
  $field5 = $staffAvgHourlyWage;
  $field6 = $numberOfAnnualContractRenewals;
  $field7 = $timeNow * $staffAvgHourlyWage * $numberOfAnnualContractRenewals;
  // --
  $field8 = $noOfEmployees;
  // fix (150)
  $field9 = $numberOfAnnualContractRenewals;
  $field10 = $noOfEmployees * 150 * $numberOfAnnualContractRenewals;
  // --
  $field11 = $timeWelcomeHr;
  // fix (2000)
  $field12 = $numberOfAnnualContractRenewals;
  $field13 = $timeWelcomeHr * 2000 * $numberOfAnnualContractRenewals;
  // --
  $field14 = $noOfEmployees * 150 * $numberOfAnnualContractRenewals + $timeWelcomeHr * 2000 * $numberOfAnnualContractRenewals;



  $location = './thanks.php';
  $location .= '?cn='.$companyName;
  $location .= '&tb='.$timeNow;
  $location .= '&ta='.$timeWelcomeHr;
  $location .= '&email='.$email;

  // header('location: '.$location);
  die();

?>
