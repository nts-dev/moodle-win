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
 * Strings for component 'plagiarism_plagscan', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   plagiarism_plagscan
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allfileschecked'] = 'Controleer de status van alle documenten op de PlagScan-server';
$string['allowgroups'] = 'Categorieën toestaan';
$string['allowgroups_help'] = 'Geeft de categorienaam die je toestaat om PlagScan te gebruiken (vb: categorie1, categoerie2, ...). Laat het veld leeg om alle categorieën toe te staan.';
$string['always'] = 'Altijd';
$string['api_language'] = 'Rapporteertaal';
$string['api_language_help'] = 'Alle PlagScan-rapporten zullen in deze taal gedownload worden.';
$string['assignments'] = 'Opdrachten';
$string['autodel'] = 'Document automatisch bewaren';
$string['autodescription'] = 'Analyseer documenten automatisch wanneer de einddatum verstrijkt.';
$string['autodescriptionsubmitted'] = 'De bestanden zijn automatisch geüpload naar PlagScan op {$a} - schakel naar de modus \'manueel\' om individuele documenten opnieuw in te sturen';
$string['autostart'] = 'Start plagiaatcontrole automatisch';
$string['badcredentials'] = 'PlagScan kon de accountdetails niet herkennen - controleer of de server URL, gebruikersnaam ({$a->user}), API key, and versienummer ({$a->version}) correct zijn';
$string['callback_check'] = 'Controleer de callback-configuratie';
$string['callback_help'] = 'De callback-configuratie is belangrijk om de rapport resultaten te kunnen verkrijgen wanneer die gegenereerd zijn en om die te kunnen synchroniseren met de Moodle databank';
$string['callback_notchecked'] = 'De callback-configuratie is nog niet gecontroleerd';
$string['callback_setup'] = 'De callback is ingesteld';
$string['callback_working'] = 'De callback-configuratie is geaccepteerd';
$string['check'] = 'Controleer';
$string['checkallfilestatus'] = 'Update de status van alle ingestuurde bestanden';
$string['checkalltextstatus'] = 'Update de status van alle ingestuurde teksten';
$string['checkstatus'] = 'Status';
$string['checkthis'] = 'Stuur inhoud (online tekst) naar PlagScan';
$string['checkthis2'] = 'Inhoud (online tekst) opnieuw insturen naar PlagScan';
$string['checkthis3'] = 'Controleer status van online inhoud';
$string['compareinternet'] = 'Gegevensbeleid';
$string['connectionfailed'] = 'Verbinden met de PlagScan-server mislukt';
$string['cron_help'] = 'Als je de cronjob reset, dan kunnen bestanden twee keer naar PlagScan gestuurd worden';
$string['cron_normal'] = 'De cronjob-configuratie is geaccepteerd';
$string['cron_reset'] = 'De cronjob is gereset';
$string['cron_running1'] = 'De cronjob loopt sinds';
$string['cron_running2'] = 'Klik om te resetten';
$string['data_policy'] = 'Gegevensbeleid';
$string['datapolicyhelp'] = 'Deel mijn documenten voor analyse met (vergelijk met)';
$string['datapolicyhelp_help'] = 'Deel mijn documenten voor analyse met (vergelijk met)';
$string['docxemail'] = 'Genereer en mail een .docx-rapport';
$string['docxgenerate'] = 'Genereer enkel een .docx-rapport';
$string['docxnone'] = 'Genereer geen .docx-rapport';
$string['donotgenerate'] = 'Niet genereren';
$string['downloadreport'] = 'Download .docx-rapport';
$string['email_policy'] = 'E-mailbeleid';
$string['email_policy_always'] = 'Mail alle rapporten';
$string['email_policy_ifred'] = 'Enkel e-mailen als er een rood niveau is aangegeven';
$string['email_policy_never'] = 'Geen rapporten mailen';
$string['email_policy_notification_account'] = 'Meldingen voor nieuwe accounts';
$string['email_policy_notification_account_help'] = 'Door het <b>plaatsen van het vinkje</b> zullen alle nieuw gegenereerde <b>accounts </b> onmiddellijk naar jou gestuurd worden.';
$string['english'] = 'Engels';
$string['error_involving_assistant'] = 'Fout bij het ophalen van de assistent in de inzending';
$string['filechecked'] = 'Documentstatus gecontroleerd op de PlagScan server';
$string['filesassociated'] = 'Document zal geüploaded worden naar account \'{$a}\\';
$string['filesubmitted'] = 'Document \'{$a}\' is naar PlagScan gestuurd';
$string['filetypeunsupported'] = 'Het documenttype \'{$a}\' wordt niet ondersteund door de PlagScan-server';
$string['french'] = 'Frans';
$string['generaldatabase'] = 'Vergelijk met algemene databank';
$string['generateemail'] = 'Genereer en stuur e-mail';
$string['generateonly'] = 'Enkel genereren';
$string['german'] = 'Duits';
$string['handledocx'] = 'Docx-optie';
$string['if_plagiarism_level'] = 'Enkel rood plagiaatsniveau';
$string['individualaccounts'] = 'Individuele gebruikers';
$string['invalidupload'] = 'De PlagScan-server aanvaarde het bestand {$a->filename} niet. Het antwoord was: {$a->content}';
$string['maxfilesize'] = 'Maximum bestandsgrootte';
$string['max_file_size'] = 'Maximum bestandsgrootte';
$string['maxfilesize_help'] = 'Het bestand is te groot en kan niet geüpload worden. De aangeraden waarde is 1000000.';
$string['months'] = 'Na zes maand';
$string['myinstitution'] = 'Vergelijk met de databank van het instituut';
$string['never'] = 'Nooit';
$string['neverdelete'] = 'Nooit verwijderen';
$string['newexplain'] = 'Voor meer informatie over deze plugin, zie:';
$string['newrp_redirect'] = 'Je zult automatisch omgeleid worden';
$string['newrp_wait'] = 'Wacht even, we genereren de link';
$string['nodeadlinewarning'] = 'Waarschuwing: er is automatisch insturen naar PlagScan geselecteerd voor deze opdracht, terwijl die geen einddatum heeft';
$string['nomultipleaccounts'] = 'Het gebruik van individuele leraar-accounts voor PlagScan is niet mogelijk op deze server';
$string['nondisclosure_notice_desc'] = 'Alle geheime documenten zullen gestuurd worden naar  "{$a}".<br /><br />';
$string['noone'] = 'Enkel vergelijken met bronnen op het internet';
$string['noonedocs'] = 'Vergelijken met bronnen op het internet en eigen documenten';
$string['notprocessed'] = 'PlagScan heeft dit bestand nog niet geanalyseerd';
$string['notprocessedcontent'] = 'Plagscan heeft deze tekst nog niet geanalyseerd';
$string['notsubmitted'] = 'Nog niet ingestuurd naar Plagscan';
$string['online_submission'] = 'Plagscan inschakelen voor het insturen van online tekst';
$string['online_submission_help'] = 'Schakeld Plagscan in voor opdrachten waarbij de leerlingen tekst intypen in de opdracht in plaats van bestanden insturen.';
$string['online_text_no'] = 'Nee';
$string['online_text_yes'] = 'Ja';
$string['onlyassignmentwarning'] = 'Waarschuwing: het automatisch insturen naar PlagScan werkt enkel met opdracht-activiteiten';
$string['optin'] = 'Plagiaatstest opt-in';
$string['optin_explanation'] = 'Je kunt opt-in kiezen voor plagiaatdetectie. Vanaf nu zullen alle opdrachten die je instuurt naar de PlagScan-server gestuurd worden om vergeleken te worden met andere documenten';
$string['optout'] = 'Plagiaatscontrole opt-out';
$string['optout_explanation'] = 'Je kunt opt-out kiezen voor plagiaatdetectie. Je ingestuurde opdrachten zullen <b>niet</b> vergeleken worden met andere documenten die naar de PlagScan-server gestuurd werden';
$string['plagscan'] = 'PlagScan';
$string['plagscan_admin_email'] = 'E-mailadres beheerder';
$string['plagscan_admin_email_help'] = 'Het geregistreerde PlagScan admin-adres. Dit is nodig als je geüploade bestanden met de PlagScan-hoofdaccount wil associëren';
$string['plagscan_API_key'] = 'API-sleutel';
$string['plagscan_API_key_help'] = 'Je kunt jouw API-sleutel zien op <a href="https://www.plagscan.com/apisetup" target="_blank">https://www.plagscan.com/apisetup</a>';
$string['plagscan_API_method'] = 'methode';
$string['plagscan_API_version'] = 'API-versie';
$string['plagscan_API_version_help'] = 'Jouw laatste API-versie is <b>3.0</b>';
$string['plagscan_call_back_script'] = 'Callback-script URL';
$string['plagscan_client_id'] = 'Client ID';
$string['plagscan_client_username'] = 'Client gebruikersnaam';
$string['plagscan_client_username_help'] = 'Jouw PlagScan accountnaam/geregistreerde e-mail ID';
$string['plagscan:control'] = 'Insturen/Opnieuw insturen van PlagScan opdrachten';
$string['plagscan:enable'] = 'PlagScan inschakelen/uitschakelen in een activiteit²';
$string['plagscanerror'] = 'PlagScan serverfout: {$a}';
$string['plagscanexplain'] = 'PlagScan is plagiaatdetectiesoftware;<br />De software vergelijkt documenten binnen jouw instituut en externe webbronnen.<br />Om deze plugin te kunnen gebruiken, moet je een <a href="https://www.plagscan.com" target="_blank">organizatie-account</a> maken. . <br /><br />Je kunt richtlijnen vinden op <a href="https://www.plagscan.com/system-integration-moodle" target="_blank">www.plagscan.com/system-integration-moodle</a>. <br />Vraag een gratis test aan bij <a href="mailto:pro@plagscan.com">pro@plagscan.com</a> en lees ons laatste nieuws op <a href="https://twitter.com/plagscan" target="_blank">Twitter</a>. <br /><br />Algemene informatie kan gevonden worden op <a href="https://www.plagscan.com" target="_blank">www.PlagScan.com</a><hr />';
$string['plagscanmethod'] = 'Insturen';
$string['plagscan_multipleaccounts'] = 'Associeer geüploade bestanden met';
$string['plagscan_nondisclosure_notice_email'] = 'Geheime documenten';
$string['plagscan_nondisclosure_notice_email_desc'] = 'naam@voorbeeld.com';
$string['plagscan_nondisclosure_notice_email_help'] = 'Alle documenten met een blokkeringsmelding zullen ingestuurd worden naar een aparte PlagScan-account. Alle documenten in die account zullen <b>niet gedeeld worden</b> met andere gebruikers van de organisatie. De ingegeven e-mail kan <b>geen deel zijn van een andere PlagScan-account</b>.';
$string['plagscan_orga_repository_policy'] = 'Controleer tegen de opslagruimte van mijn organisatie';
$string['plagscan_own_repository_policy'] = 'Controleer tegen mijn documenten in de opslagruimte';
$string['plagscan_own_workspace_policy'] = 'Controleer tegen mijn documenten';
$string['plagscan_ppp_policy'] = 'Controleer tegen de Plagiaatspreventie-tool';
$string['plagscanserver'] = 'PlagScan server';
$string['plagscanserver_help'] = 'The standaardconfiguratie is "<b>ssl://api.plagscan.com/v3/</b>" of "<b>https://api.plagscan.com/v3/</b>" als Moodle een proxy-server gebruikt.';
$string['plagscan_studentpermission'] = 'Leerlingen kunnen weigeren om te uploaden naar PlagScan';
$string['plagscanversion'] = '2.3';
$string['plagscan:viewfullreport'] = 'Bekijk/download PlagScan-rapporten';
$string['plagscan_web_policy'] = 'Vergelijk met bronnen op het internet';
$string['pluginname'] = 'PlagScan';
$string['process_checking'] = 'Het bestand wordt geanalyseerd...';
$string['psreport'] = 'PS-rapport';
$string['red'] = 'Het rode plagiaatniveau begint bij';
$string['report'] = 'Rapport';
$string['report_retrieve_error'] = 'Fout bij het ophalen van het rapport. Het zou kunnen dat de gebruiker geen toegangsrechten heeft tot dit rapport';
$string['report_type'] = 'Rapporttype:';
$string['resubmit'] = 'Opnieuw insturen bij PlagScan';
$string['runalways'] = 'Start onmiddellijk';
$string['runautomatic'] = 'Start na de uiterste inleverdatum';
$string['runduedate'] = 'Start na de afsluitdatum';
$string['runmanual'] = 'Start manueel';
$string['save'] = 'Bewaar';
$string['savedapiconfigerror'] = 'Er is een fout opgetreden bij het aanpassen van je PlagScan-instellingen';
$string['savedapiconfigerror_admin_email'] = 'Geef een geldig e-mailadres voor "Beheer e-mail"';
$string['savedconfigsuccess'] = 'PlagScan-instellingen bewaard';
$string['sendqueuedsubmissions'] = 'Stuur bestanden in de wachtrij naar PlagScan voor controle op plagiaat';
$string['serverconnectionproblem'] = 'Probleem met het verbinden met de PlagScan-server';
$string['serverrejected'] = 'De PlagScanserver heeft dit document geweigerd - het bestand is beschadigd of beschermd.';
$string['settings_cancelled'] = 'Antiplagiaatinstellingen zijn geannuleerd';
$string['settingsfor'] = 'Account-instellingen aanpassen \'{$a}\'';
$string['settingsreset'] = 'Formular l&ouml;schen';
$string['settings_saved'] = 'Antiplagiaatinstellingen bewaard';
$string['show_to_students'] = 'Deel resultaten met leerlingen';
$string['show_to_students_actclosed'] = 'na einddatum';
$string['show_to_students_always'] = 'Altijd';
$string['show_to_students_help'] = 'Alle deelnemers kunnen het analyseresultaat van PlagScan zien.';
$string['show_to_students_links'] = 'Plagiaatniveau en rapporten';
$string['show_to_students_never'] = 'Nooit';
$string['show_to_students_opt2'] = 'Deel deze resultaten';
$string['show_to_students_opt2_help'] = 'Hiermee kunnen de leerlingen enkel het plagiaatniveau of het volledige rapport zien';
$string['show_to_students_plvl'] = 'Plagiaatniveau';
$string['singleaccount'] = 'De PlagScan-hoofdaccount';
$string['source_percentage_default'] = '20';
$string['source_percentage_display'] = 'Verberg plagiaatbronnen onder (%)';
$string['source_percentage_display_help'] = 'Verbergt geplagieerde inhoud met met minder dan het vermelde percentage.';
$string['spanish'] = 'Spaans';
$string['ssty'] = 'Gevoeligheid';
$string['sstyhigh'] = 'Hoog';
$string['sstylow'] = 'Laag';
$string['sstymedium'] = 'Medium';
$string['studentdisclosure'] = 'Tonen aan leerling';
$string['studentdisclosuredefault'] = 'Alle geüploade bestanden zullen ingestuurd worden naar een plagiaatdetectieservice';
$string['studentdisclosure_help'] = 'Deze tekst zal aan alle leerlingen getoond worden op de bestandsuploadpagina.';
$string['studentdisclosureoptedout'] = 'Je hebt opt-out gekozen voor plagiaatdetectie';
$string['studentdisclosureoptin'] = 'Klik hier om opt-in te kiezen voor plagiaatdetectie';
$string['studentdisclosureoptout'] = 'Klik hier om opt-out te kiezen voor plagiaatdetectie';
$string['submit'] = 'Stuur bestand in naar PlagScan';
$string['submituseroptedout'] = 'Bestand \'{$a}\'  niet ingestuurd - de gebruiker heeft opt-out gekozen voor plagiaatdetectie';
$string['testconnection'] = 'Test verbinding';
$string['testconnection_fail'] = 'Verbinding mislukt!';
$string['testconnection_success'] = 'Verbinding OK';
$string['textsubmitted'] = 'Tekst ingestuurd';
$string['textunsupported'] = 'Onbekende fout tijdens het insturen van de tekst';
$string['unsupportedfiletype'] = 'Dit bestandstype wordt niet ondersteund door PlagScan';
$string['updateyoursettings'] = 'Naar jouw PlagScan-instellingen';
$string['useplagscan'] = 'Plagscan Inschakelen';
$string['useplagscan_help'] = '* Manueel: Je moet voor elk document manueel het scannen starten
* Start onmiddellijk: de Plagscanplugin begint onmiddellijk na het uploaden van het document met het scannen.
* Start onmiddellijk na de uiterste inleverdatum:  de PlagScanplugin begint te scannen nadat de uiterste inleverdatum verstreken is.
* Start onmiddellijk na de afsluitdatum: de PlagScanplugin begint te scannen nadat de afsluitdatum verstreken is.';
$string['useroptedout'] = 'Opted-out voor plagiaatdetectie';
$string['viewmatches'] = 'Bekijk overeenkomsten';
$string['viewreport'] = 'Bekijk rapport';
$string['wasoptedout'] = 'De gebruiker heeft voor opt-out gekozen voor het detecteren van plagiaat';
$string['webonly'] = 'Doorzoek het internet';
$string['week'] = 'Na één week';
$string['weeks'] = 'Na drie maanden';
$string['windowsize'] = 'Venstergrootte';
$string['windowsize_help'] = 'De venstergrootte bepaalt hoe gekorreld het zoeken zal zijn. De aangeraden waarde is 60.';
$string['yellow'] = 'Het gele plagiaatniveau begint bij';
