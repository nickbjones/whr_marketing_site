<?php
  /**
   * DEV
   */
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $imagePath = './images/value-calculator-top';
  
  include('./_head.php');

  function inputBlock($name, $label, $smallLabel, $placeholder, $afterLabel, $blockWidth, $inputWidth, $classList, $type) {
    $smallLabelHtml = $smallLabel == '' ? '' : '<span class="input-block__label-small txt-nobreak">'.$smallLabel.'</span>';
    $afterLabelHtml = $afterLabel == '' ? '' : '<span class="input-block__label-after">'.$afterLabel.'</span>';
    return '
      <div class="input-block input-block--width-'.$blockWidth.' '.$classList.'">
        <label class="input-block__label" for="'.$name.'">
          <span class="txt-nobreak">'.$label.'</span>
          '.$smallLabelHtml.'
        </label>
        <span class="input-block__input-wrapper input-block__input-wrapper--width-'.$inputWidth.'">
          <input class="input-block__input" id="'.$name.'" name="'.$name.'" type="'.$type.'" data-onchange placeholder="'.$placeholder.'">
          '.$afterLabelHtml.'
        </span>
      </div>
    ';
  }

  function dropdownBlock($name, $label, $smallLabel, $placeholder, $afterLabel, $blockWidth, $inputWidth, $classList, $options) {
    $smallLabelHtml = $smallLabel == '' ? '' : '<span class="input-block__label-small txt-nobreak">'.$smallLabel.'</span>';
    $afterLabelHtml = $afterLabel == '' ? '' : '<span class="input-block__label-after">'.$afterLabel.'</span>';
    $optionsHtml = '<option class="input-block__select-placeholder" value="" disabled selected>'.$placeholder.'</option>';
    foreach ($options as $option) {
      $optionsHtml .= '<option value="'.$option.'">'.$option.'</option>';
    }
    return '
      <div class="input-block input-block--width-'.$blockWidth.' '.$classList.'">
        <label class="input-block__label" for="'.$name.'">
          <span class="txt-nobreak">'.$label.'</span>
          '.$smallLabelHtml.'
        </label>
        <span class="input-block__input-wrapper input-block__input-wrapper--width-'.$inputWidth.'">
          <select class="input-block__input input-block__select" id="'.$name.'" name="'.$name.'" data-onchange>
            '.$optionsHtml.'
          </select>
          '.$afterLabelHtml.'
        </span>
      </div>
    ';
  }
?>
<link rel="stylesheet" href="./css/value-calculator-top.css" />

