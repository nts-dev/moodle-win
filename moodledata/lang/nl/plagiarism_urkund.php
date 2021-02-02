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
 * Strings for component 'plagiarism_urkund', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   plagiarism_urkund
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Sta alle ondersteunde bestandstypen toe';
$string['allowallsupportedfiles_help'] = 'De leraar kan hier aangeven welke bestandstypen naar URKUND worden verzonden om verwerkt te worden. Het voorkomt niet dat leerlingen andere bestandstypen kunnen uploaden naar de opdracht.';
$string['attempts'] = 'Aantal gedane pogingen';
$string['cannotupgradeunprocesseddata'] = 'De huidige versie van de plugin kan niet worden geüpgraded vanwege nog niet verwerkte data. Keer terug naar een eerdere versie van deze plugin en schoon de oude events op.</h1><p>Deze versie van de plugin vertrouwt op de nieuwe event API in Moodle, maar uw installatie bevat niet-verwerkte events gerelateerd aan de oude API.</p>
 U dient terug te keren naar een oudere versie van de URKUND plugin, de site in onderhoudsmodus te zetten, de Moodle cron te laten draaien en er zeker van zijn dat alle oude events zijn opgeschoond. Probeer daarna opnieuw naar deze versie van de URKUND plugin te upgraden.</p>
 <p>Ga voor meer informatie naar: <a href="https://docs.moodle.org/en/Plagiarism_Prevention_URKUND_Settings#Installation_failed_due_to_unprocessed_data">URKUND Installatie mislukt vanwege niet verwerkte data</a></p>';
$string['confirmresetall'] = 'Dit reset alle bestanden met de status: {$a}';
$string['cronwarning'] = 'Het <a href="../../admin/cron.php">cron.php</a> onderhoudsscript heeft niet gedraaid voor tenminste 30 minuten - De cron moet geconfigureerd worden om URKUND juist te laten functioneren.';
$string['debugfilter'] = 'Bestanden filteren op';
$string['defaultsdesc'] = 'De volgende instellingen zijn standaard wanneer URKUND wordt aangezet binnen een Activiteitsmodule';
$string['defaultupdated'] = 'De standaardwaarden zijn geüpdatet';
$string['deletedwarning'] = 'Dit bestand kon niet worden gevonden - mogelijk is het verwijderd door de gebruiker';
$string['explainerrors'] = 'Deze pagina toont alle bestanden die op dit moment een foutstatus kennen. <br/>Op het moment dat de bestanden verwijderd worden op deze pagina, is het niet mogelijk deze opnieuw in te dienen en zullen fouten niet langer worden weergegeven aan leraren of leerlingen.';
$string['file'] = 'Bestand';
$string['filedeleted'] = 'Bestand verwijderd uit wachtrij';
$string['filereset'] = 'Een bestand is gereset om opnieuw ingediend te worden bij URKUND';
$string['fileresubmitted'] = 'Bestand is in wachtrij gezet voor herindiening';
$string['filesresubmitted'] = '{$a} bestanden opnieuw ingediend';
$string['filter30'] = 'Ouder dan 30 dagen uitsluiten';
$string['filter7'] = 'Ouder dan 7 dagen uitsluiten';
$string['filter90'] = 'Ouder dan 90 dagen uitsluiten';
$string['getallscores'] = 'Haal alle scores op';
$string['getscore'] = 'Haal score op';
$string['getscores'] = 'Haal scores op';
$string['heldevents'] = 'Vastgehouden events';
$string['heldeventsdescription'] = 'Dit zijn events die niet voltooid zijn bij de eerste poging en zijn daarom in de wachtrij geplaatst voor herindiening - deze events verhinderen daaropvolgende events te voltooien en dienen mogelijk nader onderzocht te worden. Een aantal van deze events zijn mogelijk niet relevant voor URKUND.';
$string['id'] = 'ID';
$string['identifier'] = 'Identifier';
$string['module'] = 'Module';
$string['name'] = 'Naam';
$string['nofilter'] = 'Geen filter';
$string['noreceiver'] = 'Er was geen ontvangstadres gespecificeerd';
$string['optout'] = 'Opt-out';
$string['pending'] = 'Dit bestand staat in de wachtrij om ingediend te worden bij URKUND';
$string['pluginname'] = 'URKUND plagiaat plugin';
$string['previouslysubmitted'] = 'Eerder ingediend als';
$string['processing'] = 'Dit bestand is ingediend bij URKUND en wacht op analyserapport';
$string['receivernotvalid'] = 'Dit is geen geldig ontvangstadres.';
$string['report'] = 'rapport';
$string['restrictcontent'] = 'Dien bijgevoegd bestand en in-line tekst in';
$string['restrictcontentfiles'] = 'Dien alleen bijgevoegde bestanden in';
$string['restrictcontent_help'] = 'URKUND kan de geüploade bestanden verwerken, maar kan ook in-line tekst van forumberichten en tekst van online tekst opdrachten verwerken. U kunt kiezen welke componenten naar URKUND zullen worden verzonden.';
$string['restrictcontentno'] = 'Dien alles in';
$string['restrictcontenttext'] = 'Dien alleen in-line tekst in';
$string['restrictfiles'] = 'Bestandstypes om in te dienen';
$string['resubmit'] = 'Dien opnieuw in';
$string['resubmitall'] = 'Dien alle bestanden met de volgende status in: {$a}';
$string['savedconfigfailed'] = 'Een incorrecte gebruikersnaam-/wachtwoordcombinatie is ingevuld, URKUND is uitgeschakeld, probeer opnieuw.';
$string['savedconfigsuccess'] = 'Plagiaatinstellingen opgeslagen';
$string['scoreavailable'] = 'Het bestand is verwerkt door URKUND en het rapport is nu beschikbaar.';
$string['scorenotavailableyet'] = 'Dit bestand is nog niet door URKUND verwerkt.';
$string['sendfiles'] = 'Verstuur bestanden uit wachtrij';
$string['showall'] = 'Toon alle fouten';
$string['similarity'] = 'URKUND';
$string['status'] = 'Status';
$string['studentdisclosure'] = 'Leerlingbeschrijving';
$string['studentdisclosuredefault'] = 'Alle geüploade bestanden worden opnieuw verwerkt door de plagaaitdetectieservice URKUND. Indien u wilt voorkomen dat uw document wordt gebruikt als een bron voor analyse buiten deze site door andere organisaties, kunt u de opt-out link gebruiken nadat het rapport is gegenereerd.';
$string['studentdisclosure_help'] = 'Deze tekst zal aan alle leerlingen worden getoond op de bestand-upload-pagina.';
$string['studentemailcontent'] = 'Het bestand dat u heeft ingediend voor {$a->modulename} in {$a->coursename} is nu verwerkt door Plagiaat tool URKUND.
{$a->modulelink}

