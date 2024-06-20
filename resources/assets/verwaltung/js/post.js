$('.select2').select2()
var $sidebar = $('.control-sidebar')
var $container = $('<div />', {
  class: 'p-3 control-sidebar-content'
})

$('.nav-sidebar a').each(function () {
  let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
  let link = this.href;

  if (link == location) {
    $(this).addClass('active');
    $(this).closest('.has-treeview').addClass('menu-open');
  }
});
