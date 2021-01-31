jQuery(function ($) {
    // Dropdown menu
    $('.sidebar-dropdown > a').click(function () {
      $('.sidebar-submenu').slideUp(200);
      if ($(this).parent().hasClass('active')) {
        $('.sidebar-dropdown').removeClass('active');
        $(this).parent().removeClass('active');
      } else {
        $('.sidebar-dropdown').removeClass('active');
        $(this).next('.sidebar-submenu').slideDown(200);
        $(this).parent().addClass('active');
      }
    });
  });
  
  function cierra() {
    document.getElementById("btnabrir").addEventListener("click", function () {
      document.getElementsByClassName("fondo_transparente")[0].style.display = "block";
      return false;
    });
  }
  
  function NO() {
    document.getElementById("btn-no").addEventListener("click", function () {
      document.getElementsByClassName("fondo_transparente")[0].style.display = "none";
    });
  }

