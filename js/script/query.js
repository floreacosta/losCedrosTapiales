$(document).ready(() => {
  getOverlay();
  getActiveSection();
  getOpenCloseMenu();
  getToggleAccordion();
  // getFixedMenu();
  getOpenVideo();
  getCloseVideo();
  getCloseModalVideoContainer();
  // getHeightMap();
  getModalEspecialidades();
  getSlider();
  getBarraTooltip();
  getRedireccionamientoTooltip();
});

/* NOTE: key/value to set an overlay and call it
  [id_button_open_overlay] = [id_overlay]
*/
const OVERLAY_KEY = {
  'patient_responsabilities_button': 'patient_responsabilities',
  'especialidad_y_profesionales_button': 'especialidad_y_profesionales'
};

function getActiveSection () {
  let URLactual = window.location.pathname;
  switch (URLactual) {
    case '/losCedrosTapiales/institucional':
      $("#instalaciones").addClass("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/servicios':
      $("#instalaciones").remove("active");
      $("#servicios").addClass("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/coberturamedica':
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").addClass("active");
      $("#especialidades").remove("active");
      break;
    case '/losCedrosTapiales/especialidades':
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").addClass("active");
    default:
      $("#instalaciones").remove("active");
      $("#servicios").remove("active");
      $("#coberturas").remove("active");
      $("#especialidades").remove("active");
      break;
  }
}

function getOpenCloseMenu () {
  let menu = $('.global-menu-container');
  $('#hamburguer-open-menu').click(() => {
    menu.animate({ right: '0em' }).addClass('active-global-menu');
  });

  $('#hamburguer-close-menu').click(() => {
    menu.animate({ right: '-100%' }).removeClass('active-global-menu');
  });
}

function getToggleAccordion () {
  let accordion = $(".accordion-container");

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
    $('.general-close-overlay-button').click(function () {
      $(overlay).removeClass(activeClass);
    });
  });
}

// function getFixedMenu () {
//   $(window).resize(() => {
//     let ventana = $(window).width();
//     let right = $('#element').css('right');
//     let pat = 'px';
//
//     right = right.replace(pat, '');
//     right = parseInt(right);
//
//     if (ventana > 1024 && right < -1024) {
//       $('#element').css('right', '2em');
//     }
//   });
// }

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

// function getHeightMap () {
//   let h = $("#informationBox").outerHeight() + "px";
//   $("#google-map-container").css("height", h);
//   $(window).resize(function () {
//     let h = $("#informationBox").outerHeight() + "px";
//     $("#google-map-container").css("height", h);
//   });
// }

function getModalEspecialidades () {
  let button = $('.especialidades-open-overlay');
  let activeClass = "general-overlay-active";

  button.click(function () {
    let component = $(this).parent().find(".general-overlay-container");

    component.addClass(activeClass);

    component.find(".general-close-overlay-button").click(function () {
      component.removeClass(activeClass);
    });
  });
}

