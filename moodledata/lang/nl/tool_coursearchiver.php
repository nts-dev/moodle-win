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
 * Strings for component 'tool_coursearchiver', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   tool_coursearchiver
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Archief cursussen';
$string['archiveemail'] = 'Stuur e-mails over te archiveren cursussen';
$string['archivelocation'] = 'Cursusarchief submap';
$string['archivewarningemailsetting'] = 'Standaard e-mailwaarschuwing voor cursusarchief';
$string['archivewarningemailsettingdefault'] = '%to

Graag willen wij je informeren dat de volgende Moodle cursus (sen) waarmee je les hebt gegeven binnenkort worden gearchiveerd.
Dit betekent dat de cursus zal worden opgeslagen in zijn huidige staat en vervolgens uit Moodle wordt verwijderd. Als je je wilt afmelden voor dit proces voor een van de volgende cursussen, klik dan op de link naast de cursus die je niet wil laten archiveren.

%courses

Dank je.';
$string['archivewarningemailsetting_help'] = 'Dit is de inhoud van een e-mail die wordt verzonden aan alle leerkrachten van een cursus die is geselecteerd om te worden gearchiveerd.';
$string['archivewarningsubject'] = 'Opmerking: cursussen zullen binnenkort worden gearchiveerd.';
$string['back'] = 'Opnieuw beginnen';
$string['cannotdeletecoursenotexist'] = 'Kan een cursus die niet bestaat niet verwijderen';
$string['cli_cannot_continue'] = 'nGESTOPT: Niet genoeg gegevens om door te gaan.n';
$string['cli_question_archive'] = 'Archieveren en deze {$a} cursussen verwijderen?';
$string['cli_question_archiveemail'] = 'Deze {$a} gebruikers een e-mail sturen over te archiveren cursussen?';
$string['cli_question_hide'] = 'Verberg deze {$a} cursussen?';
$string['cli_question_hideemail'] = 'Stuur deze {$a} gebruikers een e-mail over "te verbergen cursus"?';
$string['confirm'] = 'Doorgaan';
$string['confirmmessage'] = 'Weet je zeker dat je wil {$a}';
$string['confirmmessagearchive'] = 'archiveren en verwijderen van deze {$a} cursussen?';
$string['confirmmessagearchiveemail'] = 'een e-mail sturen naar deze {$a} cursuseigenaars?';
$string['confirmmessagehide'] = 'verbergt deze {$a} cursussen?';
$string['confirmmessagehideemail'] = 'een e-mail sturen naar deze {$a} cursus eigenaars?';
$string['coursearchiver'] = 'Archiefvormer';
$string['coursearchiverpath'] = 'Pad naar de map waar gearchiveerde cursussen worden opgeslagen';
$string['coursearchiverpath_help'] = 'Dit pad is relatief ten opzichte van Moodle $CFG-> dataroot';
$string['coursearchiverpreview'] = 'Upload cursussen voorbeeld';
$string['coursearchiverresult'] = 'Upload cursussen resultaat';
$string['coursearchiver_settings'] = 'Cursus Archiefinstellingen';
$string['coursedeleted'] = 'Cursus verwijderd';
$string['coursedeletionnotallowed'] = 'Cursus verwijderen niet toegestaan';
$string['coursefullname'] = 'Cursus volledige naam';
$string['courseid'] = 'Cursus ID';
$string['courseidnum'] = 'Cursus ID-nummer';
$string['courseselector'] = 'Cursus zoek resultaten';
$string['courseshortname'] = 'Cursus korte naam';
$string['createdbefore'] = 'Gemaakt voor';
$string['email'] = 'Stuur e-mail';
$string['emailselector'] = 'Gebruikers geselecteerd om e-mails te ontvangen.';
$string['emptyonly'] = 'Toon enkel lege cursussen';
$string['errorarchivingcourse'] = 'Cursus:  ({$a->id}) {$a->fullname} kon niet worden gearchiveerd.';
$string['erroremptysearch'] = 'Geen criteria opgegeven.';
$string['errorhidingcourse'] = 'Cursus: ({$a->id}) {$a->fullname} kon niet worden verborgen.';
$string['errorinsufficientdata'] = 'Niet genoeg informatie om deze actie uit te voeren';
$string['errormissingcourses'] = 'De %courses variabele ontbrak in het e-mailsjabloon. Dit is een lijst van de cursussen.';
$string['errormissingto'] = 'De %to variabele ontbrak in het e-mailsjabloon. Dit is de naam van de ontvanger.';
$string['error_nocourseid'] = 'Cursus-record bevat geen ID';
$string['errornonnumericid'] = 'Cursus-ID moet numeriek zijn';
$string['errors'] = 'Fouten';
$string['errors_count'] = 'Fouten: {$a}';
$string['errorsendingemail'] = 'E-mail naar {$a->firstname} {$a->lastname} ({$a->email}) is mislukt.';
$string['hide'] = 'Verberg cursussen';
$string['hideemail'] = 'Stuur "te verbergen cursussen" e-mails';
$string['hidewarningemailsetting'] = 'Standaard e-mailwaarschuwing voor cursus verbergen';
$string['hidewarningemailsettingdefault'] = '%to

