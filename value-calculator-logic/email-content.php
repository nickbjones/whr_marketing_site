<?php

  function getEmailSubject($companyName) {
    return $companyName.'様【コスト削減シュミレーション資料】ご送付のご連絡 / WelcomeHR';
  }

  function getEmailMessage($companyName) {
    return '
      '.$companyName.'様<br>
      <br>
      こんにちは、WelcomeHRです。<br>
      <br>
      この度は、弊社Webサイトより『コスト削減シュミレーション』をお試しいただき誠にありがとうございます。<br>
      <br>
      本メールに、シュミレーション結果の資料を添付いたしますので、是非お役立てください。<br>
      今後とも、どうぞよろしくお願いいたします。<br>
      <br>
      <br>
      ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー<br>
      ※本メールは、『コスト削減シュミレーション』を入力いただきましたお客様全員にお送りしております。<br>
      ご不明点等ございましたら、<a href="info@welcomehr.jp">info@welcomehr.jp</a>までご連絡ください。<br>
      <br>
      【運営会社】ワークスタイルテック株式会社　<a href="http://www.welcomehr.jp/">http://www.welcomehr.jp/</a><br>
    ';
  }

  function getEmailHeaders() {
    $emailFrom = 'no-reply@welcomehr.jp';

    return 'From: '. $emailFrom . "\r\n";
  }

?>
