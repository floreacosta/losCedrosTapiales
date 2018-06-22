$(document).ready(() => {
  getOverlay();
  getActiveSection();
  getOpenCloseMenu();
  getToggleAccordion();
  getOpenVideo();
  getCloseVideo();
  getCloseModalVideoContainer();
  getModalEspecialidades();
  getActiveSlider();
  getBarraTooltip();
  getRedireccionamientoTooltip();
});

/* NOTE: key/value to set an overlay and call it
  [id_button_open_overlay] = [id_overlay]
*/
const OVERLAY_KEY = {
  'patient_responsabilities_button': 'patient_responsabilities',
  'especialidad_y_profesionales_button': 'especialidad_y_profesionales',
  'institutional_video_button': 'institutional_video'
};

function getActiveSection () {
  let url = window.location.pathname;
  let menu = $('.global-menu-content');
  menu.each(function () {
    let item = $(this);
    $(this).removeClass('active');

    if (item.attr('id') === url.substr(1)) {
      item.addClass('active');
    }
  });

  menu.find('#' + url.substr(1)).parent().addClass('active');
}

function getOpenCloseMenu () {
  let menu = $('.global-menu-container');
  $('#hamburguer-open-menu').click(() => {
    menu.addClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({ right: '0em' });
  });

  $('#hamburguer-close-menu').click(() => {
    menu.removeClass('active-global-menu');
    menu.find('.global-menu-content-component').animate({ right: '-100%' }).removeClass('active-global-menu');
  });
}

function getToggleAccordion () {
  let accordion = $(".accordion-container");

  getAccordionToElement(accordion);
  accordion.click(function () {
    $(this).toggleClass("accordion-container-active");
  });
}

function getOverlay () {
  $('.open-overlay').click(function () {
    let button = $(this);
    let foundedOverlayButton = Object.keys(OVERLAY_KEY).find(function (b) {
      if (b === button.attr('id')) {
        return b;
      }
    });

    let overlay = "#" + (OVERLAY_KEY[foundedOverlayButton]);
    let activeClass = "general-overlay-active";

    $(overlay).addClass(activeClass);
    $("body").addClass('no-scrolling');
    $('.general-close-overlay-button').click(function () {
      $(overlay).removeClass(activeClass);
      $("body").removeClass('no-scrolling');
    });
  });
}

function getOpenVideo () {
  $('#button-video-open').click(() => {
    $("#video-container").addClass("video-open");
  });
}