function getSlider () {
  // Función slider
  let sliderFunction = function sliderFunction(slider) {
    /**
    /* Funcionalidad del listado de imágenes debajo del slider (accesos directos a cada imagen)
    **/

    //Declaro un array donde guardo el listado de imagenes para poder recorrerlo
    let listadoImagenes = [];
    $(slider + " .container-image-secondary a").each(function (index) {
      listadoImagenes.push(this);
    });

    //Contador de páginas o imagenes a las que se le dará NEXT
    let page = 1;

    //Capturo el ID de la imagen cliqueada para que se muestre
    //directamente en el slider sin cliquear los botones NEXT y PREV
    $(slider + " .container-image-secondary").click(function (e) {
      //Le quito el funcionamiento por defecto al link
      e.preventDefault();

      //Capturo el ID
      let a = e.target.id;

      //Recorro el array de imágenes
      for (let i = 0; i < listadoImagenes.length; i++) {
        //Si "a" (que contiene el ID de la imagen cliqueada) es IGUAL al id de la imagen del ARRAY
        if (a == listadoImagenes[i].id) {
          //Capturo la posición del contenedor
          //Ancho de la imagen * la posición del ARRAY * -1
          //(para hacerlo negativo, por ser necesario para los estilos)
          let posicion = $(slider + " .content-imagen li img").width() * i * -1;
          //Le doy el valor de "posicion" al estilo LEFT
          $(slider + " .content-imagen").css("left", posicion);
          //Le indico al contador general en qué página o imagen estoy ubicada
          //para darle la información a los botones NEXT y PREV
          page = i + 1;
        }
      }
    });

    //Se busca la cantidad de imagenes que tiene cada sección.
    let cantImagenes = $(slider + " .content-imagen li").size();
    //Se calcula el ancho en % de las imágenes según cuantas son:
    //Ejemplo: si son 3 imágenes, deberían tener un ancho de 33.33%. Si son 4 imágenes, deberían tener un ancho de 25%.
    let anchoLi = 100 / cantImagenes + "%";

    //Se le da el ancho calculado a cada LI (contenedor de cada imagen).
    $(slider + " .content-image-primary").css("width", anchoLi);

    //Se calcula el ancho total del contenedor que englobal a TODAS las imágenes en %.
    let anchoContenedor = cantImagenes * 100 + "%";
    //Se le asigna el valor calculado al contenedor GLOBAL
    $(slider + " .content-imagen").css("width", anchoContenedor);

    //Se inicializa la letiable del espacio a mover del contenedor GLOBAL de las imagenes en 0.
    let espacioAmover = 0;

    //Función del BOTÓN NEXT
    $(slider + " #button-next").click(function () {
      //Se calcula el ancho de imagen para el momento en que se toco NEXT
      let anchoImagen = $(slider + " .content-imagen li img").width() * -1;

      let tiempoDesliz = 300;

      //Lógica de BOTÓN NEXT
      //Si la posición de la imagen actual es == a la cantidad total de imágenes
      if (page == cantImagenes) {
        //Vuelve a la primer imagen del slider (page = 1)
        page = 1;
        //Se reinicia la letiable espacioAmover por si es la segunda pasada de slider.
        espacioAmover = 0;
        //Se posiciona en 0px al contenedor GLOBAL que se mueve según la imagen que toca mostrar.
        $(slider + " .content-imagen").animate({ left: "0px" }, tiempoDesliz);
      } else {
        //Se carga la letiable "espacioAmover" con el ancho de la imagen * la posición de la imagen que se muestra
        espacioAmover = anchoImagen * page;

        //Se aumenta Page para la próxima pasada
        page++;
        //Se asigna el espacioAmover al ANIMATE
        $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      }

      //Código para hacer responsive el slider en jquery
      $(window).resize(function () {
        let anchoImagen = $(slider + " .content-imagen li img").width() * -1;
        let espacioAmover = 0;
        espacioAmover = anchoImagen * (page - 1);
        $(slider + " .content-imagen").css("left", espacioAmover + "px");
      });
    });

    //Función BUTTON PREV
    $(slider + " #button-prev").click(function () {
      //Se calcula el ancho de imagen para el momento en que se toco NEXT
      let anchoImagen = $(slider + " .content-imagen li img").width() * -1;

      //Se calcula el tiempo que tomará la animación según la cantidad de imágenes de ese slider.
      if (cantImagenes > 5) {
        let tiempoDesliz = cantImagenes * 100;
      } else {
        let tiempoDesliz = cantImagenes * 300;
      }

      //Lógica de BUTTON PREV
      //Si la posición de la imagen a mostrar es menor o igual a la primer imagen
      //Es decir, si estás en la primer imagen y vas hacia atrás
      if (page <= 1) {
        //Page se iguala a la cantidad total de imagenes, para posicionarse en la última
        page = cantImagenes;
        //Se calcula el espacio que se tiene que mover para mostrar a la última imagen
        espacioAmover = anchoImagen * (cantImagenes - 1);
        //Se le da el espacio a mover al ANIMATE
        $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      } else {
          //Si no se descuenta una posicion a Page
          page--;
          //Se pregunta si el espacio a mover es == al ancho de imagen * posición de la imagen
          if (espacioAmover == anchoImagen * page) {
              //El espacio a mover se iguala al anchoImagen * (la página que se quiere mostrar - 1) para ir una posición atrás.
              //Es decir, si estamos en -200px de posición, hay que ir a -100px.
              //Entonces espacioAmover = a 100px (ancho de imagen) * (2 (page) - 1); Porque la imagen 2 está en la posición -100px.
              espacioAmover = anchoImagen * (page - 1);
          } else {
              espacioAmover = anchoImagen * page;
          }
          //Se asigna el espacioAmover al ANIMATE
          $(slider + " .content-imagen").animate({ left: espacioAmover + "px" }, tiempoDesliz);
      }

      //Para hacer responsive al SLIDER.
      $(window).resize(function () {
        let anchoImagen = $(slider + " .content-imagen li img").width();
        let espacioAmover = 0;
        espacioAmover = anchoImagen * (page - 1);
        $(slider + " .content-imagen").css("left", espacioAmover + "px");
      });
    });
  }; //funcion slider ();

  //Primer slider, por defecto abierto
  sliderFunction("#slider-1");

  //Ubico el item del listado (menu de sliders) en el que hago click
  $(".item-category").click(function (e) {
    let li = e.target.parentNode;
    //Recorro todo el menú y le remuevo la clase ".item-active" a todos
    $(".item-container").each(function () {
      $(".item-container").removeClass("item-active");
    });
    //Le agrego la clase ".item-active" al que se cliqueó
    $(li).addClass("item-active");

    //Preparo la letiable con el ID del slider que corresponde al item cliqueado
    slider = "#slider-" + li.id;
    //Remuevo de todos los slider la clase ".slider-active"
    $(".container-all-slider > div").each(function () {
        $(".container-all-slider > div").removeClass("slider-active");
    });

    //Le agrego la clase ".slider-active" al slider correspondiente al item cliqueado
    $(slider).addClass("slider-active");

    //Hago funcionar el slider con el ID correspondiente al slider en cuestión
    sliderFunction(slider);
  });
}

function getBarraTooltip () {
    let scrollTooltip = function scrollTooltip() {
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
