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
 * Strings for component 'repository_onedrive', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   repository_onedrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Toegang';
$string['both'] = 'Intern en extern';
$string['cachedef_folder'] = 'OneDrive bestand ID\'s voor mappen in de systeemaccount';
$string['configplugin'] = 'Configureer de OneDrive plugin';
$string['confirmimportskydrive'] = 'Weet je zeker dat je alle bestanden van de Microsoft Skydrive opslagruimte in de Microsoft OneDrive opslagruimte? De Microsoft OneDrive opslagruimte moet geconfigureerd zijn en werken zodat de geïmporteerde bestanden zouden werken als voorheen. Waarschuwing: deze actie kan niet ongedaan gemaakt worden!';
$string['defaultreturntype'] = 'Standaard teruggegeven type';
$string['external'] = 'Extern (enkel links worden in Moodle bewaard)';
$string['fileoptions'] = 'De types en standaarden voor teruggegeven bestanden is hier configureerbaar. Merk op dat alle bestanden die extern gelinkt zijn zullen aangepast worden zodat de eigenaar de Moodle systeem-account is.';
$string['importskydrivefiles'] = 'Importeer bestanden van Microsoft SkyDrive';
$string['internal'] = 'Intern (bestanden bewaard in Moodle)';
$string['issuer'] = 'OAuth 2 service';
$string['issuer_help'] = 'Selecteer de OAuth 2 service die geconfigureerd is om te communiceren met de OneDrive API. Als deze service nog niet bestaat, dan zul je die moeten aanmaken.';
$string['mysitenotfound'] = 'Je hebt nog nooit aangemeld in OneDrive. Je moet minstens één keer aanmelden in OneDrive voor deze met Moodle kan gebruikt worden.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link naar OAuth 2 services-configuratie">OAuth 2 services-configuratie</a>';
$string['onedrive:view'] = 'Bekijk OneDrive';
$string['owner'] = 'Eigenaar: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'De Microsoft OneDrive opslagruimte bewaart tijdelijk toegangsrechten en geeft gebruikersgegevens door van Moodle naar het externe systeem.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'De Microsoft OneDrive met een tijdelijk toegangsrecht itemID';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'De Microsoft OneDrive met een tijdelijk toegangsrecht rechtenID';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'De Microsoft OneDrive met een tijdelijk toegangsrecht aanmaakdatum/tijd';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'De Microsoft OneDrive met een tijdelijk toegangsrecht wijzigingsdatum/tijd';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'De ID van de gebruiker die het tijdelijke toegangsrecht van de Microsoft OneDrive wijzigt.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'De Microsoft OneDrive  zoektekst van de gebruiker.';
$string['removetempaccesstask'] = 'Verwijder tijdelijke schrijftoegang van gecontroleerde links.';
$string['searchfor'] = 'Zoeken naar {$a}';
$string['servicenotenabled'] = 'Toegang niet geconfigureerd.';
$string['skydrivefilesexist'] = 'Er zijn bestanden gevonden in de Microsoft Skydrive opslagruimte. Deze opslagruimte wordt niet langer ondersteund door Microsoft, maar de bestanden kunnen nog geïmporteerd worden in de Microsoft OneDrive opslagruimte.';
$string['skydrivefilesimported'] = 'Alle bestanden werden geïmporteerd uit Microsoft SkyDrive';
$string['skydrivefilesnotimported'] = 'Sommige bestanden konden niet geïmporteerd worden uit Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Ondersteunde bestanden';
