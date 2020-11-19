$(() => {
    let menuText = $('.search'),
        menuList = $('.list-group');

    menuList.hide();

    menuText.click(() => {
        menuList.slideToggle();
    });
});

