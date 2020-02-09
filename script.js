var prev = document.querySelector('#prev');
var next = document.querySelector('#next');
var img = document.querySelectorAll('#photos img');
var i = 0;

prev.onclick = function() {
    img[i].id = '';
    i--;

    if (i<0) {
        i = img.length -1;
    }

    img[i].id = 'showed';
}

next.onclick = function() {
    img[i].id = '';
    i++;

    if (i >= img.length) {
        i=0;
    }

    img[i].id = 'showed';
}