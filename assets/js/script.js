$(document).ready(function (){
    $('.header-menu-icon').on('click', function () {
        $('.nav').toggle();
    });

    // Slider Home
    $('.main-slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
    })

    $('.eventos-box').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,

        responsive: [
            {
              breakpoint: 900,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ]
    })

    $('.formulario-tab').on('click', function () {
        $(this).parent().toggleClass('formulario-container--active');
    });

    // Galeria modal

    $('.modal-slider').slick({
        // prevArrow: $('.modal-arrow-before'),
        // nextArrow: $('.modal-arrow-after'),

        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.modal-close').on('click', function () {
        $('.modal').removeClass('modal--active');
    });

    $('.galeria-card-link').on('click', function () {
        $(this).parent().siblings('.modal').addClass('modal--active');
        $('.modal-slider').slick('refresh');

        let ultimoItem = $('.modal--active .modal-slider img').last().data('item');
        
        $('.modal--active .modal-paginacao-item').text('/0' + ultimoItem);
    });

    $(".modal-slider").on("afterChange", function () {
        let ativoItem = $('.modal--active .modal-slider .slick-current').data('item');
        $('.modal--active .modal-paginacao-item--active').text('0'+ativoItem);
    });

    $('.slider-photos').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.depositions-slider-box').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
  
    // mascaras
    $('.cnpj').inputmask({
      mask: ['999.999.999-99', '99.999.999/9999-99'],
        keepStatic: true
    });

    $('.telefone, .telefone-whatsapp').mask('(99) 9999-9999?9', { placeholder: ' ' });
    $('.telefone, .telefone-whatsapp').on('blur', function() {
      var phone = $(this).val().replace(/\D/g, '');
      if (phone.length === 11) {
        $(this).mask('(99) 99999-9999');
      } else {
        $(this).mask('(99) 9999-9999?9');
      }
    });
    
    function revista() {
          $('.revista-btn').on('click', function() {
              let title = $(this).data('title')
              let url = $(this).data('href')

              if(localStorage.getItem(title.replace(/\s/g, ''))) {
                  window.open(url, '_blank')
              } else {
                  $('.revista__popup').addClass('revista__popup--show')
                  $('.nomerevista').val(title)

                  document.addEventListener('wpcf7mailsent', function(event) {
                      if (event.detail.contactFormId == '7106') {
                          localStorage.setItem(title.replace(/\s/g, ''), 'true');
                          window.open(url, '_blank')
                          $('.revista__popup').removeClass('revista__popup--show')
                      }
                  })
              }
          })
      }

      revista()
})


document.querySelectorAll('.tv-card').forEach(e => {
    
    const currentLink = e.querySelector('.sby_video_thumbnail'),
    currentImage = currentLink.getAttribute('data-full-res');
    e.querySelector('.sb_youtube').style.backgroundImage = "url('"+currentImage+"')";
  
});