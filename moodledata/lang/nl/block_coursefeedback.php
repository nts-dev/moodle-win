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
 * Strings for component 'block_coursefeedback', language 'nl', branch 'MOODLE_31_STABLE'
 *
 * @package   block_coursefeedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_activefeedbacka'] = 'Huidig beoordelingsformulier:';
$string['adminpage_html_activefeedbackb'] = 'Kies een vragenlijst. Deze zal beschikbaar komen voor beoordeling in het Cursusbeoordelingsblok.<br />je kan de beschikbare vragen aanpassen bij "Aanpassen/aanmaken beoordelingsformulier".';
$string['adminpage_html_allowhidinga'] = 'Niet actief maken toestaan';
$string['adminpage_html_allowhidingb'] = 'Trainers kunnen de beschikbaarheid van het blok aanpassen, als deze optie actief is.';
$string['adminpage_html_defaultlanguagea'] = 'Standaardtaal';
$string['adminpage_html_defaultlanguageb'] = 'Vragen in de standaardtaal zullen worden getoond, als het niet lukt andere talen te laden (bijv. als de vragen in de voorkeurstaal van de gebuiker niet gedefinieerd zijn). Dit betekent dat je alle vragen minimaal in de standaard taal moet definiëren!';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (niet geïnstalleerd)';
$string['adminpage_html_ratingtresholda'] = 'Beoordelingsdrempel';
$string['adminpage_html_ratingtresholdb'] = 'Het aantal reacties dat vereist is, voordat een algemene beoordeling getoond wordt in het blok.';
$string['adminpage_html_setstickya'] = 'Stick it';
$string['adminpage_html_setstickyb'] = 'Als deze optie actief is, dan wordt het blok gekoppeld aan de hoofdpagina van iedere cursus en kan niet door een trainer worden verwijderd.';
$string['adminpage_link_feedbackedit'] = 'Aanpassen/aanmaken beoordelingsformulier';
$string['caution'] = 'Waarschuwing';
$string['copyof'] = 'Kopie van "{$a}"';
$string['coursefeedback:addinstance'] = 'Dit blok toevoegen aan de cursuspagina';
$string['coursefeedback:download'] = 'Resultaten huidige cursusbeoordeling opslaan naar bestand';
$string['coursefeedback:evaluate'] = 'Evalueer huidige cursusbeoordeling';
$string['coursefeedback:managefeedbacks'] = 'Aanpassen globale instellingen van het cursusbeoordelingsblok';
$string['coursefeedback:myaddinstance'] = 'Dit blok toevoegen aan startpagina (omdat dit blok hier volkomen nutteloos is, zou dit eigenlijk voor iedereen verboden moeten worden. )';
$string['coursefeedback:viewanswers'] = 'Bekijk de analyse van de huidige cursusbeoordeling';
$string['download_html_filename'] = 'Resultaten';
$string['download_thead_questions'] = 'Vraag';
$string['eventevaluated'] = 'Cursus beoordeeld';
$string['eventviewed'] = 'Resultaten bekeken';
$string['form_area_questiontext'] = 'Tekst bewerken';
$string['form_header_addlang'] = 'Voeg tekst toe voor een andere taal';
$string['form_header_confirm'] = 'Bevestiging noodzakelijk';
$string['form_header_deleteanswers'] = 'Verwijder antwoorden van gebruiker';
$string['form_header_deletelang'] = 'Verwijder taal/talen';
$string['form_header_editfeedback'] = 'Bewerk beoordelingsformulier';
$string['form_header_editquestion'] = 'Vraag bewerken';
$string['form_header_newfeedback'] = 'Nieuw beoordelingsformulier';
$string['form_header_newquestion'] = 'Nieuwe vraag';
$string['form_header_question'] = 'Vraag {$a}';
$string['form_html_currentlang'] = 'Je bewerkt {$a}';
$string['form_html_deleteanswerstext'] = 'Deze vragenlijst kan momenteel niet bewerkt worden, omdat er vragen beantwoord zijn. Je kan deze antwoorden verwijderen of een kopie maken van het beoordelingsformulier.';
$string['form_html_deleteanswerswarning'] = 'Deze gegevens gaan definitief verloren bij het verwijderen van de antwoorden van de gebruiker. <br/>Verzeker je ervan dat je deze gegevens niet meer nodig hebt.';
$string['form_html_nolangimplemented'] = 'Voor dit beoordelingsformulier zijn geen talen geïmplementeerd.';
$string['form_html_notextendable'] = 'Je kan deze vraag niet bewerken, omdat er geen additionele talen beschikbaar zijn.';
$string['form_select_changepos'] = 'Bepaal nieuwe positie';
$string['form_select_confirmyesno'] = 'Weet je zeker dat je wilt verwijderen?';
$string['form_select_deleteanswers'] = 'Verwijder antwoorden van gebruiker?';
$string['form_select_newlang'] = 'Taal';
$string['form_select_unwantedlang'] = 'Kies een taal <br/><span style="font-size: x-small;">(meerdere keuzes mogelijk)<span>';
$string['form_submit_feedbacksubmit'] = 'Beoordeling opslaan';
$string['page_headline_admin'] = 'Instellingen cursusbeoordelingsformulier';
$string['page_headline_listoffeedbacks'] = 'Lijst van beoordelingsformulieren';
$string['page_headline_listofquestions'] = 'Vragenlijst van \'{$a}\\';
$string['page_html_activated'] = 'Cursusbeoordelingsformulier {$a}) is geregistreerd als huidige beoordelingsformulier.';
$string['page_html_answersdeleted'] = 'De antwoorden van de gebruiker zijn verwijderd.';
$string['page_html_courserating'] = 'Cursusbeoordeling';
$string['page_html_editallquestions'] = 'Toepassen op alle talen';
$string['page_html_evalintro'] = 'Hier kan je jouw mening over deze cursus geven. Jouw beoordeling is anoniem. De resultaten van jouw anonieme beoordeling kunnen door de trainers bekeken worden.';
$string['page_html_evaluated'] = 'Je hebt al een beoordeling voor deze cursus gegeven.';
$string['page_html_intronotifications'] = 'Deze beoordeling moet voldoen aan de volgende conditie(s):';
$string['page_html_nofeedbackactive'] = 'De beoordelingsformulieren zijn gedeactiveerd.';
$string['page_html_nolinks'] = 'Het is niet toegestaan deel te nemen aan deze beoordeling.';
$string['page_html_noquestions'] = 'Geen vragen beschikbaar.';
$string['page_html_norelations'] = 'Alle vragen moeten gedefinieerd worden in tenminste één gangbare taal.';
$string['page_html_saveerr'] = 'Er is een fout opgetreden bij het opslaan van de beoordeling.';
$string['page_html_servedefaultlang'] = 'Alle vragen moeten gedefinieerd worden in de standaard taal.';
$string['page_html_thx'] = 'Bedankt voor het invullen van jouw beoordeling.';
$string['page_html_viewintro'] = 'Analyse beoordelingsformulieren. Het reslutaat toont het aantal stemmen voor het cijfer en het gemiddelde.';
$string['page_html_viewnavbar'] = 'Analyse van de beoordelingsformulieren';
$string['page_link_backtoconfig'] = 'Terug naar de instellingen';
$string['page_link_backtofeedbackview'] = 'Terug naar overzicht';
$string['page_link_deletelanguage'] = 'Verwijder talen';
$string['page_link_download'] = 'Resultaten opslaan als {$a}-bestand';
$string['page_link_evaluate'] = 'Cursus beoordelen';
$string['page_link_newlanguage'] = 'Andere taal toevoegen';
$string['page_link_newquestion'] = 'Nieuwe vraag toevoegen';
$string['page_link_newtemplate'] = 'Nieuwe vragenlijst aanmaken';
$string['page_link_noquestion'] = 'Geen vragen beschikbaar - maak nieuwe een vraag aan.';
$string['page_link_settings'] = 'Instellingen';
$string['page_link_showlistofquestions'] = 'Vragen aanpassen';
$string['page_link_use'] = 'Gebruik';
$string['page_link_view'] = 'Analyse';
$string['perm_header_editnotpermitted'] = 'Het beoordelingsformulier kan om de volgende reden niet worden gewijzigd:';
$string['perm_html_answersexists'] = 'Deze beoordeling is al afgerond door gebuikers.';
$string['perm_html_danswerslink'] = 'Om een nieuwe beoordelingsformulier te maken met de zelfde vragen, kan je deze <a href="admin.php?fid={$a}&mode=feedback&action=new">beoordelingsformulier kopiëren</a> of <a href="admin.php?fid={$a}&mode=feedback&action=danswers">de antwoorden van de gebuikers verwijderen</a>.';
$string['perm_html_duplicatelink'] = 'Om een nieuwe beoordelingsformulier te maken met de zelfde vragen, kan je deze <a href="admin.php?fid={$a}&mode=feedback&action=new">beoordelingsformulier kopiëren</a> of registreer een andere vragenlijst als het huidige beoordelingsformulier.';
$string['perm_html_erroractive'] = 'Je kan het huidige beoordelingsformulier niet aanpassen.';
$string['pluginname'] = 'Cursusbeoordeling';
$string['table_header_abstain'] = 'Geen beoordeling';
$string['table_header_bad'] = 'Zeer slecht';
$string['table_header_good'] = 'Uitstekend';
$string['table_header_languages'] = 'Beschikbare talen';
$string['table_header_questions'] = 'Vragen';
$string['table_html_abstain'] = 'Geen beoordeling';
$string['table_html_average'] = 'Gemiddeld';
$string['table_html_nofeedback'] = 'Geen beoordelingsformulier';
$string['table_html_undefinedlang'] = 'Vertaling ontbreekt. Taal \'{$a}\' is niet beschikbaar.';
$string['table_html_votes'] = 'Aantal stemmen:';
$string['untitled'] = 'Naamloos';
