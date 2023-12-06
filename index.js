const data ={
    English:{
        menu:['Booking','Contact','Menu'],

    },
    Spanish:{
        menu:['Reserva','Contacto','Menú'],
    }
}

let elementClickable = document.querySelectorAll(".languages");
let langs = document.querySelector(".langs");

for(let i = 0; i < elementClickable.length; i++)
{
   elementClickable[i].addEventListener('click',()=>{
    langs.querySelector('.active').classList.remove('active');
    elementClickable[i].classList.add('active');
    let 
   })
}

window.addEventListener("mouseover", (e) => {
    // console.log(e.currentTarget.nodeName);
    if (e.currentTarget.nodeName === "IMG") {
      e.currentTarget.style.display = "none";
    }
  });
  const hide = document.querySelector(".container_menu2");
  // window.addEventListener('DOMContentLoaded',()=>{
  // hide.style.display="none";
  // });
  const showOrHide = document.querySelector(".container-menu2");
  const active = document.querySelector(".menu-tab");
  active.addEventListener("click", () => {
    if (active.classList.toggle("active")) {
      $(".menu-tab-mobile").slideDown(1000).delay(1000).fadeIn(2000);
        $(".menu-tab-mobile").css("display","flex");
        $(".menu-tab-mobile").css("align-items","center");
    } else {
      $(".menu-tab-mobile").slideUp(1000).delay(1000).fadeOut(2000);
    }
  });

  const swiper = new Swiper(".swiper", {
    pagination: {
      el: ".swiper-pagination",

      dynamicBullets: true,
    },
    // ,
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",

    // }
  });