Indien u wilt voorkomen dat uw document wordt gebruikt als een bron voor analyse buiten deze site door andere organisaties, kunt u deze opt-out link gebruiken:
{$a->optoutlink}\'';
$string['studentemailcontentnoopt'] = 'Het bestand dat je hebt ingezonden naar {$a->modulename} in {$a->coursename} is nu verwerkt door URKUND plagiaatscontrole.
{$a->modulelink}';
$string['studentemailsubject'] = 'Bestand verwerkt door URKUND';
$string['submitondraft'] = 'Dien bestand in wanneer deze voor het eerst wordt geüpload';
$string['submitonfinal'] = 'Dien bestand in wanneer de leerling het  instuurt voor beoordeling';
$string['timesubmitted'] = 'Tijd ingezonden';
$string['toolarge'] = 'Dit bestand is te groot om door URKUND verwerkt te worden';
$string['unknownwarning'] = 'Een is een fout opgetreden bij het proberen te verzenden van dit bestand naar URKUND';
$string['unsupportedfiletype'] = 'Dit bestandstype wordt niet ondersteund door URKUND';
$string['updateallowedfiletypes'] = 'Update toegestane bestandstypen en verwijder URKUND records die geassocieerd zijn met verwijderde activiteiten.';
$string['urkund'] = 'URKUND plagiaat plugin';
$string['urkund_advanceditems'] = 'Set instellingen om aan te merken als geavanceerd';
$string['urkund_advanceditems_help'] = 'De lijst van hier als geavanceerd aangemerkte instellingen zal als geavanceerd worden getoond in de module-instellingen. Als dat het geval is, worden ze verborgen voor leraren indien zij niet het recht \'urkund:advancedsettings\' hebben.';
$string['urkund:advancedsettings'] = 'Toestaan dat de leraar de geavanceerde module instellingen van URKUND kan bekijken';
$string['urkund_api'] = 'URKUND integratieadres';
$string['urkund_api_help'] = 'Dit is het adres van de URKUND API';
$string['urkunddebug'] = 'Debugging';
$string['urkunddefaults'] = 'URKUND standaardwaarden';
$string['urkunddefaults_assign'] = 'Standaardinstellingen Opdracht';
$string['urkunddefaults_forum'] = 'Standaardinstellingen Forum';
$string['urkunddefaults_workshop'] = 'Standaardinstellingen Workshop';
$string['urkund_draft_submit'] = 'Wanneer dient het bestand ingediend te worden';
$string['urkund:enable'] = 'Sta de leraar toe URKUND aan/uit te zetten binnen een activiteit';
$string['urkund_enableoptout'] = 'Toon opt-out link';
$string['urkund_enableoptoutdesc'] = 'Dit uitzetten verwijdert de optie voor leerlingen om de inhoud van hun tekst te tonen of te verbergen (afhankelijk van de standaardinstelling) mocht die overeen komen met documenten van andere gebruikers (“opt-in” en “opt-out”). Door deze functie te deactiveren verklaart u dat u de verantwoordelijkheid neemt voor het beheren van het auteursrecht van de inzendingen van uw leerlingen en dat dit niet in strijd is met de wetten die van toepassing zijn in uw land.';
$string['urkund_enableplugin'] = 'Schakel URKUND in voor {$a}';
$string['urkundexplain'] = 'Voor meer informatie over deze plugin gaat u naar:: <a href="http://www.urkund.com/nl" target="_blank">http://www.urkund.com/nl/</a>';
$string['urkundfiles'] = 'URKUND Bestanden';
$string['urkund_hidefilename'] = 'Verberg naam ingestuurd bestand';
$string['urkund_hidefilenamedesc'] = 'Door dit in te schakelen wordt er een generieke bestandsnaam naar URKUND gestuurd, zodat leerlingen geen bestandsnamen van bronnen kunnen zien die overeenkomen met een bestaande inzending.';
$string['urkund_lang'] = 'Taal';
$string['urkund_lang_help'] = 'Taalcode aangeleverd door URKUND';
$string['urkund_password'] = 'Wachtwoord';
$string['urkund_password_help'] = 'Wachtwoord zoals aangeleverd door URKUND om toegang te krijgen tot de API';
$string['urkund_receiver'] = 'Adres van ontvanger';
$string['urkund_receiver_help'] = 'Dit is een uniek adres dat door URKUND is aangeleverd voor de leraar';
$string['urkund:resetfile'] = 'Sta de leraar toe het bestand opnieuw in te dienen bij URKUND na een fout';
$string['urkund_show_student_report'] = 'Toon gelijkenisrapport aan de leerling';
$string['urkund_show_student_report_help'] = 'Het gelijkenisrapport toont welke onderdelen van de inzending geplagieerd werden en de locatie waar URKUND deze inhoud het eerst tegenkwam';
$string['urkund_show_student_score'] = 'Toon gelijkenisscore aan de leerling';
$string['urkund_show_student_score_help'] = 'De gelijkenisscore is het percentage van de inzending dat overeenkomt met andere inhoud.';
$string['urkund_studentemail'] = 'Stuur leerling een e-mail';
$string['urkund_studentemail_help'] = 'Hiermee zal een e-mail naar de leerling worden gestuurd als het bestand is verwerkt, zodat hij weet dat er een rapport beschikbaar is. In deze e-mail staat ook de opt-out link.';
$string['urkund_username'] = 'Gebruikersnaam';
$string['urkund_username_help'] = 'Gebruikersnaam zoals aangeleverd door URKUND om toegang te krijgen tot de API';
$string['urkund:viewreport'] = 'Sta de leraar toe een volledig rapport van URKUND te bekijken';
$string['useurkund'] = 'URKUND aanzetten';
$string['waitingevents'] = 'Er zijn {$a->countallevents} events die wachten op de cron en {$a->countheld} events worden vastgehouden voor herindiening';
