const img = document.querySelectorAll('.img');
window.aadEventListener('scroll',checkBoxes);

checkImg();

function checkImg(){
   const triggerBottom = window.innerHeight / 5 * 4;

   img.forEach(img => {
const imgTop = img.getBoundingClientRect().top;
if(imgTop < triggerBottom){
    img.classList.add('show');
}
else{
    img.classList.remove('show');
}
    });
}











