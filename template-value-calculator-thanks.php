<?php
  /**
   * DEV
   */
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $imagePath = './images/value-calculator-thanks';
  $downloadFileName = 'output.pptx';

  include('./_head.php');

  function getResults($imagePath, $downloadFileName) {
    return '
      <div class="get-results-top hide-sp">
        <img src="'.$imagePath.'/document-stamp.png">
        <p class="get-results-top__text">今回算出した時間短縮データの<br/>資料をこちらからも取得できます</p>
        <img src="'.$imagePath.'/hayamaru-kun.png">
      </div>
      <div class="get-results-bottom layout">
        <a class="button download-button" href="'.get_template_directory_uri().'/value-calculator-logic/'.$downloadFileName.'" download="'.$downloadFileName.'"><img class="button-icon" src="'.$imagePath.'/icon-download.png">ダウンロードする</a>
        <div class="consultation-button-wrapper hide-pc">
          <a class="button consultation-button" href="/ja/contact"><img class="button-icon" src="'.$imagePath.'/icon-people.png"><span class="txt-yellow">無料トライアル</span>のご相談</a>
          <p class="consultation-button__fineprint txt-11">「無料トライアル」や「お見積り」「不明点」等、ぜひお気軽にご相談ください。担当者が丁寧にご説明させていただきます。</p>
        </div>
        <a class="button recalculate-button" href="/ja/value-calculator"><img class="button-icon" src="'.$imagePath.'/icon-calculator.png">もう一度計算をする</a>
        <a class="button share-button" href="#"><img class="button-icon" src="'.$imagePath.'/icon-share.png">この結果を他の人にシェア</a>
        <div class="consultation-button-wrapper hide-sp">
          <a class="button consultation-button" href="/ja/contact"><img class="button-icon" src="'.$imagePath.'/icon-people.png"><span class="txt-yellow">無料トライアル</span>のご相談</a>
          <p class="consultation-button__fineprint txt-12">「無料トライアル」や「お見積り」「不明点」等、ぜひお気軽にご相談ください。担当者が丁寧にご説明させていただきます。</p>
        </div>
      </div>
    ';
  }

  function greenCircle($topText, $bottomText) {
    return '
      <div class="green-circle">
        <p class="green-circle__top-text txt-bolder">'.$topText.'</p>
        <p class="green-circle__bottom-text">'.$bottomText.'</p>
      </div>
    ';
  }
?>
<link rel="stylesheet" href="./css/value-calculator-thanks.css" />

