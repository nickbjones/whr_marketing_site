$(document).ready(function() {

  /**
   * top page scripts
   */

  function runCalculation() {
    // get inputs
    const companyName = $('#company-name').val();
    const noOfEmployees = parseInt($('#number-of-employees').val()) || 0;
    const staffAvgHourlyWage = parseInt($('#staff-avg-hourly-wage').val()) || 0;
    const numberOfAnnualContractRenewals = parseInt($('#number-of-annual-contract-renewals').val()) || 1;
    const contractCreationTime = parseInt($('#contract-creation-time').val()) || 0;
    const bookBindingSealingTime = parseInt($('#book-binding-sealing-time').val()) || 0;
    const shippingTime = parseInt($('#shipping-time').val()) || 0;
    const dataEntry = parseInt($('#data-entry').val()) || 0;
    const contractFiling = parseInt($('#contract-filing').val()) || 0;

    // run calculations
    const sumOfTimes = contractCreationTime + bookBindingSealingTime + shippingTime + dataEntry + contractFiling;
    const timeBefore = noOfEmployees * sumOfTimes * numberOfAnnualContractRenewals;
    const timeAfter = noOfEmployees * 3 * numberOfAnnualContractRenewals;
    const currentTimeHours = Math.floor(timeBefore / 60);
    const currentTimeMinutes = timeBefore % 60;
    const welcomehrTimeHours = Math.floor(timeAfter / 60);
    const welcomehrTimeMinutes = timeAfter % 60;

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
  }

  function checkInputs(event) {
    if (!$('#company-name').val() ||
        !$('#number-of-employees').val() ||
        !$('#staff-avg-hourly-wage').val() ||
        !$('#contract-creation-time').val() ||
        !$('#book-binding-sealing-time').val() ||
        !$('#shipping-time').val() ||
        !$('#data-entry').val() ||
        !$('#contract-filing').val() ||
        !$('#email').val()) {
      event.preventDefault();
    }
  }

  // run calculation on page load
  runCalculation();

  // run calculation on any input change
  $('.value-calculator-top-page').on('change', '[data-onchange]', runCalculation);

  // prevent form send if any inputs are empty
  $('#form').submit((event) => checkInputs(event));

});
