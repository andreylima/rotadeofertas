
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

var chosenField = $(".chosen-select");

chosenField.chosen({no_results_text: "Desculpe-nos, mas não temos resultados para essa busca:"}); 
  


$(".chosen-select").chosen().change(function(){ 

var selectors = new Array();


$('.chosen-select').find('option:selected').each(function(){
    
   
 selectors.push(".".concat($(this).val()));    

});




if (selectors.length > 0 ) {

filters = selectors.join("");

$('#container').isotope({ filter: filters });


selectors = [];

}

if ($('.chosen-select').find('option:selected').val() == null) { $('#container').isotope({ filter: "*" }); };




  });





});