<div class="value-calculator-top-page">
  <div class="top-banner">
    <div class="top-banner__inner max-layout">
      <div class="hide-sp">
        <img class="top-banner__text-1" src="<?= $imagePath ?>/top-banner-text-1-pc.png">
        <img class="top-banner__title" src="<?= $imagePath ?>/top-banner-group-pc.png">
        <img class="top-banner__text-2" src="<?= $imagePath ?>/top-banner-text-2-pc.png">
      </div>
      <div class="hide-pc">
        <img class="top-banner__text-1" src="<?= $imagePath ?>/top-banner-text-1-sp.png">
        <img class="top-banner__title" src="<?= $imagePath ?>/top-banner-group-sp.png">
        <img class="top-banner__text-2" src="<?= $imagePath ?>/top-banner-text-2-sp.png">
      </div>
    </div>
  </div>
  <div class="start-simulation-banner">
    <div class="blue-background">
      <p class="txt-white txt-bold txt-sp-17 txt-pc-22">\　シュミレーションSTART！　/</p>
      <img class="blue-triangle hide-pc" src="<?= $imagePath ?>/blue-triangle-sp.png">
      <img class="blue-triangle hide-sp" src="<?= $imagePath ?>/blue-triangle-pc.png">
    </div>
  </div>
  <div class="main-body">
    <div class="layout main-body-layout">
      <p class="hayamaru-kun-footnote hide-sp txt-12 txt-right">※ WelcomeHR 公式キャラクター<br/>はやまるくん</p>
      <div class="how-long-does-it-take txt-center">
        <p class="txt-bold txt-pc-22 txt-sp-17">
          <span class="txt-nobreak">現在、<span class="txt-green txt-pc-26 txt-sp-21">契約書の作成</span>に</span>
          <span class="txt-nobreak">どのくらいの時間がかかっていますか？</span>
        </p>
        <p class="enter-all-items txt-red txt-14 txt-pc-right">(※すべての項目をご入力ください)</p>
      </div>
      <div class="step step1">
        <div class="step-bubble">
          <img class="step-bubble__icon" src="<?= $imagePath ?>/step-1of3.png">
          <div class="step-bubble__left">
            <div class="step-bubble__title">
              <img class="step-bubble__title-icon" src="<?= $imagePath ?>/icon-office.png">
              <div class="step-bubble__title-text">
                <span class="hide-sp">まずは会社情報をご入力ください</span>
                <span class="hide-pc">会社情報をご入力ください</span>
              </div>
            </div>
            <div class="input-wrapper">
              <?= inputBlock('company-name', '貴社名', '', 'ワークスタイルテック(株)', '', 'full', 'full', '', 'text') ?>
              <?= inputBlock('number-of-employees', '従業員数', '', '10', '名', 'half', 'half', '', 'number') ?>
              <?= inputBlock('staff-avg-hourly-wage', '人事スタッフの平均時給', '', '1200', '円', 'half', 'half', '', 'number') ?>
              <?= dropdownBlock('number-of-annual-contract-renewals', '年間の契約更新数', '', '※選択', '回', 'full', 'half', '', range(0, 5)) ?>
            </div>
          </div>
          <div class="step-bubble__right">
            <img src="<?= $imagePath ?>/salaryman.png">
          </div>
        </div>
      </div>
      <div class="txt-center">
        <img src="<?= $imagePath ?>/arrow-green.png">
      </div>
      <div class="step step2">
        <div class="step-bubble">
          <img class="step-bubble__icon" src="<?= $imagePath ?>/step-2of3.png">
          <div class="step-bubble__left">
            <div class="step-bubble__title">
              <img class="step-bubble__title-icon" src="<?= $imagePath ?>/icon-document.png">
              <div class="step-bubble__title-text">
                <span class="">契約書の作成・発送にかかる時間は？</span>
                <p class="step-bubble__title-small txt-nobreak">(1従業員当たり)</p>
              </div>
            </div>
            <div class="input-wrapper">
              <?= inputBlock('contract-creation-time', '契約内容の作成時間', '', '30', '分', 'full', 'half', 'pc-half', 'number') ?>
              <?= inputBlock('book-binding-sealing-time', '製本・封書の時間', '(印刷・押印・製本・封書 etc)', '20', '分', 'full', 'half', 'pc-half', 'number') ?>
              <?= inputBlock('shipping-time', '発送に要する時間', '(外出する必要があれば移動時間も含む)', '30', '分', 'full', 'half', '', 'number') ?>
            </div>
          </div>
          <div class="step-bubble__right">
            <img src="<?= $imagePath ?>/salaryman.png">
          </div>
        </div>
        <div class="after-contract">
          <p class="txt-green txt-center">[  契約書受け取り後に従業員が行う作業  ]</p>
          <div class="after-contract__steps">
            <div class="after-contract__step">
              <img class="after-contract__step-image" src="<?= $imagePath ?>/salaryman.png">
              <p class="after-contract__step-text">従業員は契約書を郵送にて受け取り</p>
              <img class="blue-arrow hide-sp" src="<?= $imagePath ?>/arrow-blue-right.png">
              <img class="blue-arrow hide-pc" src="<?= $imagePath ?>/arrow-blue-down.png">
            </div>
            <div class="after-contract__step">
              <img class="after-contract__step-image" src="<?= $imagePath ?>/salaryman.png">
              <p class="after-contract__step-text">受け取った契約書に押印</p>
              <img class="blue-arrow hide-sp" src="<?= $imagePath ?>/arrow-blue-right.png">
              <img class="blue-arrow hide-pc" src="<?= $imagePath ?>/arrow-blue-down.png">
            </div>
            <div class="after-contract__step">
              <img class="after-contract__step-image" src="<?= $imagePath ?>/salaryman.png">
              <p class="after-contract__step-text">契約書を郵送で会社に返信</p>
            </div>
          </div>
        </div>
      </div>
      <div class="txt-center">
        <img src="<?= $imagePath ?>/arrow-green.png">
      </div>
      <div class="step step3">
        <div class="step-bubble">
          <img class="step-bubble__icon" src="<?= $imagePath ?>/step-3of3.png">
          <div class="step-bubble__left">
            <div class="step-bubble__title">
              <img class="step-bubble__title-icon" src="<?= $imagePath ?>/icon-laptop.png">
              <div class="step-bubble__title-text">
                <span class="">従業員からの押印契約書類受け取り後の処理にかかる時間は？</span>
                <p class="step-bubble__title-small txt-nobreak">(1従業員当たり)</p>
              </div>
            </div>
            <div class="input-wrapper">
              <?= inputBlock('data-entry', 'データ入力', '', '30', '分', 'half', 'half', '', 'number') ?>
              <?= inputBlock('contract-filing', '契約書のファイリング', '', '5', '分', 'half', 'half', '', 'number') ?>
            </div>
          </div>
          <div class="step-bubble__right">
            <img src="<?= $imagePath ?>/salaryman.png">
          </div>
        </div>
      </div>
      <div class="txt-center">
        <img class="hide-sp" src="<?= $imagePath ?>/arrow-green.png">
        <img class="hide-pc" src="<?= $imagePath ?>/three-dots.png">
      </div>
      <div class="success">
        <img class="hide-sp" src="<?= $imagePath ?>/success-left.png">
        <div class="success__text">
          <p class="">ご入力ありがとうございます</p>
          <p class="">計算結果が算出されました！</p>
        </div>
        <img class="hide-sp" src="<?= $imagePath ?>/success-right.png">
      </div>
    </div>
  </div>
  <div class="blue-background hide-pc">
    <p class="txt-white txt-bold txt-sp-17 txt-pc-22">\　計算結果　/</p>
    <img class="blue-triangle" src="<?= $imagePath ?>/blue-triangle-sp.png">
  </div>
  <?php include('./value-calculator-shared-calculator.php'); ?>
  <div class="bottom-banner">
    <div class="bottom-banner__inner max-layout">
      <img src="<?= $imagePath ?>/more-benefits.png">
      <p class="txt-sp-23 txt-pc-26 txt-bold small-underline">\  さらにこんな<span class="txt-yellow txt-sp-23 txt-pc-32">特典</span>が！ /</p>
      <p class="txt-sp-17 txt-pc-20 txt-sp-left txt-pc-bold">今回の算出結果について<span class="txt-yellow txt-sp-17 txt-pc-26">より詳しく解説</span>した資料を<span class="txt-yellow txt-sp-17 txt-pc-26">無料</span>でお配りしています！</p>
      <p class="txt-sp-17 txt-pc-20 txt-sp-left txt-pc-bold">メールで<span class="txt-yellow txt-sp-17 txt-pc-26">経費削減のヒント</span>を手に入れよう！</p>
      <form class="form-wrapper" id="form" action="./value-calculator-logic/controller.php" method="post">
        <input type="hidden" id="form-company-name" name="form-company-name">
        <input type="hidden" id="form-number-of-employees" name="form-number-of-employees">
        <input type="hidden" id="form-staff-avg-hourly-wage" name="form-staff-avg-hourly-wage">
        <input type="hidden" id="form-number-of-annual-contract-renewals" name="form-number-of-annual-contract-renewals">
        <input type="hidden" id="form-contract-creation-time" name="form-contract-creation-time">
        <input type="hidden" id="form-book-binding-sealing-time" name="form-book-binding-sealing-time">
        <input type="hidden" id="form-shipping-time" name="form-shipping-time">
        <input type="hidden" id="form-data-entry" name="form-data-entry">
        <input type="hidden" id="form-contract-filing" name="form-contract-filing">
        <input class="email-input" type="email" id="email" name="form-email" placeholder="ここにメールアドレスを入力"><br/>
        <input class="download-button txt-pc-18 txt-pc-22 txt-bold" type="submit" value="資料を受け取る"><br/>
        <p class="txt-12 txt-white txt-left">「資料を受け取る」ボタンをクリックすると、ご入力いただいたメールアドレス宛に資料が送られます。メールが届かない場合は、迷惑メールフォルダ等に振り分けられている可能性もございますので、ご確認をお願いいたします。</p>
      </form>
      <img class="hayamaru-kun hide-sp" src="<?= $imagePath ?>/bottom-banner-hayamaru-kun.png">
    </div>
  </div>
</div>
<?php // get_footer(); ?>
<?php include('./_foot.php'); ?>
<script src="<?php //echo get_template_directory_uri(); ?>/js/value-calculator.js"></script>
<!-- <script src="./js/value-calculator.js"></script> -->
