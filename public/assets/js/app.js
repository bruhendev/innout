(function () {
    const menuTogle = document.querySelector('.menu-toggle')
    menuTogle.onclick = function (e) {
        const body = document.querySelector('body')
        body.classList.toggle('hide-sidebar')
    }
})()