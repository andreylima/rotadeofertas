<?php 

get_header(); 

?>
<?php

$tags = array('tenis', 'nike', 'verde', 'camisa','jeans','short');


?>
<div class="conteudo">

      

        <div class="align-center">
            <h1 class="label-search">
             Digite no campo o que você procura.      
            </h1>
          
          <select data-placeholder="Nome, marca ou características do produto.." class="chosen-select" multiple style="width:350px;" tabindex="4">
            <option value=""></option>
            <?php
                  foreach ($tags as $tag) {
                        echo "<option value=".$tag.">".$tag."</option>";
                  }

            ?>
            </select>
        </div>

        <div id="container" class="isotope">
              <?php

                  foreach ($tags as $tag ) {
                        echo "<div class='".$tag." item' data-filter='.".$tag."'>".$tag."</div>";
                  }

              ?>
        </div>
      

      
     
  
</div>
 

<?php 

get_footer(); 

?>
