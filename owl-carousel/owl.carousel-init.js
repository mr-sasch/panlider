$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    responsive:{
        0:{
            items:1,
            dots: false
        },
        600:{
            items:2
        },
        850:{
            items:3
        },
        1100:{
            items:4
        }
    }
})