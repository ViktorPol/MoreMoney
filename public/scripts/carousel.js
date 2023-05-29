window.addEventListener("load", () => {
    var carousels = document.querySelectorAll(".carousel-3d");
    for (var i = 0; i < carousels.length; i++) {
        carousel(carousels[i]);
    }
});

function carousel(root) {
    var figure = root.querySelector("figure"),
        nav = root.querySelector("nav"),
        images = figure.children,
        n = images.length,
        gap = root.dataset.gap || 0,
        bfc = "bfc" in root.dataset,
        theta = 2 * Math.PI / n,
        currImage = 0,
        dots = document.querySelectorAll(".dot");
    setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
    window.addEventListener("resize", () => {
        setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
    });
    setupNavigation();

    function setupCarousel(n, s) {
        var apothem = s / (2 * Math.tan(Math.PI / n));
        figure.style.transformOrigin = `50% 50% ${-apothem}px`;
        for (var i = 0; i < n; i++) images[i].style.padding = `0 ${gap}px`;
        for (i = 0; i < n; i++) {
            images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
            images[i].style.transform = `rotateY(${i * theta}rad)`;
        }
        if (bfc)
            for (i = 0; i < n; i++) images[i].style.backfaceVisibility = "hidden";
        rotateCarousel(currImage);
    }

    function setupNavigation() {
        nav.addEventListener("click", onClick, true);

        function onClick(e) {
            e.stopPropagation();
            var t = e.target;
            if (t.tagName.toUpperCase() != "A") return;

            if (t.classList.contains("next")) {
                currImage++;
            } else {
                currImage--;
            }

            rotateCarousel(currImage);

        }
    }

    function rotateCarousel(imageIndex) {
        dots.forEach(element => {
            element.classList.remove("active-dots");
        });
        currDot = currImage % dots.length < 0 ? currImage % dots.length + dots.length : currImage % dots.length;
        let thisDot = document.querySelector(`[data-dot="${currDot}"]`);

        thisDot.classList.add("active-dots");
        figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
    }


    let cur;

    function showcur() {
        cur = setInterval(function() {
            currImage++;
            rotateCarousel(currImage);
        }, 15000);
    }

    function clearcur() {
        clearInterval(cur);
    }
    root.onmouseover = function() {
        clearcur();
    }
    root.onmouseout = function() {
        showcur();
    }
    showcur();






    dots.forEach(element => {
        element.addEventListener("click", onClickDot, true);
    });

    function onClickDot(e) {


        dots.forEach(element => {

            element.classList.remove("active-dots");
        });
        this.classList.add("active-dots");
        currImage = this.dataset.dot
        rotateCarousel(currImage);

    }

  //  figure.addEventListener("mousemove", onMouseMove, true);
  
    function onMouseMove(e) {
  
        if (e.movementX < 0) {
            currImage++;
            rotateCarousel(currImage);
        } else {
            currImage--;
            rotateCarousel(currImage);
        }
        console.log(e.movementX);
  
  
  
    }
} 
//swipe(mySwipe, { maxTime: 1000, minTime: 100, maxDist: 150,  minDist: 60 });

//mySwipe.addEventListener("swipe", function() {
//  console.log(e.detail);
//});


