
// document.addEventListener("DOMContentLoaded", function () {
//     var elements = document.getElementsByTagName("INPUT");
//     for (var i = 0; i < elements.length; i++) {
//         elements[i].oninvalid = function (e) {
//             if (!e.target.validity.valid) {
//                 e.target.setCustomValidity("Los compos no deben ir vacios.");
//             }
//         };
//         elements[i].oninput = function (e) {
//             e.target.setCustomValidity("");
//         };
//     }
// })
// $().ready(function () {

//     $("#myform").submit(function (event) {
//         event.preventDefault();
//     });
//     $("submit").click(function () {
//         $("#myform").validate({
//             rules: {
//                 name: {
//                     required: true,
//                     minlength: 3
//                 },
//                 email: {
//                     email: true,
//                     required: true
//                 },
//                 number_of_person: {
//                     rquired: true,
//                     minlength: 1,
//                     // max: [1, 23]
//                     max: 23,
//                     number: true
//                 },
//                 message: {
//                     maxlength: 200
//                 }
//             },
//             messages: {
//                 name: {
//                     required: "Porfavor introduca su nambre.",
//                     minlength: "Nombre debe llevar como minimo tres letras."
//                 },
//                 email: {
//                     email: "Ponga el correo valido.",
//                     required: "Porfavor introduca su nambre.",
//                 },
//             }
//         });
//     });



// });
$(document).ready(function () {
    let Toggler = document.querySelector('.toggler')
    Toggler.onclick = function () {
        if (Toggler.classList.toggle("active")) {
            // $('#hidden').toggleClass("slideDown");

            $('.hidden').show();
        } else {

            $('.hidden').hide();


        }
    }
});



window.sr = ScrollReveal();

sr.reveal('.Booking-header', {
    duration: 900,
    origin: 'top',
    distance: '1000px',
});
sr.reveal('.article', {
    duration: 4000,
    origin: 'left',
    distance: '1000px'
});
sr.reveal('.footer', {
    duration: 4000,
    origin: 'bottom',
    distance: '200px'
});
sr.reveal('.footer-booking', {
    duration: 4000,
    origin: 'bottom',
    distance: '200px'
});
sr.reveal('.nav-social', {
    duration: 5000,
    origin: 'bottom',
    distance: '200px'
});

sr.reveal('.container', {
    duration: 2000,
    origin: 'left',
    distance: '1000px'
});
sr.reveal('.index-header', {
    duration: 4000,
    origin: 'top',
    distance: '1000px'
});
sr.reveal('.toggler', {
    duration: 4000,
    origin: 'top',
    distance: '1000px'
});
sr.reveal('.middle', {
    duration: 900,
    origin: 'top',
    distance: '1000px',
});
sr.reveal('.font', {
    duration: 5000,
    origin: 'top',
    distance: '1000px',
});
sr.reveal('.swiper', {
    duration: 4000,
    origin: 'left',
    distance: '1000px'
});





