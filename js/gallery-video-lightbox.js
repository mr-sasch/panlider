$(window).on('load',function(){
    /* Gallery Video lightbox */
    var galleryVideo = $("#lightgallery");
    var galleryVideoOuter = $("#lightgallery--outer");
function updateGalleryM() {
    galleryVideo.lightGallery({
      hash: true,
      zoom: false,
      galleryId: 1,
      download: false,
      thumbnail: true,
      animateThumb: true,
      autoplay: false,
      selector: '.no-video--box',
      showThumbByDefault: false
    });
    
    galleryVideoOuter.lightGallery({
      hash: true,
      counter: false,
      controls: false,
      galleryId: 2,
      zoom: false,
      selector: '.video--box',
      vimeoPlayerParams: {
        byline: 0,
        portrait: 1,
        color: 'A90707'
      }
    });

    function vimeoLoadingThumb(id) {
      var url = "http://vimeo.com/api/v2/video/" + id + ".json?callback=showThumb";

      var id_img = "#vimeo-" + id;

      var script = document.createElement('script');
      script.src = url;

      $(id_img).before(script);
    }

    function showThumb(data) {
      var id_img = "#vimeo-" + data[0].id;
      $(id_img).attr('src', data[0].thumbnail_large);
    }
    vimeoLoadingThumb(162285002);}

        updateGalleryM();
/*/ Gallery Video lightbox */
    
    
/* View More */    
$('#baguetteBox-gallery-video__view-more').click(function(e){
    e.preventDefault();
    
    for (var i=5;i<=8;i++){
      $('.mod_two-column-grid-fb').append('<a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=BosqXBZcPog" id="lightgallery__item"><img src="http://psp-wp.nolimit.by/wp-content/themes/psp/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb"><div class="videogallery__item-bg"></div><img class="videogallery__item-play-botton" src="http://psp-wp.nolimit.by/wp-content/themes/psp/images/gallery-video/gallery-video__play-button.png" alt=""></a>');
    }
    baguetteBox.run('.baguetteBox-gallery__block', {
        animation: 'fadeIn'
    });   
    galleryVideo.data('lightGallery').destroy(true);
    galleryVideoOuter.data('lightGallery').destroy(true);
    updateGalleryM();
  });
    
    });
/*/ View More */