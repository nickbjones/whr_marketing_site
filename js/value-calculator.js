$(document).ready(function() {

  /**
   * top page scripts
   */

  $('.value-calculator-top-page').on('change', '[data-onchange]', function() {
    // get inputs
    const companyName = $('#company-name').val();
    const noOfEmployees = parseInt($('#number-of-employees').val()) || 0;
    const staffAvgHourlyWage = parseInt($('#staff-avg-hourly-wage').val()) || 0;
    const numberOfAnnualContractRenewals = parseInt($('#number-of-annual-contract-renewals').val()) || 0;
    const contractCreationTime = parseInt($('#contract-creation-time').val()) || 0;
    const bookBindingSealingTime = parseInt($('#book-binding-sealing-time').val()) || 0;
    const shippingTime = parseInt($('#shipping-time').val()) || 0;
    const dataEntry = parseInt($('#data-entry').val()) || 0;
    const contractFiling = parseInt($('#contract-filing').val()) || 0;

    // run calculations
    const sumOfTimes = contractCreationTime + bookBindingSealingTime + shippingTime + dataEntry + contractFiling;
    const timeNow = noOfEmployees * sumOfTimes * numberOfAnnualContractRenewals;
    const timeWelcomeHr = noOfEmployees * 3 * numberOfAnnualContractRenewals;
    const currentTimeHours = Math.floor(timeNow / 60);
    const currentTimeMinutes = timeNow % 60;
    const welcomehrTimeHours = Math.floor(timeWelcomeHr / 60);
    const welcomehrTimeMinutes = timeWelcomeHr % 60;

    // set values to send
    $('#form-company-name').val(companyName);
    $('#form-number-of-employees').val(noOfEmployees);
    $('#form-staff-avg-hourly-wage').val(staffAvgHourlyWage);
    $('#form-number-of-annual-contract-renewals').val(numberOfAnnualContractRenewals);
    $('#form-contract-creation-time').val(contractCreationTime);
    $('#form-book-binding-sealing-time').val(bookBindingSealingTime);
    $('#form-shipping-time').val(shippingTime);
    $('#form-data-entry').val(dataEntry);
    $('#form-contract-filing').val(contractFiling);

    // set values in bottom block
    $('#calculator-company-name').html(companyName);
    $('#calculator-current-time-hours').text(currentTimeHours);
    $('#calculator-current-time-minutes').text(currentTimeMinutes);
    $('#calculator-welcomehr-time-hours').text(welcomehrTimeHours);
    $('#calculator-welcomehr-time-minutes').text(welcomehrTimeMinutes);
  });

});
