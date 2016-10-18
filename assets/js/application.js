$.fn.modal.Constructor.prototype.enforceFocus = function () {};

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
    case 'location':
      $('#master_table').addClass('active');
      $('#add_location').addClass('active');
    case 'category':
      $('#master_table').addClass('active');
      $('#add_category').addClass('active');

    default:

  }
});
