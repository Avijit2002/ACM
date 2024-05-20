


//console.log("hi");
// const options = {
//   root: null, 
//   threshold: 0,  
//   rootMargin: "0px 0px -395px 0px",
// };
// const obs2 = new IntersectionObserver((entries,obs2)=>{
//     entries.forEach(entry =>{
//         //console.log(entry);
//       if(entry.isIntersecting)
//       {
//             nav.classList.remove('header-scroll');
//             navb.classList.remove('navbar-nav-js');

//         for (x of navb.children) {
//             var y = x.children;
//             y[0].classList.remove('nav-link-js');
//         }


//       }
//       else{

//         nav.classList.add('header-scroll');
//         navb.classList.add('navbar-nav-js');
//         //console.log("hi");
//         for (x of navb.children) {
//             var y = x.children;
//             y[0].classList.add('nav-link-js');
//             }

//     }
//     })
// },options);

// obs2.observe(head2);
const navb = document.querySelector('#navbar-nav')
const nav = document.querySelector('#navi');
const nb = document.querySelector('#nav-button');
const nav_white = document.querySelector('#nav-white');
const head1 = document.querySelector(".top-container");
const head2 = document.querySelector(".sec-lower-container");
const minilogo = document.querySelector("#nav-logo");
const options2 = {
    root: null,
    threshold: 0,
    rootMargin: "-140px",
};


const obs = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
        //console.log(entry);
        if (entry.isIntersecting) {
            i = 0;
            nav.classList.remove('header-scroll');
            navb.classList.remove('navbar-nav-js');
            nav_white.classList.add('navbar-white');
            nb.classList.add('navbar-toggler-white');
            minilogo.classList.add('nav-logo');
            for (x of navb.children) {
                var y = x.children;
                y[0].classList.remove('nav-link-js');
            }


        }
        else {

            nav.classList.add('header-scroll');
            navb.classList.add('navbar-nav-js');
            minilogo.classList.remove('nav-logo');
            nav_white.classList.remove('navbar-white');
            nb.classList.remove('navbar-toggler-white');
            // navbar-toggler-white
            // navbar-white
            //console.log("hi");
            for (x of navb.children) {
                var y = x.children;
                y[0].classList.add('nav-link-js');
            }

        }
    })
}, options2);
obs.observe(head1);





/*const navl = document.querySelector('.nav-link-s');
window.addEventListener('scroll',()=>{
    if (window.scrollY > 600) {
        navl.classList.add('nav-link-js');
    }
    else {
        navl.classList.remove('nav-link-js');

    }
})*/

/*const navb = document.querySelector('#navbar-nav');
window.addEventListener('scroll', () => {
    if (window.scrollY > window.innerHeight) {
        navb.classList.add('navbar-nav-js');
        //console.log("hi");
        for (x of navb.children) {
            var y = x.children;
            y[0].classList.add('nav-link-js');
        }
    }
    else {
        navb.classList.remove('navbar-nav-js');
        //console.log("hi");
        for (x of navb.children) {
            var y = x.children;
            y[0].classList.remove('nav-link-js');

        }

    }
})*/

