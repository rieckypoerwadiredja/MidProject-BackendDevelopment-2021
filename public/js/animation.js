// ----------------------------- HERO SECTION ANIMATION -------------------------
setTimeout(() => {
    // --------------------- circle animation
    const circle = document.querySelector('.top-hero .circle');
    circle.classList.add('active-ani');

    // --------------------- H1
    const hCircle = document.querySelector('.circle h1');
    hCircle.classList.add('active-ani');

    //---------------------- P
    const pCircle = document.querySelector('.circle p');
    pCircle.classList.add('active-ani');
});





// ------------------------- SOSMED ANIMATION

const sosmeds = document.querySelectorAll('.social-media .sosmed');

sosmeds.forEach((sosmed, idx) => {
    setTimeout(() => {
        sosmed.classList.add('active-ani');
    }, (idx * 200) + 400); //dealay per link sosmednya, jd ada jeda 
});

// --------------------------- FORM ANIMATION
const form = document.querySelector('.bottom-hero form');
setTimeout(() => {
    form.classList.add('active-ani');
});


// ---------------------------------- ABOUT SECTION --------------------------
let AS = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
        trigger: ".about-japan",
        start: "top center",
    }
});

AS
    .to(".title", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.2,
    }, "-=5")

    .to(".container-text img", {
        x: 0,
        opacity: 1,
        duration: .5,
        delay: 0,
    }, "-=4.5")

    .to(".container-text p.jepun", {
        x: 0,
        opacity: 1,
        duration: .5,
        delay: 0,
    }, "-=4.3")

    .to(".container-text h1", {
        x: 0,
        opacity: 1,
        duration: .5,
        delay: 0,
    }, "-=4.1")

    .to(".container-text p.desc-about", {
        x: 0,
        opacity: 1,
        duration: .5,
        delay: 0,
    }, "-=3.9")

    .to(".video-sec .container-video", {
        x: 0,
        opacity: 1,
        duration: .5,
        delay: 0,
    }, "-=3.7")


    //right
    .to(".img-sec div:nth-child(1)", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.2,
    }, "-=3.7")

    .to(".img-sec div:nth-child(2)", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.2,
    }, "-=3.7");


// ---------------------------------- KNOW SECTION --------------------------
let KS = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
        trigger: ".know-japan",
        start: "top center",
    }
});

KS

    .to(".know-japan .know-title p", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=3")

    .to(".know-japan .know-title h3", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.7")

    .to(".know-japan .cards .item:nth-child(1)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.5")

    .to(".know-japan .cards .item:nth-child(2)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.3")

    .to(".know-japan .cards .item:nth-child(5)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.5")

    .to(".know-japan .cards .item:nth-child(4)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.3")

    .to(".know-japan .cards .item:nth-child(3)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.1")

    .to(".know-japan .cards .item .filter .bottom p", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=1.9")

    .to(".know-japan .before", {
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=1.6");

// ---------------------------------- BEST SECTION --------------------------


let BS = gsap.timeline({
    // yes, we can add it to an entire timeline!
    scrollTrigger: {
        trigger: ".best-course",
        start: "top center",
    }
});

BS

    .to(".best-course .top", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=3")

    .to(".best-course .bottom p:nth-child(1)", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.8")

    .to(".best-course .bottom h3", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.6")

    .to(".best-course .bottom p:nth-child(2)", {
        y: 0,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.4")

    .to(".best-course .carausel .item:nth-child(1)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.2")

    .to(".best-course .carausel .item:nth-child(2)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2")

    .to(".best-course .carausel .item:nth-child(3)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=1.6")

    .to(".best-course .carausel .item:nth-child(4)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2")

    .to(".best-course .carausel .item:nth-child(5)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.2")

    .to(".best-course .carausel .item:nth-child(6)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.2")

    .to(".best-course .carausel .item:nth-child(7)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.2")

    .to(".best-course .carausel .item:nth-child(8)", {
        scale: 1,
        opacity: 1,
        duration: .5,
        delay: 0.5,
    }, "-=2.2");