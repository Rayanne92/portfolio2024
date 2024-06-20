window.addEventListener('scroll', function() {
    var toggle = this.document.getElementById('header');
    var position = this.window.scrollY;
    if(position > 0) {
        toggle.classList.add('display');
    } else {
        toggle.classList.remove('display');
    }
});