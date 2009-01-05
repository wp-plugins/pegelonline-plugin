<?php
/*
Plugin Name: PegelOnline-Plugin
Plugin URI: http://www.daburna.de/blog/2008/12/30/pegelonline-plugin/
Description: Bindet den Pegelstand von Gewässern in deinen Blog ein.
Version: 0.0.1
Author: Oliver Wunder 
Author URI: http://www.daburna.de/


*/

$ow_pegelonline_nr_field = get_option('ow_pegelonline_nr_field');
 
if ('insert' == $HTTP_POST_VARS['action'])
{
    update_option("ow_pegelonline_nr_field",$HTTP_POST_VARS['ow_pegelonline_nr_field']);
}
 
// Innerhalb von the_loop reicht das

function ow_pegelonline() {

	?>
	<object type="text/html" data="http://www.pegelonline.wsv.de/charts/OnlineVisualisierungGanglinie?pegelnummer=<?=get_option("ow_pegelonline_nr_field");?>&imgBreite=150&imgHoehe=200&schriftPegelname=6&schriftLetzterWert=6&anzeigeUeberschrift=false&textUnten=" style="height:300px; width:230px;"></object>       
	<?php

} // Ende Funktion ow_pegelonline()
 
function ow_pegelonline_option_page() {
?>
 
<!-- Start Optionen im Adminbereich (xhtml) -->
  <div class="wrap">
    <h2>PegelOnline-Plugin Optionen</h2>
    <p>
    Dies ist eine frühe Version des PegelOnline Plugins. Hiermit lassen sich aktuelle Pegelstände von Gewässern im Blog einbinden. Die Daten stammen von <a href="http://www.pegelonline.wsv.de/" title="PEGELONLINE"S>PEGELONLINE</a>.
    Um das Plugin nutzen zu können, mußt du als erstes eine Pegelnummer eingeben. Diese findest du auf der Website von PEGELONLINE.
    </p>
    <p>
    Mit dem folgendem Befehl kannst du nun den aktuellen Pegelstand in deinem Blog einbinden: <strong>&lt;?php if (function_exists('ow_pegelonline')) {  ow_pegelonline();} ?&gt</strong>    
    </p>
    <form name="form1" method="post" action="<?=$location ?>">
      <label for="ow_pegelonline_nr_field">Pegelnummer:</label><input name="ow_pegelonline_nr_field" value="<?=get_option("ow_pegelonline_nr_field");?>" type="text" id="ow_pegelonline_nr_field" /> <br />
      <input type="submit" class="button-primary" value="Speichern" />
      <input name="action" value="insert" type="hidden" />
    </form>
  </div>

<?php
} // Ende Funktion ow_pegelonline_option_page()
 
// Adminmenu Optionen erweitern
function ow_pegelonline_add_menu() {
  add_option("ow_pegelonline_nr_field","9650072"); // optionsfield in Tabelle TABLEPRÄFIX_options
  add_options_page('PegelOnline-Plugin', 'PegelOnline', 9, __FILE__, 'ow_pegelonline_option_page'); //optionenseite hinzufügen
}
 
// Registrieren der WordPress-Hooks
add_action('admin_menu', 'ow_pegelonline_add_menu');
?>