=== PegelOnline-Plugin ===
Contributors: daburna
Donate link: https://www.paypal.com/de/cgi-bin/webscr?cmd=_flow&SESSION=HIThLCeNy6Ejvz8Fp0E3nBCmHfwYLNQaZn9I1Q6nVxQVSNisNxeRpIzkiAK&dispatch=5885d80a13c0db1fb6947b0aeae66fdb090c3508df63c7a078883ba93cc8aafe
Tags: embedding, water level, water, water gage, GIS, Pegel, Gewässer, Fluß, Fluss, Meer, Hydrologie, hydrology, Geographie, geography, Wasser, monitoring
Requires at least: 2.0.0
Tested up to: 2.8
Stable tag: 0.0.4

== Description ==

A plugin for monitoring the water level of e.g. a river into your blog. Works only with water level in Germany, so the following instructions 
are in German.

Das PegelOnline-Plugin bindet den Pegelstand von Gewässern im Blog ein. Die Daten stammen von gewässerkundlichen Informationssystem der Wasser- 
und Schifffahrtsverwaltung des Bundes.

== Installation ==

Die Datei pegelonline.php in den wp-content/plugins Ordner ihrer WordPress-Installation entpacken. Danach das Plugin aktivieren. Im Menü Einstellungen 
können nun Parameter für das PegelOnline-Plugin eingegeben werden.

== Using the plugin ==

An einer beliebigen Stelle im Blog <?php if (function_exists('ow_pegelonline')) { ow_pegelonline();} ?> einsetzen.


== Changelog ==

= 0.0.4 - 31.07.2009 =
* Infotext überarbeitet
+ Hinweis aus Probleme mit Opera
+ Changelog hinzugefügt

= 0.0.3 - 07.01.2009 =
+ Breite und Höhe konfigurierbar

= 0.0.2 - 31.12.2008 =
+ Vorschau
+ Überschrift
+ Optionen in Tabellenform

= 0.0.1 - 30.12.2008 =
+ Initialzündung