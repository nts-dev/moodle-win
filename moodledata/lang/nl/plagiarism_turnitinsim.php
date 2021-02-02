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
 * Strings for component 'plagiarism_turnitinsim', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   plagiarism_turnitinsim
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = 'leerlingtoegang';
$string['accessoptions_help'] = 'Na generatie hebben leerlingen toegang tot het similariteitsrapport voor hun inzending.';
$string['accessstudents'] = 'Sta toe dat leerlingen Similariteitsrapporten bekijken';
$string['addtoindex'] = 'Alle inzendingen indexeren';
$string['code'] = 'Code';
$string['connecttest'] = 'Verbinding met Turnitin testen';
$string['connecttestfailed'] = 'Verbindingstest mislukt';
$string['connecttestsuccess'] = 'Verbindingstest geslaagd';
$string['dbexport'] = 'Database export';
$string['dbexporttable'] = 'Gegevens {$a} exporteren';
$string['defaultsettings'] = 'Standaardinstellingen';
$string['errortoolarge'] = 'Dit bestand zal niet worden ingediend bij Turnitin omdat het de maximaal toegestane grootte van {$a} overschrijdt';
$string['eulaaccept'] = 'Ik accepteer de EULA van Turnitin';
$string['eulaaccepted'] = 'Dank u voor het accepteren van de nieuwe Turnitin EULA. Alle toekomstige inzendingen worden nu voor verwerking naar Turnitin verzonden.';
$string['euladecline'] = 'Ik wijs de Turnitin EULA af';
$string['euladeclined'] = 'Uw inzendingen zullen niet naar Turnitin worden gezonden omdat u de Turnitin eindgebruikersovereenkomst niet hebt geaccepteerd.';
$string['eulaheader'] = 'Turnitin licentie-overeenkomst voor eindgebruikers';
$string['eulalink'] = 'Om deze inzending naar Turnitin te kunnen zenden, moet u de  <a href="{$a}" target="_blank">Turnitin licentie-overeenkomst voor eindgebruikers</a> accepteren.';
$string['eulalinkgeneric'] = 'Als u wilt dat uw toekomstige inzendingen naar Turnitin worden gezonden, moet u de <a href="{$a}" target="_blank">Turnitin overeenkomst voor eindgebruikers</a> accepteren.';
$string['eulalinkmodal'] = 'Om deze inzending naar Turnitin te sturen, moet u de  <a href="#" class="eula_link">Turnitin licentie-overeenkomst voor eindgebruikers </a> accepteren.';
$string['excludebiblio'] = 'Bibliografie';
$string['excludeoptions'] = 'Van similariteitsrapporten uitsluiten';
$string['excludeoptions_help'] = 'Geselecteerde opties worden niet als overeenkomst weergegeven in Similariteitsrapporten.';
$string['excludequotes'] = 'Offertes';
$string['faultcode'] = 'Storingscode';
$string['getwebhookfailure:message'] = 'Er kan een probleem zijn met de webhaak die u bij Turnitin hebt geregistreerd voor de plagiaat-plugin. De geplande taak voor controle hiervan kon geen verbinding met Turnitin maken. Controleer de logboeken.';
$string['getwebhookfailure:subject'] = 'Controle webhaak Turnitin mislukt';
$string['indexoptions'] = 'Indexeren van inzendingen';
$string['indexoptions_help'] = 'Geïndexeerde inzendingen zijn voor vergelijking beschikbaar in Similariteitsrapporten.';
$string['invalidtablename'] = 'Exporteren tabel {$a} mislukt';
$string['line'] = 'Lijn';
$string['loadingcv'] = 'Turnitin Cloud Viewer wordt geladen';
$string['message'] = 'Bericht';
$string['messageprovider:digital_receipt_instructor'] = 'Digitaal ontvangstbewijs leraar Turnitin';
$string['messageprovider:digital_receipt_student'] = 'Digitaal ontvangstbewijs Turnitin leerling';
$string['messageprovider:get_webhook_failure'] = 'Fout bij controle webhaak';
$string['messageprovider:new_eula'] = 'Nieuwe EULA van Turnitin';
$string['neweula:message'] = 'Turnitin heeft een nieuwe EULA afgegeven, klik <a href="{$a}">hier</a> voor meer informatie.';
$string['neweula:subject'] = 'Nieuwe EULA van Turnitin uitgegeven';
$string['pluginname'] = 'Turnitin integriteits-plugin';
$string['pluginsetup'] = 'Installatie';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = 'Om een inzending in te dienen bij Turnitin moeten specifieke gebruikersgegevens worden uitgewisseld tussen Moodle en Turnitin. Ga voor meer informatie over Moodle-plugins en GDPR naar https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'De voornaam van de gebruiker wordt bij het starten van Cloud Viewer naar Turnitin gezonden zodat de gebruiker kan worden geïdentificeerd.';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'De achternaam van de gebruiker is naar Turnitin verzonden bij het lanceren van een Cloud Viewer zodat de gebruiker kan worden geïdentificeerd.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'Houd er rekening mee dat de inhoud van een bestand/inzending voor verwerking naar Turnitin wordt gezonden.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = 'De naam van het ingediende bestand is naar Turnitin gezonden zodat het identificeerbaar is.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = 'De titel van de inzending  is naar Turnitin gezonden zodat deze identificeerbaar is.';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = 'Informatie die een Moodle-inzending koppelt aan een Turnitin-inzending.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Een hash gebruikt door Moodle om het ingediende bestand te identificeren.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = 'ID dat de inzending voor het betreffende moduletype identificeert.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = 'De algehele overeenkomstscore van de inzending.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = 'Een tijdstempel dat aangeeft wanneer de inzending  van de gebruiker naar Turnitin is gezonden.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'Het ID gebruikt door Turnitin om naar de inzending te verwijzen.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = 'Het ID van de gebruiker die een inzending heeft gedaan.';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = 'Informatie die een Moodle-gebruiker koppelt aan een Turnitin-gebruiker.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = 'De nieuwste versie van de Turnitin EULA geaccepteerd door de gebruiker.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = 'De taal waarin de gebruiker de laatste keer de Turnitin EULA heeft geaccepteerd.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = 'Een tijdstempel dat aangeeft wanneer de ebruiker de Turnitin EULA voor het laatst heeft geaccepteerd.';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'De ID gebruikt door Turnitin om naar de gebruiker te verwijzen.';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = 'Het ID van de gebruiker die een inzending heeft gedaan.';
$string['queuedrafts'] = 'Conceptinzendingen verwerken';
$string['queuedrafts_help'] = 'Houd er rekening mee dat conceptinzendingen niet worden geïndexeerd in Turnitin voor controle';
$string['receiptsinstructor:message'] = 'Een inzending genaamd <strong>{$a->submission_title}</strong> gemaakt in module <strong>{$a->module_name}</strong> in de klasse <strong>{$a->course_fullname}</strong> is naar Turnitin gezonden.Turnitin.<br/><br/>Submission-id:<strong>{$a->submission_id}</strong><br/>Datum indiening: <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'inzending verzonden naar Turnitin';
$string['receiptstudent:message'] = 'Beste {$a->firstname}{$a->lastname},<br /><br />Uw bestand <strong>{$a->submission_title}</strong> naar de module <strong>{$a->module_name}</strong> in de klas <strong>{$a->course_fullname}</strong> is ingediend bij Turnitin op <strong>{$a->submission_date}</strong>. Uw inzendings-id is <strong>{$a->submission_id}</strong>.<br /><br />Dank u voor het gebruik van Turnitin,<br /><br />Het Turnitin Team';
$string['receiptstudent:subject'] = 'Dit is uw digitale ontvangstbewijs van Turnitin';
$string['reportgen0'] = 'Direct';
$string['reportgen1'] = 'Direct en opnieuw genereren op inleverdatum';
$string['reportgen2'] = 'inleverdatum';
$string['reportgenoptions'] = 'Similariteitsrapporten genereren';
$string['reportgenoptions_help'] = '<strong>Direct:</strong> Similariteitsrapporten worden direct na indienen van het bestand gegenereerd.<br/><br/><strong>Op de vervaldatum:</strong> Similariteitsrapporten worden alleen gegenereerd op de vervaldatum van de opdracht.<br/><br/><strong>Direct en op vervaldatum:</strong> Een similariteitsrapport wordt direct na indienen van het bestand gegenereerd. Het similariteitsrapport wordt nogmaals gegenereerd op de vervaldatum van de opdracht. U kunt deze optie gebruiken om op botsingen binnen een klas te controleren.';
$string['resubmittoturnitin'] = 'Opnieuw indienen bij Turnitin';
$string['savesuccess'] = 'Wijzigingen opgeslagen';
$string['settingslearnmore'] = 'Meer informatie over Turnitin-instellingen';
$string['submissiondisplayerror:cannotextracttext'] = 'rapport niet beschikbaar';
$string['submissiondisplayerror:cannotextracttext_help'] = 'Voor deze inzending kon geen rapport worden gegenereerd. Dat kan zijn  omdat dit bestandstype geen rapport kan genereren of omdat er onvoldoende tekst is.';
$string['submissiondisplayerror:corruptfile'] = 'Bestand corrupt';
$string['submissiondisplayerror:corruptfile_help'] = 'Het geüploade bestand lijkt beschadigd te zijn.';
$string['submissiondisplayerror:eulanotaccepted'] = 'EULA niet geaccepteerd';
$string['submissiondisplayerror:eulanotaccepted_help'] = 'De EULA van Turnitin moet door de inzender worden geaccepteerd voordat de inzending  op overeenkomsten kan worden gecontroleerd.';
$string['submissiondisplayerror:filelocked'] = 'Bestand vergrendeld';
$string['submissiondisplayerror:filelocked_help'] = 'Voor het geüploade bestand is een wachtwoord  nodig om dit te openen.';
$string['submissiondisplayerror:generic'] = 'Bestand niet naar Turnitin verzonden';
$string['submissiondisplayerror:generic_help'] = 'Dit bestand is niet naar Turnitin gezonden, raadpleeg uw systeembeheerder';
$string['submissiondisplayerror:notsent'] = 'Bestand niet naar Turnitin gezonden';
$string['submissiondisplayerror:notsent_help'] = 'Dit bestand is niet bij Turnitin ingediend omdat Turnitin op het tijdstip van indienen niet geactiveerd was, bewerk of upload de inzending nogmaals als u wilt dat het naar Turnitin wordt gezonden.';
$string['submissiondisplayerror:processingerror'] = 'Verwerkingsfout';
$string['submissiondisplayerror:processingerror_help'] = 'Een niet-gespecificeerde fout is opgetreden tijdens het verwerken van de inzendingen.';
$string['submissiondisplayerror:toolarge'] = 'Bestand is te groot';
$string['submissiondisplayerror:toolarge_help'] = 'Dit bestand is te groot om naar Turnitin te sturen. Om op Originaliteit te controleren, moet u een bestand indienen dat kleiner is dan 100 MB.';
$string['submissiondisplayerror:toolittletext'] = 'Onvoldoende tekst';
$string['submissiondisplayerror:toolittletext_help'] = 'De inzending heeft onvoldoende tekst om een similariteitsrapport te genereren (een inzending  moet ten minste 20 woorden bevatten)';
$string['submissiondisplayerror:toomanypages'] = 'Teveel pagina\'s';
$string['submissiondisplayerror:toomanypages_help'] = 'De inzending heeft teveel pagina\'s om een similariteitsrapport te genereren (een inzending  mag niet meer dan 400 pagina\'s bevatten)';
$string['submissiondisplayerror:toomuchtext'] = 'Teveel tekst';
$string['submissiondisplayerror:toomuchtext_help'] = 'De inzending heeft teveel tekst om een similariteitsrapport te genereren (nadat de geëxtraheerde tekst is geconverteerd naar UTF-8 moet de inzending minder dan {$a} tekst bevatten).';
$string['submissiondisplayerror:unknown'] = 'Fout in uw inzending';
$string['submissiondisplayerror:unknown_help'] = 'Met uw inzending is een onbekende fout opgetreden en dit bestand is niet ingediend bij Turnitin. Raadpleeg de systeembeheerder';
$string['submissiondisplayerror:unsupportedfiletype'] = 'Niet-ondersteund bestandstype';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'Het geüploade bestandstype wordt niet ondersteund.';
$string['submissiondisplaystatus:awaitingeula'] = 'In afwachting van EULA';
$string['submissiondisplaystatus:cannotextracttext'] = 'Rapport niet beschikbaar';
$string['submissiondisplaystatus:error'] = 'Fout';
$string['submissiondisplaystatus:notsent'] = 'Niet verzonden';
$string['submissiondisplaystatus:pending'] = 'In afwachting';
$string['submissiondisplaystatus:queued'] = 'In wachtrij geplaatst';
$string['submissiondisplaystatus:unknown'] = 'Onbekende fout';
$string['taskadminupdate'] = 'Lokale configuratie voor Turnitin integriteits-plugin bijwerken';
$string['taskgetreportscores'] = 'Haal rapportuitslagen op voor de Turnitin Integriteits-plugin';
$string['taskoutputenabledfeaturesnotretrieved'] = 'Door Turnitin ingeschakelde opties konden niet worden opgehaald';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'Aanroepen door Turnitin ingeschakelde opties mislukt';
$string['taskoutputenabledfeaturesretrieved'] = 'Door Turnitin ingeschakelde opties opgehaald';
$string['taskoutputfailedconnection'] = 'Er is een probleem bij het verbinden met de Turnitin API';
$string['taskoutputfailedcvlaunchurl'] = 'Er is een probleem opgetreden bij het aanvragen van een start-URL voor Cloud Viewer van de Turnitin-API voor inzendings-id: {$a}';
$string['taskoutputfailedreportrequest'] = 'Er is een probleem opgetreden bij het aanvragen van het genereren van een Originaliteitsrapport van de Turnitin API voor inzendings-id: {$a}';
$string['taskoutputfailedscorerequest'] = 'Er is een probleem bij het aanvragen van een Originaliteitsrapport van de Turnitin API voor inzendings-id: {$a}';
$string['taskoutputfailedupload'] = 'Er is een probleem opgetreden bij het uploaden van een bestand naar de Turnitin API voor inzendings-id: {$a}';
$string['taskoutputfileuploaded'] = 'Bestand voor inzending geüpload naar Turnitin: {$a}';
$string['taskoutputlatesteulanotretrieved'] = 'Laatste EULA-versie kon niet worden opgehaald';
$string['taskoutputlatesteularetrievalfailure'] = 'Aanroep nieuwste EULA-versie mislukt.';
$string['taskoutputlatesteularetrieved'] = 'EULA-versie {$a} opgehaald.';
$string['taskoutputpluginnotconfigured'] = 'De taak voor {$a} kon niet worden uitgevoerd omdat de Turnitin integriteits-plugin niet is geconfigureerd.<br/>Ga naar de Plugin-configuratiepagina in Sitebeheer om uw Turnitin API-referenties toe te voegen.';
$string['taskoutputsubmissioncreated'] = 'inzending gemaakt in Turnitin: {$a}';
$string['taskoutputsubmissionnotcreatedeula'] = 'De inzending kon niet in Turnitin worden gemaakt omdat de inzender de EULA niet heeft geaccepteerd.';
$string['taskoutputsubmissionnotcreatedgeneral'] = 'De inzending kon niet worden gemaakt in Turnitin. Raadpleeg uw logboeken.';
$string['taskoutputwebhookcreated'] = 'Webhaak gemaakt. Turnitin stuurt callbacks naar {$a}';
$string['taskoutputwebhookcreationfailure'] = 'Verzoek aanmaken webhaak mislukt. Raadpleeg uw logboeken.';
$string['taskoutputwebhookdeleted'] = 'Webhaak {$a} is verwijderd.';
$string['taskoutputwebhookdeletefailure'] = 'Webhaak kon niet worden verwijderd. Raadpleeg uw logboeken.';
$string['taskoutputwebhooknotcreated'] = 'Aanmaken webhaak mislukt. Raadpleeg uw logboeken.';
$string['taskoutputwebhooknotdeleted'] = 'Webhaak {$a} kon niet worden verwijderd.';
$string['taskoutputwebhooknotretrieved'] = 'Webhaak {$a} kon niet worden opgehaald. Een nieuwe webhaak wordt gemaakt.';
$string['taskoutputwebhookretrievalfailure'] = 'Aanroep voor ophalen webhaak {$a} mislukt.';
$string['taskoutputwebhookretrieved'] = 'Webhaak  {$a} opgehaald. Webhaak is actief.';
$string['tasksendqueuedsubmissions'] = 'Stuur bestanden in wachtrij van de Turnitin integriteits-plugin';
$string['turnitinapikey'] = 'Turnitin API-sleutel';
$string['turnitinapiurl'] = 'URL Turnitin API';
$string['turnitinconfig'] = 'Configuratie plugin';
$string['turnitinenablelogging'] = 'Diagnostische modus inschakelen';
$string['turnitinfeatures'] = 'Turnitin integriteits-opties';
$string['turnitinfeatures::eulanotrequired'] = 'Acceptatie door gebruikers van de Turnitin EULA is niet vereist';
$string['turnitinfeatures::eularequired'] = 'Accepteren van de EULA van Turnitin is voor alle gebruikers verplicht';
$string['turnitinfeatures::header'] = 'Turnitin integriteitsopties';
$string['turnitinfeatures::moreinfo'] = 'Raadpleeg voor meer informatie over de ingeschakelde opties en pakketten verkrijgbaar bij Turnitin <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>.';
$string['turnitinfeatures::repositories'] = 'Opslagplaatsen gecontroleerd op:';
$string['turnitinfeatures::viewoptions'] = 'Opties Cloud Viewer:';
$string['turnitinhideidentity'] = 'Identiteit van de leerling voor Turnitin verbergen';
$string['turnitinmodenabled'] = 'Turnitin integriteit inschakelen voor {$a}{$a}';
$string['turnitinpluginenabled'] = 'Turnitin inschakelen';
$string['turnitinpluginsettings'] = 'Instellingen Turnitin integriteits-plugin';
$string['turnitinsim'] = 'Turnitin integriteits-plugin';
$string['turnitinsim:enable'] = 'Integriteit Turnitin inschakelen';
$string['turnitinsiminternet'] = 'Controleer op internet-inhoud';
$string['turnitinsimprivate'] = 'Controleren op privé-inhoud';
$string['turnitinsim:viewfullreport'] = 'Originaliteitsrapport bekijken';
$string['turnitinviewermatchsubinfo'] = 'Sta instructeurs binnen uw instelling toe om informatie over inzendingen voor interne overeenkomsten te bekijken';
$string['turnitinviewersavechanges'] = 'Wijzigingen in viewer opslaan';
$string['turnitinviewerviewfullsource'] = 'Sta instructeurs binnen uw instelling toe om de volledige tekst van de inzendingen voor interne overeenkomsten te bekijken';
$string['viewapilog'] = 'API-logboeken van {$a} bekijken';
$string['viewerpermissionferpa'] = 'De volgende machtigingen hebben invloed op hoe gegevens binnen uw instelling kunnen worden gedeeld. Deze gegevens zijn de uitsluitende verantwoordelijkheid van uw instelling zodat u bij het instellen van deze machtigingen er rekening mee moet houden of ze volledig voldoen aan het beleid van uw instelling met betrekking tot leerlingenrecords.';
$string['viewerpermissionoptions'] = 'Machtigingen viewer';
$string['viewlogs'] = 'Logboeken';
$string['webhook_description'] = 'Webhaak voor {$a}';
$string['webhookincorrectsignature'] = 'Callback naar webhaak mislukt omdat handtekening onjuist is';
