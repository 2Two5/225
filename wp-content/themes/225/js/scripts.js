$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in-up-sm',
    outClass: 'fade-out',
    inDuration: 700,
    outDuration: 500,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    unSupportCss: [
      'animation-duration',
      '-webkit-animation-duration',
      '-o-animation-duration'
    ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body'
  });

  $(window).scroll(function() {
        if ($(document).scrollTop() > 200) {
            $('.home .header .menu-logo').css({
              opacity: '1',
              transition : 'opacity 1s ease-in-out'
          });
        }
        else {
            $('.home .header .menu-logo').css('opacity', '0');
        }
    });

    $( ".icon-div" ).mouseover(function(){
      $("p",this).css('color', '#e3b55b')
    });
    $( ".icon-div" ).mouseout(function(){
      $("p",this).css('color', '#ffffff')
    });

    $( "#web-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#webdev-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#webdev-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#seo-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#seo-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#seo-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#analytics-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#analytics-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#analytics-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#cad-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#cad-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#cad-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#directory-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#directory-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#directory-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#media-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#media-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#media-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#partner-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#partner-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#partner-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#repman-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#repman-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#repman-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $( "#scheduler-click" ).click(function() {
      if ($("#serviceContent div").is(':visible')) {
        $("#serviceContent .collapsible").slideUp( 500, function() {
          // Animation complete.
        });
        $( "#scheduler-inner" ).delay(500).slideDown( 500, function() {
          // Animation complete.
        });
      } else {
        $( "#scheduler-inner" ).slideDown( 500, function() {
          // Animation complete.
        });
      }
    });

    $('.toggle').click(function(e) {
      	e.preventDefault();
        var $this = $(this);

        $('.circle-plus').siblings().find('.opened').removeClass('opened');
        if ($($this).hasClass('opened')) {
          $($this).removeClass('opened');
        } else {
          $($this).addClass('opened');
        }

        $this.toggleClass('closed');

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
});
