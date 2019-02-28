var slideIndex = 0;
caroucel();

function caroucel(){

    var i;
    var x = document.getElementsByClassName("imgSlide");

    for (i = 0; i < x.length; i++) {
        
        x[i].style.display = "none";

    }

    slideIndex++;

    if(slideIndex > x.length){

        slideIndex = 1;

    }

    x[slideIndex-1].style.backgroundSize = "cover";
    setTimeout(caroucel, 5000);

}