function getCloseVideo () {
  $('#button-video-close').click(() => {
    $("#video-container").removeClass("video-open");

    let v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getCloseModalVideoContainer () {
  $('#video-container').click(() => {
    $("#video-container").removeClass("video-open");

    let v = document.getElementsByTagName("video")[1];
    v.pause();
    v.load();
  });
}

function getAccordionToElement (accordion) {
  let accordionContainerClass = 'accordion-container';
  let accordionContentClass = 'accordion-title-container';
  let accordionContent = accordion.find('.accordion-title-container');

  if ($(window).width() > 769) {
    accordion.removeClass(accordionContainerClass).addClass('element-container');
    accordionContent.removeClass(accordionContentClass).addClass('title-container');
  } else {
    accordion.addClass(accordionContainerClass).removeClass('element-container');
    accordionContent.addClass(accordionContentClass).removeClass('title-container');
  }

  $(window).resize(function () {
    if ($(window).width() > 769) {
      accordion.removeClass(accordionContainerClass).addClass('element-container');
      accordionContent.removeClass(accordionContentClass).addClass('title-container');
    } else {
      accordion.addClass(accordionContainerClass).removeClass('element-container');
      accordionContent.addClass(accordionContentClass).removeClass('title-container');
    };
  });
}

function getModalEspecialidades () {
  let button = $('.especialidades-open-overlay');
  let activeClass = "general-overlay-active";

  button.click(function () {
    let component = $(this).parent().find(".general-overlay-container");

    component.addClass(activeClass);
    $("body").addClass('no-scrolling');

    component.find(".general-close-overlay-button").click(function () {
      component.removeClass(activeClass);
      $("body").removeClass('no-scrolling');
    });
  });
}

function getActiveSlider () {
  let sliders = $('.instalaciones-content');
  let buttons = $('.item-container');
  let sliderActiveClass = 'slider-active';
  let buttonActiveClass = 'item-active';

  let getContainerWidth = function () {
    let contentImage = $('.' + sliderActiveClass).find('.content-imagen');
    let quantityImage = contentImage.children().length * 100;
    contentImage.css('width', quantityImage + '%');
    contentImage.children().css('width', Math.trunc(contentImage.innerWidth() / contentImage.children().length) + 'px');
    getCarrousel();
  };

  getContainerWidth();

  buttons.click(function () {
    let currentSlider = sliders.find($('#slider-' + $(this).attr('id')));
    buttons.each(function () {
      $(this).removeClass(buttonActiveClass);
    });

    sliders.find('.container-slider').each(function () {
      $(this).removeClass(sliderActiveClass);
    });

    $(this).addClass(buttonActiveClass);
    currentSlider.addClass(sliderActiveClass);
    getContainerWidth();
  });
}

function getCarrousel () {
  let currentSlider = $('.slider-active');
  let nextButton = currentSlider.find('.button-next');
  let prevButton = currentSlider.find('.button-prev');

  let imageList = currentSlider.find('.content-imagen').children();
  let contentImage = currentSlider.find('.content-imagen');
  let imageWidth = Math.trunc(contentImage.innerWidth() / imageList.length);

  getActiveImageOnCarrousel(currentSlider, contentImage, imageWidth);

  nextButton.click(function () {
    if (contentImage.innerWidth() >= (-(contentImage.position().left - imageWidth) + imageWidth)) {
      contentImage.animate({
        right: ((-contentImage.position().left) + imageWidth) + 'px'
      });
    }
  });

  prevButton.click(function () {
    if (0 <= -(contentImage.position().left + imageWidth)) {
      contentImage.animate({
        right: ((-contentImage.position().left) - imageWidth) + 'px'
      });
    }
  });
}

function getActiveImageOnCarrousel (sliderActive, generalImageContainer, imageWidth) {
  let images = sliderActive.find('.container-image-secondary').children();
  $(images[0]).addClass('active');

  images.each(function (index) {
    let clicked = $(this);

    clicked.click(function () {
      images.each(function () {
        $(this).removeClass('active');
      });

      $(this).addClass('active');
      generalImageContainer.animate({
        right: (imageWidth * index) + 'px'
      });
    });
  });
}

function getBarraTooltip () {
    let scrollTooltip = function () {
      if ($(this).scrollTop() > 200) {
        $(".tooltip-box").fadeOut("slow");
      } else if ($(this).scrollTop() < 200) {
        $(".tooltip-box").fadeIn("slow");
      }
    };

  $(window).scroll(() => {
    if ($(window).width() >= 600) {
      scrollTooltip();
    } else {
      $(".tooltip-box").css("display", "none");
    }

    //Para hacer responsive el Tooltip.
    $(window).resize(() => {
      if ($(window).width() >= 600) {
        scrollTooltip();
      } else {
        $(".tooltip-box").css("display", "none");
      }
    });
  });
}

function getRedireccionamientoTooltip () {
  let redirectTooltip = (pathLocation, pathPosition, positionMinus) => {
    $(pathLocation).click((e) => {
        e.preventDefault();
        let urlPath = window.location.origin;
        if (urlPath != "http://www.loscedrostapiales.com") {
          $(window).attr({
            'location': "http://www.loscedrostapiales.com/"
          });
        }

        let posicion = $(pathPosition).position().top - positionMinus;
        $("body, html").animate({ scrollTop: posicion + "px" }, 800);
    });
  },
    turnosTooltip = () => {
    redirectTooltip("#turn-tooltip", ".article-online-turn", 200);
  },
    ubicacionTooltip = () => {
    redirectTooltip("#address-tooltip", ".article-information-for-user", 200);
  },
    contactoTooltip = () => {
    redirectTooltip("#contact-tooltip", ".article-information-for-user", 200);
  },
    horariosTooltip = () => {
    redirectTooltip("#schedule-tooltip", ".article-visit-schedule", 100);
  };

  /* Redirección */
  turnosTooltip();
  ubicacionTooltip();
  contactoTooltip();
  horariosTooltip();
}
//# sourceMappingURL=query.js.map
