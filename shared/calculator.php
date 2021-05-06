<?php
  $companyName = isset($_GET['cn']) ? $_GET['cn'] : '';
  $timeBefore = isset($_GET['tb']) ? $_GET['tb'] : 0;
  $timeAfter = isset($_GET['ta']) ? $_GET['ta'] : 0;
  $timeBeforeHrs = floor($timeBefore / 60);
  $timeBeforeMins = fmod($timeBefore, 60);
  $timeAfterHrs = floor($timeAfter / 60);
  $timeAfterMins = fmod($timeAfter, 60);
?>
<div class="value-calculator-shared-calculator layout">
  <div class="calculator__row calculator__current-time">
    <div class="calculator__label">
      <span class="calculator__label-logo">
        <img class="" src="/images/value-calculator-shared/icon-calculator.png" alt="">
      </span>
      <span class="calculator__label-text">現在 <span id="calculator-company-name"><?= $companyName ?></span>(株)様 が年間で契約処理にかかっている時間は･･･</span>
    </div>
    <div class="calculator__output">
      <span class="calculator__output-value" id="calculator-current-time-hours"><?= $timeBeforeHrs ?></span>
      <span class="calculator__output-label">時間</span>
      <span class="calculator__output-value" id="calculator-current-time-minutes"><?= $timeBeforeMins ?></span>
      <span class="calculator__output-label">分</span>
    </div>
  </div>
  <div class="calculator__row calculator__welcomehr-time">
    <div class="calculator__label">
      <span class="calculator__label-logo">
        <img class="" src="/images/value-calculator-shared/icon-bank.png" alt="">
      </span>
      <span class="calculator__label-text">WelcomeHRを使うとわずかこれだけの作業時間に！</span>
    </div>
    <div class="calculator__output">
      <span class="calculator__output-value" id="calculator-welcomehr-time-hours"><?= $timeAfterHrs ?></span>
      <span class="calculator__output-label">時間</span>
      <span class="calculator__output-value" id="calculator-welcomehr-time-minutes"><?= $timeAfterMins ?></span>
      <span class="calculator__output-label">分</span>
    </div>
  </div>
  <p class="hide-pc txt-center txt-18 txt-green">「 時間短縮 ＝ 経費削減 」を実現！</p>
</div>
