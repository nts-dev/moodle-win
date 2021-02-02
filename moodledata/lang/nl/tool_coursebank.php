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
 * Strings for component 'tool_coursebank', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_coursebank
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupdate'] = 'Backupdatum';
$string['backupfailed'] = 'Het verzenden van backup is mislukt {$a}.';
$string['backupfilename'] = 'Bestandsnaam';
$string['backupfiles'] = '{$a} bestand (en)';
$string['backupqueue'] = 'Cursusbank backups overdrachtwachtrij';
$string['backupsummary'] = 'Cursusbank backups overdrachtrapport';
$string['check_delete'] = 'Bent je er zeker van dat je {$a} wilt verwijderen uit de overdracht wachtrij?';
$string['check_go'] = 'Ben je er zeker van dat je de overdracht van {$a} wilt hervatten?';
$string['checking'] = 'Controleren ...';
$string['check_stop'] = 'Ben je er zeker van dat je de overdracht van {$a} wil pauzeren?';
$string['completion'] = 'Voltooiing';
$string['conncheckbutton'] = 'controleer verbinding';
$string['conncheckfail'] = 'Verbinden met  "{$a}" is mislukt. Kunt je bevestigen dat je externe cursusbankinstellingen en de netwerkconfiguratie correct zijn.';
$string['connchecksuccess'] = 'Verbindingscontrole met  "{$a}" geslaagd!';
$string['connchecktitle'] = 'Verbindingscontrole';
$string['coursebank:download'] = 'Download cursusbank backupbestanden';
$string['coursebank:edit'] = 'Bewerken cursusbank backupbestanden';
$string['coursebanklogging'] = 'Cursusbank logging';
$string['coursebank:view'] = 'Een lijst met cursusbank backupbestanden';
$string['coursebank:viewlogs'] = 'Bekijk cursusbank logs';
$string['coursefullname'] = 'Cursusnaam';
$string['coursename'] = 'Cursusnaam';
$string['cron_duplicate'] = 'Duplicaat cron-slot';
$string['cron_force'] = 'Het slot kan worden verwijderd door het uitvoeren van dit script met --force als argument.';
$string['cron_lock_cleared'] = 'Vrijgeven van oud cron-slot record in de database, omdat ze als te oud wordt beschouwd.';
$string['cron_locked'] = 'Cron-slot record is aanwezig in de database. Het proces kan onderbroken zijn of nog aan het lopen.';
$string['cron_removinglock'] = 'Verwijderen van cron-slot in de database ...';
$string['cron_sending'] = 'Versturen van backups ...';
$string['cron_skippingexternal'] = 'De tool is niet geconfigureerd om via CLI te worden uitgevoerd. Verlaten ...';
$string['cron_skippingmoodle'] = 'Geconfigureerd om een externe cron te gebruiken. Overslaan ...';
$string['crontimeout'] = 'Cron uitvoeringstijd limiet bereikt! Uitstellen van de overdracht van de resterende cursussen naar de volgende run.';
$string['delete'] = 'Verwijderen uit de wachtrij';
$string['deletefailed'] = 'Het verwijderen van back-up {$a} is mislukt.';
$string['disabled'] = 'Verzenden van cursusback-ups is uitgeschakeld.';
$string['download'] = 'Download back-upbestand';
$string['downloadsummary'] = 'Externe Cursusbank back-ups downloaden';
$string['errordownloading'] = 'Fout bij het downloaden van het back-upbestand.';
$string['errorgetdownloadlist'] = 'Kan geen lijst van back-ups van een externe bron bank krijgen. Kijk na of de externe cursusbankinstellingen en de netwerkconfiguratie correct zijn.';
$string['ERROR_MAX_ATTEMPTS_REACHED'] = 'Maximaal aantal pogingen bereikt.';
$string['errorsonly'] = 'Enkel fouten';
$string['ERROR_TIMEOUT'] = 'De verbinding heeft een time-out.';
$string['errorupdatingstatus'] = 'Fout bij het aanpassen van de status';
$string['event_backup_chunk_interrupted'] = 'Overdracht van back-up met {$a} onderbroken door chunk-fout.';
$string['eventbackupdeleted'] = 'Back-upbestand verwijderd';
$string['eventbackupdeletefailed'] = 'Verwijderen back-up mislukt';
$string['eventbackupdeleteskipped'] = 'Verwijderen back-up overgeslagen';
$string['eventbackupdownloaded'] = 'Back-up gedownload';
$string['eventbackupdownloadfailed'] = 'Back-up download mislukt';
$string['event_backup_init_completed'] = 'Cursusback-up met {$a} is al overgedragen aan de cursusbank.';
$string['event_backup_init_exists_data'] = 'Cursusback-up met {$a} bestaat al in de cursusbank. Bestaande gegevens worden overschreven.';
$string['event_backup_init_exists_nodata'] = 'Cursusbackup met {$a} bestaat al in de cursusbank, maar er is nog geen data overgedragen.';
$string['event_backup_init_interrupted'] = 'Overdracht van back-up met {$a} onderbroken tijdens de back-upinitialisatie';
$string['eventbackupsendfailed'] = 'Back-up verzenden is mislukt';
$string['event_backup_transfer_completed'] = 'Overdracht van cursusback-up met {$a} voltooid.';
$string['event_backup_transfer_started'] = 'Overdracht van cursusback-up met {$a} gestart.';
$string['event_backup_update'] = 'Transferverslag van back-up met {$a} is bijgewerkt.';
$string['eventbackupupdated'] = 'Back-upverslag bijgewerkt';
$string['event_backup_update_interrupted'] = 'Overdracht van backup met {$a} onderbroken door een fout in de back-up update.';
$string['eventconnectionchecked'] = 'Verbinding gecontroleerd';
$string['eventconnectioncheckfailed'] = 'Verbindingscontrole mislukt';
$string['eventcroncompleted'] = 'Cursusbank geplande taak voltooid';
$string['eventcronstarted'] = 'Cursusbank geplande taak gestart';
$string['eventdownloadsviewed'] = 'Downloadpagina bekeken';
$string['event_downloads_viewed'] = 'De gebruiker met id \'{$a}\' bekeek de back-up download-pagina.';
$string['eventdownloadviewfailed'] = 'Download-pagina bekijken is mislukt';
$string['event_download_view_failed'] = 'De gebruiker met id  \'{$a}\' heeft geprobeerd om de backup download-pagina te bekijken, maar er is een fout opgetreden.';
$string['eventgetsession'] = 'Nieuwe sessiesleutel aangemaakt.';
$string['eventgetsessionfailed'] = 'Sessiesleutel aanmaken is mislukt.';
$string['eventhttprequest'] = 'HTTP-verzoek';
$string['eventhttprequestfailed'] = 'HTTP-verzoek is mislukt';
$string['eventloggedas'] = '{$a->realusername} als {$a->asusername}';
$string['eventname'] = 'Gebeurtenisnaam';
$string['eventorigin'] = 'Oorsprong';
$string['eventqueuepopulated'] = 'Cursusback-upwachtrij gevuld';
$string['eventstatusupdated'] = 'Back-upstatus bijgewerkt';
$string['eventstatusupdatefailed'] = 'Back-upstatus bijwerken is mislukt';
$string['eventtimeoutreached'] = 'Cron time-out bereikt';
$string['eventtimeoutreached_desc'] = 'Cron uitvoeringstijdslimiet bereikt tijdens de overdracht van cursus {$a}.';
$string['eventtransfercompleted'] = 'Back-upoverdracht voltooid';
$string['eventtransferinterrupted'] = 'Back-upoverdracht onderbroken';
$string['event_transfer_queue_populated'] = '{$a} cursus back-upbestanden toegevoegd aan de overdracht wachtrij.';
$string['eventtransferresumed'] = 'Back-upoverdracht hervat';
$string['eventtransferstarted'] = 'Back-upoverdracht begonnen';
$string['eventtransferstartfailed'] = 'Back-upoverdracht start is mislukt';
$string['filename'] = 'Bestandsnaam';
$string['filesize'] = 'Bestandsgrootte';
$string['filetimemodified'] = 'Back-updatum';
$string['filterisequalto'] = 'is gelijk aan';
$string['filterlessthan'] = 'kleiner dan';
$string['filtermorethan'] = 'groter dan';
$string['go'] = 'Hervat de overdracht';
$string['identify_backup'] = 'UUID \'{$a->uuid}\' en de bestandsnaam \'{$a->filename}';
$string['limiterfor'] = '{$a} veld begrenzer';
$string['localdeletesuccess'] = '{$a} succesvol verwijderd uit de aangewezen opslagruimte.';
