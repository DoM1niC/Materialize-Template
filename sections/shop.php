<section class="padding" >
        <div id="show" class="container section scrollspy">
            <div class="row">
                <div class="col s12">
                    <div class="left-align">
                        <h2>Shop</h2>
                    </div>
                </div>
        <div class="col s12 m12">
          <div class="card-panel">
      <table class="responsive-table">
        <thead>
          <tr>
              <th><h5>Produktbild</h5></th>
              <th><h5>Name</h5></th>
              <th><h5>Preis</h5></th>
          </tr>
        </thead>
        <tbody>
      <?php include("shop_products.php"); ?>  
<?php
        foreach ($store[$section] as $items) {
            foreach ($items as $type=>$item) {
                if ($section=="stuff") {
		$attr=$item->attributes();
                    echo '<tr>';
                    echo '<td width="30%"><img width="100%" class="materialboxed img-rounded" src="'.$item->image.'" </img></td>';
                    echo '<td width="15%"><h5 style="margin-bottom:14px">'.$item->name.'</h5><br>EAN: '.$attr['barcode'];'</br></td>';
                    echo '<td width="10%"><h5 class="">'.$item->price.'€</h5><br>&nbsp;</br></td>';
                    echo '<td width="6%"><form style="margin-bottom:45px" class="center-align" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" /><input name="hosted_button_id" type="hidden" value="YOUR PAYPAL CODE" /></strong> <table class=" aligncenter"> <tbody> <tr> <td><strong><input name="on0" type="hidden" value="'.$item->name.'" /></td> </tr> <tr> <td><select name="os0"> <option value="Option 1">'.$item->price.' EUR</option>  </select></td> </tr> </tbody> </table> <strong><input name="currency_code" type="hidden" value="EUR" /></strong><input alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal." name="submit" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_buynowCC_LG.gif" type="image" /></strong> <strong> <img class="aligncenter" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form><br>&nbsp;</br></td>';
                    echo '</tr>';
                }
        
        ?>
        <?php
    }
}
?>         
        </tbody>
      </table>
                        </div>
        </div>
        </div>
</section>