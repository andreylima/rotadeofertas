
  jQuery(function ($) {

  document.observe('dom:loaded', function(evt) {
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  });

$(".chosen-select").chosen({no_results_text: "Desculpe-nos, mas não temos resultados para essa busca:"}); 
  

$(".chosen-select").chosen().change(function(){ 

var selector = new array();

$('.search-choice span').each(function(selector){
    
    selector[0] = "teste"

});

alert(selector);
// $('#container').isotope({ filter: selector });


  });





});