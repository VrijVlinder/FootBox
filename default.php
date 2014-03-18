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
   'Description' => "This plugin adds html content boxes at the foot of the page where you can place ads or extra content of any kind just edit the html file. Adding the link to your custom theme in the html file will make the boxes match your theme.",
   'Version' => '1.3',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class FootBox_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }

//comment out or copy any function you do not want or want the footbox to show in

public function DiscussionsController_Render_Before($Sender) {
if(IsMobile()){
 return;
}
else
{
$Sender->AddJsFile('plugins/FootBox/footbox.js');
$Sender->AddCssFile('plugins/FootBox/footbox.css');
}
}
public function DiscussionController_Render_Before($Sender) {

} 
public function CategoriesController_Render_Before($Sender) {
if(IsMobile()){
 return;
}
else
{
$Sender->AddJsFile('plugins/FootBox/footbox.js');
$Sender->AddCssFile('plugins/FootBox/footbox.css');
}
}
public function CategoryController_Render_Before($Sender) {

}
public function ProfileController_Render_Before($Sender) {

}
public function ActivityController_Render_Before($Sender) {


}             
public function PluginController_Render_Before($Sender) {


}   

public function EntryController_Render_Before($Sender) {


}             















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
