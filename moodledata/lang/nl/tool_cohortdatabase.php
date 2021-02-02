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
 * Strings for component 'tool_cohortdatabase', language 'nl', branch 'MOODLE_35_STABLE'
 *
 * @package   tool_cohortdatabase
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['createusers_auth'] = 'Authenticatie';
$string['createusers_auth_desc'] = 'Het authenticatietype dat voor deze gebruikers ingesteld moet worden.';
$string['createusers_email'] = 'Extern veldnaam e-mail';
$string['createusers_email_desc'] = 'De naam van het veld in de de externe tabel dat het e-mailadres bevat';
$string['createusers_firstname'] = 'Extern veldnaam voornaam';
$string['createusers_firstname_desc'] = 'De naam van het veld in de externe tabel dat de voornaam bevat';
$string['createusers_idnumber'] = 'Extern veldnaam id-nummer';
$string['createusers_idnumber_desc'] = 'De naam van het veld in de externe tabel dat het ID-nummer bevat';
$string['createusers_lastname'] = 'Extern veldnaam achternaam';
$string['createusers_lastname_desc'] = 'De naam van het veld in de externe tabel dat de achternaam bevat';
$string['createusers_username'] = 'Extern veldnaam gebruikersnaam';
$string['createusers_username_desc'] = 'De naam van het veld in de externe tabel dat de gebruikersnaam bevat';
$string['dbencoding'] = 'Databank encodering';
$string['dbhost'] = 'Databank host';
$string['dbhost_desc'] = 'IP-adres of hostname van de database server. Gebruik een systeem-DSN-naam als je ODBC gebruikt.';
$string['dbname'] = 'Databanknaam';
$string['dbname_desc'] = 'Leeg laten als je een DSN-naam gebruikt in databank host.';
$string['dbpass'] = 'Databank wachtwoord';
$string['dbsetupsql'] = 'Databank setup-commando';
$string['dbsetupsql_desc'] = 'SQL-commando voor speciale databank setup, dikwijls gebruikt om communicatie-encoding in te stellen voor MySQL en PostrgreSQL <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Gebruik sybase quotes';
$string['dbsybasequoting_desc'] = 'De Sybase-manier van escaping van enkele quotes - nodig voor Oracle, MS SQL en sommige andere databanken. Niet gebruiken voor MySQL!';
$string['dbtype'] = 'Databank driver';
$string['dbtype_desc'] = 'ADOdb databank driver naam, type van de externe databank.';
$string['dbuser'] = 'Databank gebruiker';
$string['debugdb'] = 'Database-fouten opsporen';
$string['debugdb_desc'] = 'Debug ADOdb-connectie met de externe databank - gebruik dit wanneer je een lege pagina krijgt bij het aanmelden of wanneer een en ander niet werkt. Niet gebruiken op productiesites!';
$string['keepincohort'] = 'Hou in site-groep';
$string['localuserfield'] = 'Lokaal gebruikersveld';
$string['minrecords'] = 'Minimaal aantal records';
$string['minrecords_desc'] = 'Voorkomt het starten van de synchronisatie als het aantal records in de externe tabel kleiner dan dit aantal is. Hiermee wordt voorkomen dat gebruikers uit de site-groepen verwijderd worden wanneer de externe tabel leeg is.';
$string['pluginname'] = 'Site-groepen databank';
$string['pluginname_desc'] = 'Je kunt  nagenoeg elke externe databank gebruiken om je site-groepen te controleren.';
$string['privacy:metadata'] = 'De site-groepen databank-plugin bewaart geen persoonlijke gegevens.';
$string['remotecohortdescfield'] = 'Externe veldnaam beschrijving';
$string['remotecohortdescfield_desc'] = 'De naam van het veld in de externe tabel die we gebruiken om items in de site-groepentabel te koppelen.';
$string['remotecohortidfield'] = 'Externe veldnaam site-groepID';
$string['remotecohortidfield_desc'] = 'De veldnnaam in de externe tabel die we gaan gebruiken om te koppelen naar items in de site-groepentabel';
$string['remotecohortnamefield'] = 'Externe veldnaam site-groep naam';
$string['remotecohortnamefield_desc'] = 'De veldnaam in de externe tabel die we gaan gebruiken om items in de site-groepentabel te koppelen.';
$string['remotecohorttable'] = 'Externe gebruiker site-groepentabel';
$string['remotecohorttable_desc'] = 'Geef de naam op van de table die de lijst met gebruikers in site-groepen.';
$string['remoteuserfield'] = 'Externe veldnaam gebruikers';
$string['remoteuserfield_desc'] = 'De veldnaam in de externe tabel die we gebruiken om items te koppelen in de gebruikerstabel.';
$string['removedaction'] = 'Actie wanneer extern verwijderd';
$string['removedaction_desc'] = 'Selecteer een actie die uitgevoerd moet worden wanneer een gebruiker verdwijnt van de externe bron voor de site-groepen. Merk op dat sommige gebruikersgegevens en instellingen worden verwijderd uit de cursussen omdat dit ook samenhangt met aanmelding in cursussen.';
$string['removefromcohort'] = 'Verwijder uit site-groep';
$string['settingscreateusers'] = 'Gebruikers aanmaken';
$string['settingscreateusers_desc'] = 'Maak gebruikers wanneer die niet bestaan.';
$string['settingsheaderdb'] = 'Verbinding met externe databank';
$string['settingsheaderlocal'] = 'Koppelen lokaal veld';
$string['settingsheaderremote'] = 'Extern site-groepen synchroniseren';
$string['sync'] = 'Synchroniseer site-groepen met een externe databank';