<div class="value-calculator-thanks-page">
  <div class="main-body">
    <div class="success">
      <img class="hide-sp" src="<?= $imagePath ?>/success-pc-left.png">
      <div class="success__middle">
        <p>
          <span class="txt-nobreak">WelcomeHR の「時間削減電卓」</span>
          <span>を</span>
          <span class="txt-nobreak">ご利用いただき</span>
          <span class="txt-nobreak">ありがとうございます！</span>
        </p>
        <img class="mail-sent-image" src="<?= $imagePath ?>/mail-sent.png">
        <p>メールで資料が送付されました</p>
      </div>
      <img class="hide-sp" src="<?= $imagePath ?>/success-pc-right.png">
    </div>
    <div class="blue-banner hide-pc txt-20">
      <span class="blue-banner__text">\　計算結果　/</span>
      <img class="blue-banner__triangle" src="<?= $imagePath ?>/blue-triangle.png">
    </div>
    <?php include('./value-calculator-shared-calculator.php'); ?>
    <?= getResults($imagePath, $downloadFileName) ?>
  </div>
  <div class="green-banner green-banner-1">
    <div class="green-banner__inner">
      <p class="green-banner__border-bottom txt-sp-22 txt-pc-24"><span class="txt-yellow">WelcomeHR</span><span>の魅力 ♪</span></p>
      <p class="green-banner__text txt-sp-17 txt-pc-20"><span class="txt-nobreak">IT技術を利用することによって</span><span class="txt-nobreak hide-pc"><span class="txt-yellow">圧倒的</span>な<span class="txt-yellow">時短</span>の<span class="txt-yellow">実現</span></span><span class="txt-nobreak hide-sp txt-yellow txt-25">圧倒的な時短の実現</span><span class="txt-nobreak">はもちろんのこと</span></p>
      <p class="green-banner__text txt-sp-17 txt-pc-20"><span class="txt-nobreak">導入後もお客様の<span class="txt-yellow">問題解決</span>に真摯に向</span><span class="txt-nobreak">き合うことを大切にしています</span></p>
    </div>
    <img class="green-banner__green-arrow" src="<?= $imagePath ?>/arrow-green.png">
  </div>
  <div class="main-body">
    <div class="layout main-body-layout txt-center">
      <div class="next-steps__header">
        <p class="hide-sp txt-24 txt-bold black-underline"><span class="txt-green">WelcomeHR</span> 導入時のイメージ</p>
        <img class="next-steps__header-icon" src="<?= $imagePath ?>/next-steps.png">
        <p class="hide-pc txt-20 txt-bold"><span class="txt-green">WelcomeHR</span> 導入時のイメージ</p>
      </div>
      <div class="next-steps">
        <img class="next-steps__arrow hide-pc" src="<?= $imagePath ?>/arrow-gray.png">
        <div class="step step1">
          <img class="step__icon" src="<?= $imagePath ?>/step1.png">
          <div class="step__textblock">
            <h3 class="step__body-title txt-sp-center">契約書はクラウド上で送付</h3>
            <p class="step__body-text">人事ご担当者はWelcomeHRクラウドシステム上で従業員のページに契約書をアップロード。受け取った従業員もシステム上で確認をします。</p>
            <p class="step__body-text">書類作成や郵送の手間をなくし、店長・人事の負担や作業時間を大幅に削減。<br/>「忙しくて契約が追いつかない」「紙でのやり取りは時間がかかるし管理が面倒」等を解決し、迅速で正確な入社手続きを可能にします！</p>
          </div>
          <div class="step__screen">
            <img src="<?= $imagePath ?>/step1-screen.png">
          </div>
        </div>
        <img class="next-steps__arrow" src="<?= $imagePath ?>/arrow-gray.png">
        <div class="step step2">
          <img class="step__icon" src="<?= $imagePath ?>/step2.png">
          <div class="step__textblock">
            <h3 class="step__body-title txt-sp-center">デジタルサイン＆<br/>クラウド入力</h3>
            <p class="step__body-text">WelcomeHRではデジタルサインを導入。最短５分で契約締結が可能です。<br/>従業員は契約内容を確認し、デジタルサインで契約締結。個人情報もクラウド上で入力します。人事＆従業員共に、紙ベースの書類のやり取りは必要ありません！</p>
            <p class="step__body-text">クラウド化は時間削減だけではなく、「ペーパーレス＝省スペース化」も可能にします。</p>
          </div>
          <div class="step__screen">
            <img src="<?= $imagePath ?>/step2-screen.png">
          </div>
        </div>
        <img class="next-steps__arrow" src="<?= $imagePath ?>/arrow-gray.png">
        <div class="step step3">
          <img class="step__icon" src="<?= $imagePath ?>/step3.png">
          <div class="step__textblock">
            <h3 class="step__body-title txt-sp-center">人事の最終漏れチェック</h3>
            <p class="step__body-text">人事ご担当者が従業員の入力したデータを確認し、漏れ項目などの最終確認を行います。</p>
            <p class="step__body-text">履歴書や雇用契約書、労働に必要な個人情報やデータは、すべてクラウド上で管理。<br/>多大なデータをひとつのシステムにまとめることで、データ抽出も簡単＆スピーディに。これからは書類をひとつひとつ探す必要がありません。</p>
            <p class="step__body-text">情報の洩れや不備を無くし、スムーズで正確な情報収集と管理が可能になります！</p>
          </div>
          <div class="step__screen">
            <img src="<?= $imagePath ?>/step3-screen.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="green-banner green-banner-2">
    <div class="green-banner__inner">
      <img class="green-banner__speaker-icon" src="<?= $imagePath ?>/speaker.png">
      <p class="txt-sp-19 txt-pc-18">ただ今 ぞくぞくと開発中！</p>
      <p class="txt-24"><span class="txt-yellow">新機能</span>のご紹介</p>
    </div>
    <img class="green-banner__green-arrow" src="<?= $imagePath ?>/arrow-green.png">
  </div>
  <div class="main-body">
    <div class="green-circle-wrapper">
      <div class="green-circle-row">
        <?= greenCircle('年末調整', 'ペーパーレス<br/>年末調整') ?>
        <?= greenCircle('情報変更<br/>履歴機能', '申請書なしで個人<br/>情報変更可能に') ?>
      </div>
      <div class="green-circle-middle">
        <?= greenCircle('契約<br/>アラート機能', '未対応者への<br/>アラートメール') ?>
      </div>
      <div class="green-circle-row">
        <?= greenCircle('第三者<br/>電子サイン', '保護者/保証人の<br/>サイン機能も<br/>開発中！') ?>
        <?= greenCircle('従業員コード<br/>の自動採番', '今までのコードを<br/>引き継いで<br/>自動採番') ?>
      </div>
    </div>
  </div>
  <div class="green-banner green-banner-3 hide-pc">
    <div class="green-banner__inner">
      <img src="<?= $imagePath ?>/document-stamp.png">
      <p class="txt-20"><span class="txt-nobreak">今回算出した<span class="txt-yellow">時間短縮データの</span></span><span class="txt-nobreak"><span class="txt-yellow">資料</span>をこちらからも取得できます</span></p>
      <img class="green-banner__green-arrow" src="<?= $imagePath ?>/arrow-green.png">
    </div>
  </div>
  <div class="main-body">
    <?= getResults($imagePath, $downloadFileName) ?>
  </div>
</div>
<?php // get_footer(); ?>
<?php include('./_foot.php');; ?>
