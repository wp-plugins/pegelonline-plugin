=== PegelOnline-Plugin ===
Contributors: daburna
Donate link: http://www.daburna.de/
Tags: embedding, water level, water, water gage, GIS, Pegel, Gewässer, Fluß, Fluss, Meer, Hydrologie, hydrology, Geographie, geography, Wasser  
Requires at least: 2.0.0
Tested up to: 2.7
Stable tag: 0.0.2

== Description ==

A plugin that embedds the water level of e.g. a river into your blog. Works only with water level in Germany, so the following instructions 
are in German.

Das PegelOnline-Plugin bindet den Pegelstand von Gewässern im Blog ein. Die Daten stammen von gewässerkundlichen Informationssystem der Wasser- 
und Schifffahrtsverwaltung des Bundes.

== Installation ==

Die Datei pegelonline.php in den wp-content/plugins Ordner ihrer WordPress-Installation entpacken. Danach das Plugin aktivieren. Im Menü Einstellungen 
können nun Parameter für das PegelOnline-Plugin eingegeben werden.

== Using the plugin ==

An einer beliebigen Stelle im Blog <?php if (function_exists('ow_pegelonline')) { ow_pegelonline();} ?> einsetzen.