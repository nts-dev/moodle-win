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
 * Strings for component 'local_mailtest', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   local_mailtest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Toon altijd een log van communicatie met de mail-server, zelfs als er geen fouten opgetreden zijn.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['errorcommunications'] = 'Moodle kon niet communiceren met je mailserver.</p><p><strong>Wat je kan doen:</strong></p><p>Begin met het controleren van jouw Moodle-site<a href="{$a}" target="_blank">SMTP e-mailinstellingen</a>.</p><p>Als die in orde lijken, controleer dan je SMTP-server en/of firewall-instellingen om jezelf er van te verzekeren dat ze geconfigureerd zijn om SMTP-verbindingen te aanvaarden van jouw Moodle-server en van jouw niet-beantwoorden e-mailadres. Bekijk voor meer hulp de FAQ-sectie in de documentatie.';
$string['errorsend'] = 'Het test e-mailbericht kon niet afgeleverd worden bij de mailserver. Controleer je <a href="../../admin/settings.php?section=messagesettingemail" target="blank">e-mailinstellingen</a>.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Afzender e-mailadres (from)';
$string['heading'] = 'E-mail configuratietest';
$string['message'] = '<p>Dit is een testbericht. Je kunt het negeren</p>
<p>Als je dit bericht krijgt, dan betekent dit dat je de e-mailinstellingen van je Moodle-site juist geconfigureerd hebt.</p>
<hr><p><strong>Bijkomende gebruikersinformatie:</strong></p>
<ul>
<li><strong>Registratiestatus:</strong> {$a->regstatus}</li>
<li><strong>Voorkeurstaal:</strong> {$a->lang}</li>
<li><strong>Gebruikte web browser:</strong> {$a->browser}</li>
<li><strong>Bericht verstuurd van:</strong> {$a->referer}</li>
<li><strong>Moodle versie :</strong> {$a->release}</li>
<li><strong>IP-addres van de gebruiker:</strong> {$a->ip}</li>
</ul>';
$string['notregistered'] = 'Niet geregistreerd of niet aangemeld.';
$string['phpmethod'] = 'PHP standaard methode';
$string['pluginname'] = 'E-mail test';
$string['pluginname_help'] = 'E-mailtest zal de instellingen van deze Moodle site controleren door een test e-mail te versturen naar het adres dat je hier opgeeft. Enkel voor site-beheerders.';
$string['primaryadminemail'] = 'E-mail hoofdbeheerder';
$string['privacy:metadata'] = 'De e-mail test-plugin bewaart van geen enkele gebruiker persoonlijke gegevens.';
$string['recipientisrequired'] = 'Je moet het e-mailadres van de ontvanger opgeven.';
$string['registered'] = 'Geregistreerde gebruiker ({$a}).';
$string['sendmethod'] = 'E-mail verzendmethode';
$string['sendtest'] = 'Stuur een testbericht';
$string['sentmail'] = 'Moodle is er in geslaagd om het testbericht aan de SMTP-server af te leveren.';
$string['sentmailphp'] = 'Het Moodle testbericht is aanvaard door PHP Mail.';
$string['smtpmethod'] = 'SMTP-host: {$a}';
$string['toemail'] = 'Naar e-mailadres';
$string['youremail'] = 'Jouw email-adres';
