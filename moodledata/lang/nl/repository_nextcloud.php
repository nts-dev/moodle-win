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
 * Strings for component 'repository_nextcloud', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   repository_nextcloud
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Intern en extern';
$string['cannotconnect'] = 'De gebruiker kan niet worden geverifieerd. Meld je aan en upload het bestand.';
$string['chooseissuer'] = 'Uitgever';
$string['chooseissuer_help'] = 'Als je een nieuwe uitgever wil toevoegen, ga dan naar Sitebeheer / Server / OAuth 2-services.';
$string['configplugin'] = 'Nextcloud-configuratie';
$string['configuration_exception'] = 'Er is een fout opgetreden in de configuratie van de OAuth 2-client: {$a}';
$string['contactadminwith'] = 'De gevraagde actie kan niet worden uitgevoerd. Als dit herhaaldelijk gebeurt, neem dan contact op met de sitebeheerder met de volgende aanvullende informatie: <br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Het gevraagde bestand kan niet worden verplaatst in de map {$a}.';
$string['defaultreturntype'] = 'Standaard retour type';
$string['endpointnotdefined'] = 'Eindpunt {$a} niet gedefinieerd.';
$string['external'] = 'Extern (alleen links opgeslagen in Moodle)';
$string['filenotaccessed'] = 'Het gevraagde bestand kan niet worden geopend. Controleer of je een geldig bestand heeft gekozen en of je geautoriseerd bent met het juiste account.';
$string['fileoptions'] = 'De types en standaarden van teruggezonden bestanden kan hier geconfigureerd worden. Merk op dat alle bestanden die extern gelinkt zijn aangepast zullen worden, zodat de Moodle systeem-account eigenaar is.';
$string['foldername'] = 'Naam van de map, gemaakt in de privéruimte van Nextcloud-gebruikers, die alle toegangsgestuurde koppelingen bevat.';
$string['foldername_help'] = 'Om ervoor te zorgen dat gebruikers bestanden vinden die met hen zijn gedeeld, worden gedeelde mappen in een specifieke map opgeslagen. <br>
Deze instelling bepaalt de naam van de map. Het wordt aanbevolen om een naam te kiezen die is gekoppeld aan uw Moodle-instantie.';
$string['internal'] = 'Intern (bestanden opgeslagen in Moodle)';
$string['invalidresponse'] = 'Ongeldige server-reactie.';
$string['issuervalidation_invalid'] = 'Momenteel is de uitgever {$a} actief, maar deze implementeert niet alle benodigde eindpunten. De opslagruimte zal niet werken.';
$string['issuervalidation_valid'] = 'Momenteel is de uitgever van {$a} actief.';
$string['issuervalidation_without'] = 'U hebt nog geen Nextcloud-server geselecteerd als uitgever van OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Bekijk Nextcloud';
$string['noclientconnection'] = 'De OAuth-clients kunnen niet worden verbonden.';
$string['no_right_issuers'] = 'Geen van de bestaande uitgevende instellingen implementeren alle vereiste eindpunten. Registreer een geschikte uitgever.';
$string['notauthorized'] = 'Je bent niet gemachtigd om dit verzoek uit te voeren. Zorg ervoor dat je bent geverifieerd met het juiste account.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link naar OAuth 2-servicesconfiguratie"> OAuth 2-servicesconfiguratie </a>';
$string['pathnotcreated'] = 'Map pad {$a} kon niet worden gemaakt in het systeemaccount.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud-opslagruimte';
$string['privacy:metadata'] = 'De invoegtoepassing Nextcloud slaat geen persoonlijke gegevens op en verzendt geen gebruikersgegevens naar het externe systeem.';
$string['request_exception'] = 'Een aanvraag voor  {$a->instance} is mislukt. {$a->errormessage}';
$string['requestnotexecuted'] = 'Het verzoek kon niet worden uitgevoerd. Als dit herhaaldelijk gebeurt, neem dan contact op met de sitebeheerder.';
$string['right_issuers'] = 'De volgende uitgevers implementeren de vereiste eindpunten:  <br> {$a}';
$string['supportedreturntypes'] = 'Ondersteunde bestanden';
