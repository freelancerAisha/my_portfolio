window.addEventListener('scroll', function() {
    let menu = document.querySelector('.menu');
    if (window.pageYOffset >= 500) {
        menu.classList.add('sticky');
        // } else if (window.pageYOffset >= 80) {
        //     menu.classList.remove('sticky');

        // } else if (window.pageYOffset >= 100) {
        //     menu.classList.remove('sticky');

    } else {
        menu.classList.remove('sticky');

    };
});

// banner
// 1
window.addEventListener('scroll', function() {
    let img1 = document.querySelector('.img1');
    if (window.pageYOffset >= 250) {
        img1.classList.add('imgOne');
    } else {
        img1.classList.remove('imgOne');

    }

});

// single-banner

window.addEventListener('scroll', function() {
    let singleBanner = document.querySelector('.single-banner');
    if (window.pageYOffset >= 850) {
        singleBanner.classList.add('single-banner-new');

    } else {
        singleBanner.classList.remove('single-banner-new');

    }
});

// img-box

window.addEventListener('scroll', function() {
    let imgBox = document.querySelector('.img-box');
    if (window.pageYOffset >= 1600) {
        imgBox.classList.add('img-box-new');

    } else {
        imgBox.classList.remove('img-box-new');

    }
});


// skill

window.addEventListener('scroll', function() {
    let consec = document.querySelector('.skill_sec');
    if (window.pageYOffset >= 2400) {
        consec.classList.add('skill_new');
        console.log('skill_sec');

    } else {
        consec.classList.remove('skill_new');

    }
});


// box-sec

// window.addEventListener('scroll', function() {
//     let videoSec = document.querySelector('.video-sec');
//     if (window.pageYOffset >= 3000) {
//         videoSec.classList.add('video-sec-new');

//     } else {
//         videoSec.classList.remove('video-sec-new');

//     }
// });


// window.addEventListener('scroll', function() {
//     let boxLeft = document.querySelector('.box-sec-left');
//     if (window.pageYOffset >= 3000) {
//         boxLeft.classList.add('box-sec-left-new');

//     } else {
//         boxLeft.classList.remove('box-sec-left-new');

//     }
// });

// resume

window.addEventListener('scroll', function() {
    let resume = document.querySelector('.reg-form');
    if (window.pageYOffset >= 4000) {
        resume.classList.add('resumeNew');

    } else {
        resume.classList.remove('resumeNew');

    }
});





// expert skill

let btn_1 = document.querySelector('#btn1');
let btn_2 = document.querySelector('#btn2');
let btn_3 = document.querySelector('#btn3');


let quoto_1 = document.querySelector('#quoto_1');
let quoto_2 = document.querySelector('#quoto_2');
let quoto_3 = document.querySelector('#quoto_3');


btn_1.addEventListener('click', function() {
    quoto_1.style.transform = "translateX(0)"
    quoto_2.style.transform = "translateX(-600px)";
    quoto_3.style.transform = "translateX(-600px)";


});

btn_2.addEventListener('click', function() {

    quoto_2.style.transform = "translateX(0)";
    quoto_1.style.transform = "translateX(-600px)";
    quoto_3.style.transform = "translateX(-600px)";


});

btn_3.addEventListener('click', function() {
    quoto_3.style.transform = "translateX(0)";
    quoto_2.style.transform = "translateX(-600px)";
    quoto_1.style.transform = " translateX(-600px)";




});

// education

let imgBtn = document.querySelector(".img-btn");
let eduDt = document.querySelector(".educational-details");
let eduImg = document.querySelector(".edu-img");

imgBtn.addEventListener("click", function() {
    console.log("done");
    eduDt.classList.add("edu-new");
    eduImg.src = "img/ban60.jpg";
});

// slider

$("#example").typer({
    strings: [
        "I'm a Model",
        "I'm a Designer",
        "I'm a Photographer"
    ],
    typeSpeed: 200,
    backspaceSpeed: 20,
    backspaceDelay: 800,
    repeatDelay: 1000,
    repeat: true,
    autoStart: true,
    startDelay: 100,
});




// let menu_contact = document.querySelector('#menu_contact');
// let contact_sec = document.querySelector('#contact_sec');

// menu_contact.addEventListener("click", function() {
//     contact_sec.style.transform = "translateY(30px)";
//     contact_sec.style.transition = "0.3s";


// });