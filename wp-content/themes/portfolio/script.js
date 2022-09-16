const navToggle = document.querySelector(".icn_menu");
  const links = document.querySelector(".menu");
  const close = document.querySelector(".icn_menu2");

   
navToggle.addEventListener('click', function(){
    links.classList.toggle("show-menu");
    close.classList.toggle("show-close");

})

close.addEventListener('click', function(){
    links.classList.toggle("show-menu");
    close.classList.toggle("show-close");
})