Graag willen wij je informeren dat de volgende Moodle cursus (sen) waarmee je les hebt gegeven binnenkort worden verborgen.
Dit betekent dat leerlingen die nog staan ingeschreven niet langer toegang tot de cursussen hebben. Als je je wilt afmelden voor dit proces voor één van de volgende cursussen, klik dan op de link naast de cursus die je niet wil laten verbergen.

%courses

Dank je.';
$string['hidewarningemailsetting_help'] = 'Dit is de inhoud van de e-mail die aan alle leerkrachten van een cursus die is geselecteerd om te worden verborgen zal worden verzonden.';
$string['hidewarningsubject'] = 'Opmerking: Cursussen zullen binnenkort worden verborgen.';
$string['invalidmode'] = 'Een geldige modus voor het tool werd niet gegeven.';
$string['messageprovider:courseowner'] = 'Kennisgevingen van de cursus archivering/verbergen tool.';
$string['nocoursesfound'] = 'De zoekopdracht heeft geleid tot 0 cursussen gevonden';
$string['nocoursesselected'] = 'Om deze actie uit te voeren moet je ten minste 1 cursus geselecteerd hebben.';
$string['noticecoursehidden'] = 'Cursus: ({$a->id}) {$a->fullname} is al verborgen.';
$string['notices'] = 'Mededelingen';
$string['notices_count'] = 'Mededelingen: {$a}';
$string['nousersfound'] = 'Er zijn geen cursuseigenaren om een melding naar te versturen';
$string['nousersselected'] = 'Om deze actie uit te voeren moet je minstens 1 gebruiker selecteren.';
$string['outaccess'] = 'Laatste toegang';
$string['outemail'] = 'E-mail';
$string['outfirstname'] = 'Voornaam';
$string['outfullname'] = 'Volledige naam';
$string['outid'] = 'ID';
$string['outidnumber'] = 'ID-nummer';
$string['outlastname'] = 'Achternaam';
$string['outselected'] = 'Geselecteerd';
$string['outshortname'] = 'Korte naam';
$string['pluginname'] = 'Cursus archiefvormer';
$string['results'] = 'Resultaten';
$string['results_archive'] = 'Gearchiveerde cursussen: {$a}';
$string['results_archiveemail'] = 'Waarschuwingse-mails voor cursus archivering verstuurd: {$a}';
$string['results_courselist'] = 'Cursussen in de lijst: {$a}';
$string['results_getemails'] = 'E-mailadressen verzameld: {$a}';
$string['results_hide'] = 'Verborgen cursussen: {$a}';
$string['results_hideemail'] = 'Verborgen cursus waarschuwingse-mails verstuurd: {$a}';
$string['search'] = 'Zoeken naar cursussen';
$string['unknownerror'] = 'Het proces heeft geleid tot een fout die een herstart van het proces vereist.';
