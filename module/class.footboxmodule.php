<?php if (!defined('APPLICATION')) exit();

class FootBoxModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Foot';
   }

   public function ToString() {  
     
      echo '
      <div class="box-holder">
    <div class="boxes">
      <div class="col-holder">
        <div class="col-one Box">
          <h1>Title Here</h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          eget nibh id enim laoreet euismod eget ac orci. Vestibulum anipsum
          primis in faucibus orci luctus.
          <a class="Button" href="/" target="_parent" title="information">More</a></p>
        </div>

        <div class="col-two Box">
          <h1>Title Here</h1>

          <p>Sed dignissim, felis at pharetra molestie, tellus nisi commodo
          lacus, at laoreet dui nunc eu nunc. In consequat varius
          adipiscing.
          <a class="Button" href="/" target="_parent" title="information">More</a></p>
        </div>

        <div class="col-three Box">
          <h1>Title Here</h1>

          <p>Aenean interdum, ante quis lacinia viverra, sapien mauris posuere
          dolor, interdum lacinia eros nunc in nunc. Maecenas eu arcu vel dui
          tincidunt sollicitudin.
          <a class="Button" href="/" target="_parent" title="information">More</a></p>
        </div>

        <div class="cl"></div>
      </div>

      <div class="cl"></div>
    </div>
  </div>

      ';


//You need to add the full url of your forum 
    
    
   }
}
