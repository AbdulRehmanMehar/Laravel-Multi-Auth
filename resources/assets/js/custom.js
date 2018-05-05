// Navbar dynamic active class
$('#navbarMenu .nav-link').each((i,element) => {
  let href = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
  if(href == ""){
    $(element).removeClass('active');
    $(element).attr('href') == window.location.href ? $(element).addClass('active') : '';
  }else if (href == $(element).attr('href')) {
    $(element).addClass('active');
  }
});
