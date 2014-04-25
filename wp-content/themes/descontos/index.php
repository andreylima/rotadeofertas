<?php 

get_header(); 

?>
<?php

$tag1 = array("tênis", "verde", "branco");

$tag2 = array("tênis", "azul", "branco");


$item1 = array(
      'produto' => 'TÊNIS NIKE BISCUIT CANVAS', 'marca' => 'NIKE', 'preco_antigo' => '129,90' , 'preco_atual' => '109,90' ,   'imagem' => 'tenis.jpg', 'tags' => $tag1
  );

$item2 = array(
      'produto' => 'TÊNIS PUMA AIRBAG MID', 'marca' => 'PUMA', 'preco_antigo' => '129,90' , 'preco_atual' => '109,90', 
      'imagem' => 'tenis2.jpg', 'tags' => $tag2
  );

$items = array($item1, $item2);


?>
<div class="conteudo">

     

        <div class="align-center">
        <div class="label-search frase1">
             SÓ PRODUTOS COM DESCONTO.      
            </div>
            <div class="label-search frase2">
             DIGITE O QUE VOCÊ PROCURA:      
            </div>
            <div>
              
            
          
          <select data-placeholder="NOME, MARCA OU CARACTERÍSTICAS DO PRODUTO.." class="chosen-select" multiple style="width:350px;" tabindex="4">
            <option value=""></option>
            <?php
                  foreach ($items as $item) {
                      $item["tags"][] = $item["marca"];
                        foreach ($item["tags"] as $tag) {
                          echo "<option value=".$tag.">".$tag."</option>";
                        }
                  };

            ?>
            </select>
            </div>
        </div>

        <div id="container" class="isotope">
              <?php

                  foreach ($items as $item ) {
                      foreach ($item["tags"] as $tag) {
                        $tags[] = $tag;
                      }

                        $tags[] = $item['marca'];
                        $pic = esc_url( get_stylesheet_directory_uri() . '/assets/img/'.$item["imagem"] );
                        echo "<div class='".implode(' ', $tags)." item' data-filter='.".implode(' .', $tags)."'><span class='marca-item'>".$item['marca']."</span><img class='pic' src=".$pic."></img><span class='desc-produto'>".$item['produto']."</span><span class='preco_antigo'>R$ ".$item['preco_antigo']."</span><span class='preco-atual'>R$ ".$item['preco_atual']."</span></div>";

                        $tags = "";
                  }

              ?>
        </div>
      

      
     
  
</div>
 

<?php 

get_footer(); 

?>
