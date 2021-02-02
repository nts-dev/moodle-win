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
 * Strings for component 'local_staticpage', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   local_staticpage
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Forceer Apache mod_rewrite';
$string['apacherewrite_desc'] = 'Bied statische pagina\'s alleen aan met een schone URL, herschreven door Apache mod_rewrite. Zie README-bestand voor details.';
$string['cleanhtml'] = 'Schone HTML-code';
$string['cleanhtml_desc'] = 'Configureer of de HTML-code van de statische pagina moet worden opgeschoond (en daardoor worden speciale tags zoals <iframe> verwijderd). Zie README voor details.';
$string['cleanhtmlno'] = 'Nee, maak geen HTML-code schoon';
$string['cleanhtmlyes'] = 'Ja, maak HTML-code schoon';
$string['documentheadingsource'] = 'Gegevensbron van de documentkoptekst';
$string['documentheadingsource_desc'] = 'De gegevensbron van de documentkoptekst van de statische pagina';
$string['documentnavbarsource'] = 'Gegevensbron van de objecttitel\'s breadcrumb';
$string['documentnavbarsource_desc'] = 'De gegevensbron van de objecttitel\'s breadcrumb van de statische pagina (gebruikt in de "Navbar" van Moodle)';
$string['documents'] = 'Documenten';
$string['documents_desc'] = 'De .html bestanden met de HTML-code van de statische pagina\'s. Zie het README-bestand voor details.';
$string['documenttitlesource'] = 'Gegevensbron van de documenttitel';
$string['documenttitlesource_desc'] = 'De gegevensbron van de documenttitel van de statische pagina (gebruikt in de titelbalk van de browser)';
$string['documenttitlesourceh1'] = 'Eerste h1-tag in HTML-code (meestal kort na het openen van de body-tag)';
$string['documenttitlesourcehead'] = 'Eerste title-tag in HTML-code (meestal in de head-tag)';
$string['forcelogin'] = 'Forceer aanmelding';
$string['forcelogin_desc'] = 'Bied statische pagina\'s alleen aan aangemelde gebruikers of ook aan niet-aangemelde bezoekers. Dit gedrag kan specifiek worden ingesteld voor statische pagina\'s of kan worden ingesteld om Moodle\'s globale forcelogin-instelling te respecteren. Zie README voor details.';
$string['forceloginglobal'] = 'Respecteer de globale instelling $CFG->forcelogin';
$string['pagenotfound'] = 'Pagina niet gevonden';
$string['pluginname'] = 'Statische Pagina\'s';
$string['privacy:metadata'] = 'De plug-in voor statische pagina\'s biedt uitgebreide functionaliteit voor Moodle-beheerders, maar slaat geen persoonlijke gegevens op.';
$string['processcontent'] = 'Verwerk inhoud';
$string['processfilters'] = 'Verwerk filters';
$string['processfilters_desc'] = 'Configureer of Moodle-filters (met name het meertalige filter) verwerkt moeten worden wanneer de inhoud van de statische pagina\'s wordt aangeboden. Zie README voor details.';
$string['processfiltersno'] = 'Nee, verwerk geen filters';
$string['processfiltersyes'] = 'Ja, verwerk filters';
$string['settingspagelist'] = 'Lijst van statische pagina\'s';
$string['settingspagelistentryfilename'] = 'Het volgende documentbestand werd gevonden:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'Uit de bestandsnaam van het documentbestand heeft Moodle de volgende paginanaam afgeleid:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'De statische pagina is beschikbaar en kan gelinkt worden naar de volgende schone URL:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'De statische pagina is beschikbaar en kan gelinkt worden naar de volgende standaard URL:<br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Deze lijst toont alle statische pagina\'s die geüpload zijn naar het <ahref="{$a}"> statische pagina\'s documentgebied</a> en hun URL\'s';
$string['settingspagelistnofiles'] = 'Er zijn geen .html bestanden in het <a href="{$a}">statische pagina\'s documentgebied</a>, daarom zijn er geen statische pagina\'s die moeten worden afgeleverd. Zie README-bestand voor details.';
$string['upgrade_notice_2016020307'] = '<strong>UPGRADE MEDEDELING:</strong> De statische paginadocumentbestanden zijn verplaatst naar het nieuwe bestandsgebied binnen Moodle. U kunt de oude documentenmap {$a} nu verwijderen. Voor meer upgrade-instructies, vooral als u de meertalige functies van deze plug-in hebt gebruikt, zie README-bestand.';
