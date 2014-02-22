<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:


$PluginInfo['FootBox'] = array(
   'Name'=>'FootBox',
   'Description' => "This plugin adds content boxes at the foot of the page ",
   'Version' => '1.0',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class FootBox_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }

//comment out any function you do not want the radio to show in

public function DiscussionsController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');
}
public function DiscussionController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');

} 
public function CategoriesController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');

}
public function CategoryController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');

}
public function ProfileController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');

}
public function ActivityController_Render_Before($Sender) {
$Sender->AddJsFile('plugins/FootBox/footbox.js');

}             
//public function PluginController_Render_Before($Sender) {
//$Sender->AddJsFile('plugins/FootBox/footbox.js');

//}   















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
