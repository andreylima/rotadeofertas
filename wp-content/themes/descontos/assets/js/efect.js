
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
  


$(".chosen-select").chosen().change(function(selectors){ 






var selectors = new Array();


$('.search-choice span').each(function(){
    
   
 selectors.push(".".concat($(this).text()));    

});


if (selectors.length == 0)
{


alert("teste");
$('#container').isotope({ filter: "*" });

exit;

};


if (selectors.length > 0 ) {

filters = selectors.join(" ");

$('#container').isotope({ filter: filters });


selectors = [];


}








  });





});