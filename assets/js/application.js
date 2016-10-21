$.fn.modal.Constructor.prototype.enforceFocus = function () {};

$(document).ready(function () {
  var pathname = window.location.pathname;
  var curr_file = pathname.split('/')[4] ;
  console.log(curr_file);
  switch (curr_file) {
    case 'authorize':
      $('#asset_authorizer').addClass('active');
      break;
    case 'register':
      $('#asset_register').addClass('active');
      break;
    case 're_valuation':
      $('#re_valuation').addClass('active');
      break;
    case 'disposal':
      $('#asset_movement').addClass('active');
      $('#disposal').addClass('active');
      break;
    case 'location_change':
      $('#asset_movement').addClass('active');
      $('#loc_change').addClass('active');
      break;
    case 'owner_change':
      $('#asset_movement').addClass('active');
      $('#owner_change').addClass('active');
      break;
    case 'addData':
      $('#master_table').addClass('active');
      $('#addData').addClass('active');
      break;
    case 'removeData':
      $('#master_table').addClass('active');
      $('#removeData').addClass('active');
      break;
    case 'addUser':
      $('#user_management').addClass('active');
      $('#add_user').addClass('active');
      break;
    case 'User':
      $('#user_management').addClass('active');
      $('#add_user').addClass('active');
      break;
    default:
      $('#dashboard').addClass('active');
      break;
  }
});
