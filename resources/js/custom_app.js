// TODO:: Resize sidebar to press hamburger
console.log('entra')
$(document).ready(()=>{
    console.log('enter')
    $('#burger-btn').on('click', (e)=>{
        console.log('press')
        e.preventDefault();
    });
});