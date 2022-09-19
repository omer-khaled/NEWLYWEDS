// slider images
let poppop=document.querySelector('.popup_slider_image');
let holder_slider_images=document.querySelector('.popup_slider_image .container .image_container');
let images_slider=Array.from(document.querySelectorAll('.product .container .row .total_imagess .con_im .services_frame img'));
let left=document.getElementById('left_pop_slider');
let right=document.getElementById('right_pop_slider');
let current;
// let start_left=;
// let start_right=;
images_slider.forEach(element=>{
    element.addEventListener('click',(e)=>{
        current=images_slider.indexOf(e.target);
        poppop.style.display="flex";    
        let source=e.target.src;
        let text=element.parentElement.nextElementSibling.innerHTML;
        holder_slider_images.innerHTML=`
        <h2 class="fs-2 text_custom mb-3 text-center" id="header_text">${text}</h2>
        <img src="${source}" id="own_image" class="img-fluid" alt="">
        `;
    });
});
document.getElementById('close_poping').addEventListener('click',()=>{
    poppop.style.display="none";
});
// current
left.addEventListener('click',()=>{
    if(current>0){
        current--;
        document.getElementById('own_image').remove();
        document.getElementById('header_text').remove();
        let source=images_slider[current].src;
        let text=images_slider[current].parentElement.nextElementSibling.innerHTML;
        holder_slider_images.innerHTML=`
        <h2 class="fs-2 text_custom mb-3 text-center" id="header_text">${text}</h2>
        <img src="${source}" id="own_image" class="img-fluid" alt="">
        `;
    }
});
right.addEventListener('click',()=>{
    if(current<images_slider.length-1){
        current++;
        document.getElementById('own_image').remove();
        document.getElementById('header_text').remove();
        let source=images_slider[current].src;
        let text=images_slider[current].parentElement.nextElementSibling.innerHTML;
        holder_slider_images.innerHTML=`
        <h2 class="fs-2 text_custom mb-3 text-center" id="header_text">${text}</h2>
        <img src="${source}" id="own_image" class="img-fluid" alt="">
        `;
    }
});