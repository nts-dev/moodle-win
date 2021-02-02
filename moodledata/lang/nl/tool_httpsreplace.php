<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_httpsreplace', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   tool_httpsreplace
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Voltooid';
$string['count'] = 'Aantal ingebedde inhoudsitems';
$string['disclaimer'] = 'Ik begrijp de risico\'s van deze handeling';
$string['doclink'] = 'HTTPS conversietool';
$string['doit'] = 'Conversie uitvoeren';
$string['domain'] = 'Problematisch domein';
$string['domainexplain'] = 'Wanneer een site van HTTP naar HTTPS wordt overgeschakeld, zal alle ingebedde HTTP-inhoud stoppen met werken. Met deze tool kun je automatisch HTTP-inhoud converteren naar HTTPS.

Voor het uitvoeren van deze conversie zal inhoud doorzocht worden om URL\'s te vinden die niet meer zullen werken na de conversie. Je kunt controleren of elke URL een HTTPS-alternatief heeft of anders alternatieve bronnen voor de inhoud zoeken.';
$string['domainexplainhelp'] = 'Volgende domeinen zijn gevonden in jouw inhoud, maar ze blijken geen HTTPS te ondersteunen. Na het overschakelen naar HTTPS zal de inhoud van deze sites niet meer getoond worden in Moodle voor gebruikers met veilige moderne browsers. Het is mogelijk dat dergelijke sites tijdelijk of permanent onbeschikbaar worden en niet meer zullen werken met gelijk welke beveiligingsinstelling. Ga enkel verder na het analyseren van deze resultaten en na vaststellen dat deze extern gehoste inhoud niet essentieel is. Opmerking; deze inhoud zou toch niet meer werken na het overschakelen naar HTTPS.';
$string['httpwarning'] = 'Deze instantie loopt nog op HTTP. Je kunt deze tool laten lopen en externe inhoud zal naar HTTPS overgeschakeld worden, maar interne inhoud zal HTTP blijven. Je zult deze tool opnieuw moeten laten lopen na het overschakelen naar HTTPS om interne inhoud te converteren.';
$string['notimplemented'] = 'Deze functie is niet geïmplementeerd in je databasedriver.';
$string['oktoprocede'] = 'De scan vind geen problemen met jouw inhoud. Je kunt verder gaan met het upgraden van HTTP-inhoud naar HTTPS.';
$string['pageheader'] = 'Upgrade URL\'s van extern gehoste inhoud naar HTTPS';
$string['pluginname'] = 'HTTPS conversietool';
$string['privacy:metadata'] = 'De HTTPS conversietool-plugin bewaart geen persoonlijke gegevens.';
$string['replacing'] = 'HTTP inhoud vervangen door HTTPS...';
$string['searching'] = '{$a} aan het zoeken';
$string['takeabackupwarning'] = 'Waarschuwing: na gebruik van deze tool kunnen wijzigingen niet ongedaan gemaakt worden. Het is aangewezen om een site-backup te maken voor je verder gaat, omdat er een klein risico is dat verkeerde inhoud wordt aangepast.';
$string['toolintro'] = 'Als je plant om jouw site naar HTTPS te converteren, dan kun je de a href="{$a}">HTTPS conversie-tool</a> gebruiken om jouw ingebedde inhoud te converteren naar HTTPS.';
