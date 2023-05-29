let easystartimg = document.querySelector('.easystartblock .content .image img');
let easystarthover = document.querySelectorAll('.easystartblock .content .text .wrapper .numbers .num');

easystarthover.forEach(element => {
    element.addEventListener('mouseover', function() {
        easystartimg.src = element.dataset.src;
    })
})
