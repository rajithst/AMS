$(document).ready(function () {
  var pathname = window.location.pathname;
  var curr_file = pathname.split('/')[4] ;
  console.log(curr_file);
  switch (curr_file) {
    case 'register':
      $('#asset_register').addClass('active');
      break;
    case 're_valuation':
      $('#re_valuation').addClass('active');
      break;
    case 'disposal':
      $('#asset_movement').addClass('active');
      $('#disposal').addClass('active');

    default:

  }
})
