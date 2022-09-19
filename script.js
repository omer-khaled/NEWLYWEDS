// load all images

// window.onload=()=>{
// }


let links=document.querySelectorAll('.navbar .container-fluid .navbar-collapse .navbar-nav .nav-item .nav-link');
links.forEach(element=>{
    element.onclick=()=>{
        links.forEach(el=>{
            el.classList.remove("active");
        })
        element.classList.add("active");
    };
});

document.getElementById('to_toping').onclick=()=>{
    window.scrollTo({top:0});
};
// loading
let poppup_load=document.querySelector('.popup');
let holder= setTimeout(()=>{
    poppup_load.classList.add('animated_pop');
    // poppup.remove();
    setTimeout(()=>{
        poppup_load.remove();
    },2200)
},2000);
