$(document).ready(()=>{
    // TODO:: Resize sidebar to press hamburger

    let menu = getCookie('menu');
    resizeMenu(menu);

    $('#burger-btn').on('click', (e)=>{
        e.preventDefault();
        menu = (menu === 'false')? 'true' : 'false';
        resizeMenu(menu);
        document.cookie = "menu="+menu;
    });
});

function resizeMenu (menu) {

    let sidebar_item = $('.sidebar-item .text-sidebar-item');

    if (menu === "false") {
        $.each(sidebar_item, (i) => {
            sidebar_item[i].style.display = 'none';
            let items = $('.sidebar-item');
            $.each(items, (j) => {
                items[j].style.textAlign = 'center';
            });
        });
        $('.sidebar').width('6vw');
        $('.home-content').width('93vw');
        $('#title-sidebar').text('WS');
    }
    else {
        $.each(sidebar_item, (i) => {
            sidebar_item[i].style.display = 'inline';
            let items = $('.sidebar-item');
            $.each(items, (j) => {
                items[j].style.textAlign = 'left';
            });
        });
        $('.sidebar').width('14vw');
        $('.home-content').width('85vw');
        $('#title-sidebar').text('WorkShifts');
    }
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}