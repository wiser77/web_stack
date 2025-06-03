$(document).ready(function () {
  $('#country').change(function () {
    var country_id = $(this).val();
    $.ajax({
      url: 'fetch_states.php',
      method: 'POST',
      data: { country_id: country_id },
      success: function (response) {
        $('#state').html(response);
      },
    });
  });
});
