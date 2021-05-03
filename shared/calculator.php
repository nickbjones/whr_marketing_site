<div class="calculator layout">
  <div class="calculator__row calculator__current-time">
    <div class="calculator__label">
      <span class="calculator__label-logo">
        <img class="" src="/src/images/shared/icon-calculator.png" alt="">
      </span>
      <span class="calculator__label-text">現在 <span id="calculator-company-name"></span>(株)様 が年間で契約処理にかかっている時間は･･･</span>
    </div>
    <div class="calculator__output">
      <span class="calculator__output-value" id="calculator-current-time-hours"></span>
      <span class="calculator__output-label">時間</span>
      <span class="calculator__output-value" id="calculator-current-time-minutes"></span>
      <span class="calculator__output-label">分</span>
    </div>
  </div>
  <div class="calculator__row calculator__welcomehr-time">
    <div class="calculator__label">
      <span class="calculator__label-logo">
        <img class="" src="/src/images/shared/icon-bank.png" alt="">
      </span>
      <span class="calculator__label-text">WelcomeHRを使うとわずかこれだけの作業時間に！</span>
    </div>
    <div class="calculator__output">
      <span class="calculator__output-value" id="calculator-welcomehr-time-hours"></span>
      <span class="calculator__output-label">時間</span>
      <span class="calculator__output-value" id="calculator-welcomehr-time-minutes"></span>
      <span class="calculator__output-label">分</span>
    </div>
  </div>
  <p class="hide-pc txt-center txt-18 txt-green">「 時間短縮 ＝ 経費削減 」を実現！</p>
</div>

<script>
  $(document).ready(function() {
    var companyName = '〇〇〇〇〇〇';
    var currentTimeHours = '200';
    var currentTimeMinutes = '40';
    var welcomehrTimeHours = '100';
    var welcomehrTimeMinutes = '40';

    $('#calculator-company-name').html(companyName);
    $('#calculator-current-time-hours').text(currentTimeHours);
    $('#calculator-current-time-minutes').text(currentTimeMinutes);
    $('#calculator-welcomehr-time-hours').text(welcomehrTimeHours);
    $('#calculator-welcomehr-time-minutes').text(welcomehrTimeMinutes);
  });
</script>
