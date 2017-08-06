jQuery(function($) {
  $('.item-img').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        return item.el.attr('title') + '&middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank"></a>';
      }
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }    
  });

  $("#new-product-slider").lightSlider({
    item:4,
    speed:600,
    auto: false,
    loop: false,
    responsive : [
        {
            breakpoint:1200,
            settings: {
                item:3,
              }
        },
        {
            breakpoint:768,
            settings: {
                item:1,
              }
        }
    ]       
  });
      
  $(".selling-product-slider").lightSlider({
    item:4,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    loop: false,
    auto: false,
    responsive : [
        {
            breakpoint:1200,
            settings: {
                item:3,
              }
        },
        {
            breakpoint:768,
            settings: {
                item:1,
              }
        }
    ]       
  });
  
  $("#sales-product-slider").lightSlider({
    item:4,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    loop: false,
    auto: false,
    responsive : [
        {
            breakpoint:1200,
            settings: {
                item:3,
              }
        },
        {
            breakpoint:768,
            settings: {
                item:1,
              }
        }
    ]       
  });
  
  $("#type-product-slider").lightSlider({
    item:4,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    loop: false,
    auto: false,
    responsive : [
        {
            breakpoint:1200,
            settings: {
                item:3,
              }
        },
        {
            breakpoint:768,
            settings: {
                item:1,
              }
        }
    ]       
  });
  
  $("#customer-slider").lightSlider({
    item:8,
    easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    speed:600,
    loop: true,
    auto: true,
    responsive : [
        {
            breakpoint:1200,
            settings: {
                item:7,
              }
        },
        {
            breakpoint:768,
            settings: {
                item:5,
              }
        },
        {
            breakpoint:450,
            settings: {
                item:3,
              }
        }
    ]       
  });

  $("#mmenu").mmenu({
       // options
    }, {
       // configuration
       classNames: {
           selected: "active"
       }
    });
});