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
 * Strings for component 'enrol_apply', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   enrol_apply
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationcancelednotification'] = 'Je aanvraag voor aanmelding in de cursus is geannuleerd.';
$string['applicationconfirmednotification'] = 'Je aanvraag voor aanmelding in de cursus is bevestigd.';
$string['applicationdeferrednotification'] = 'Je aanvraag voor aanmelding in de cursus is op de wachtlijst geplaatst.';
$string['apply:config'] = 'Maak een aanmeldingsdocument aan';
$string['applydate'] = 'Aanmeldingsdatum';
$string['applymanage'] = 'Beheer aanmeldingsaanvragen';
$string['apply:manage'] = 'Beheer gebruikersaanmeldingen';
$string['apply:manageapplications'] = 'Aanmeldingsaanvragen beheren';
$string['apply:unenrol'] = 'Gebruikers van de cursus uitschrijven';
$string['apply:unenrolself'] = 'Annuleer zelf de aanmelding in de cursus';
$string['applyuser'] = 'Voornaam / Achternaam';
$string['applyusermail'] = 'E-mail';
$string['btncancel'] = 'Aanvraag afwijzen';
$string['btnconfirm'] = 'Aanvraag bevestigen';
$string['btnwait'] = 'Aanmeldingsaanvraag op wachtlijst zetten';
$string['cancelmailcontent'] = 'E-mailinhoud voor annulering';
$string['cancelmailcontent_desc'] = 'Gebruik de juiste placeholders om de gewenste e-mailinhoud te maken.<br>{firstname}: de voornaam van de gebruiker; {content}: de cursusnaam; {lastname}: de achternaam van de gebruiker; {username}: de geregistreerde gebruikersnaam van de gebruiker';
$string['cancelmail_desc'] = '';
$string['cancelmail_heading'] = 'E-mail voor annulering';
$string['cancelmailsubject'] = 'E-mailonderwerp voor annulering';
$string['cancelmailsubject_desc'] = '';
$string['comment'] = 'Opmerking';
$string['confirmenrol'] = 'Beheer applicatie';
$string['confirmmailcontent'] = 'Inhoud bevestigingsmail';
$string['confirmmailcontent_desc'] = 'Gebruik de juiste velden om de gewenste e-mailinhoud te maken met gegevens uit Moodle.<br>{firstname}: de voornaam van de gebruiker; {content}: de cursusnaam; {lastname}: de achternaam van de gebruiker; {username}: de geregistreerde gebruikersnaam van de gebruiker; {timeend}: de datum waarop de aanmelding verloopt';
$string['confirmmail_desc'] = '';
$string['confirmmail_heading'] = 'Bevestigingsmail';
$string['confirmmailsubject'] = 'Onderwerp voor bevestigingse-mail aanmelding';
$string['confirmmailsubject_desc'] = '';
$string['confirmusers'] = 'Bevestig aanmelding';
$string['confirmusers_desc'] = 'Gebruikers in de rijen in het grijs gekleurd, staan op de wachtlijst.';
$string['coursename'] = 'Cursus';
$string['defaultperiod'] = 'Standaardduur van de aanmelding';
$string['defaultperiod_desc'] = 'Standaard tijdsduur dat de aanmelding geldig is. Indien ingesteld op nul, is de aanmeldingsduur standaard onbeperkt.';
$string['defaultperiod_help'] = 'Standaard tijdsduur dat de aanmelding geldig is, te beginnen vanaf het moment dat de gebruiker is aangemeld. Indien uitgeschakeld, is de aanmeldingsduur standaard onbeperkt.';
$string['editdescription'] = 'Beschrijving aanpassen';
$string['enrolname'] = 'Cursusaanmelding bevestiging';
$string['enrolusers'] = 'Gebruikers aanmelden';
$string['expiredaction'] = 'Actie bij verlopen aanmelding';
$string['expiredaction_help'] = 'Selecteer de actie die moet worden uitgevoerd wanneer de gebruikersregistratie verloopt. Houd er rekening mee dat sommige gebruikersgegevens en -instellingen tijdens het uitschrijven van een cursus worden gewist.';
$string['expiry_desc'] = '';
$string['expiry_heading'] = 'Geldidheidsduurinstelligen';
$string['mailtoteacher_suject'] = 'Nieuw aanmeldingsverzoek!';
$string['maxenrolled'] = 'Maximaal aantal aangemelde gebruikers';
$string['maxenrolled_help'] = 'Geeft het maximale aantal gebruikers aan dat zichzelf kan aanmelden. 0 betekent geen limiet.';
$string['maxenrolledreached_left'] = 'Maximaal aantal toegestane gebruikers';
$string['maxenrolledreached_right'] = 'is reeds bereikt.';
$string['maxenrolled_tip_1'] = 'van de';
$string['maxenrolled_tip_2'] = 'reeds geboekt.';
$string['messageprovider:application'] = 'Meldingen van aanmeldingsaanvragen voor cursus';
$string['messageprovider:cancelation'] = 'Meldingen van annuleringen voor cursusaanmeldingen';
$string['messageprovider:confirmation'] = 'Meldingen van aanmeldingsanvraag bevestigingen';
$string['messageprovider:waitinglist'] = 'Cursusaanmeldingsaanvraag wachtrijmeldingen';
$string['newapplicationnotification'] = 'Er is een nieuwe aanvraag voor een cursusaanmelding in afwachting van beoordeling.';
$string['notification'] = '<b> Aanvraag succesvol verzonden </ b>. <br/> <br/> Je wordt per e-mail op de hoogte worden gebracht wanneer je aanmelding is verwerkt.';
$string['notifycoursebased'] = 'Kennisgeving nieuwe aanmeldingstoepassing';
$string['notifycoursebased_desc'] = 'Standaardinstelling: breng iedereen op de hoogte die beschikt over de machtiging \'Beheer aanmeldingen toepassen\' voor de overeenkomstige cursus.';
$string['notify_desc'] = 'Bepaal wie wordt geïnformeerd over nieuwe aanmeldingsaanvragen.';
$string['notifyglobal'] = 'Kennisgeving nieuwe aanmeldingsaanvraag';
$string['notifyglobal_desc'] = 'Bepaal wie wordt geïnformeerd over nieuwe aanmeldingsaanvragen voor een cursus.';
$string['notify_heading'] = 'Notificatie-instellingen';
$string['pluginname'] = 'Cursus inschrijving bevestiging';
$string['pluginname_desc'] = 'Met deze plug-in kunnen gebruikers zich aanmelden voor deelname aan een cursus. Een leraar of site manager zal dan de aanmelding moeten goedkeuren voordat de gebruiker wordt aangemeld.';
$string['show_extra_user_profile'] = 'Toon extra gebruikersprofielvelden op het aanmeldingsscherm';
$string['show_standard_user_profile'] = 'Toon standaard gebruikersprofielvelden op het aanmeldingsscherm';
$string['status'] = 'Aanmeldingsbevestiging toestaan';
$string['status_desc'] = 'Sta toegang toe aan intern aangemelde gebruikers.';
$string['user_profile'] = 'Gebruikersprofiel';
$string['waitmailcontent'] = 'E-mail voor toevoegen aan wachtlijst';
$string['waitmailcontent_desc'] = 'Gebruik de juiste placeholders om de gewenste e-mailinhoud te maken..<br>{firstname}: de voornaam van de gebruiker; {content}: de cursusnaam; {lastname}: de achternaam van de gebruiker; {username}: de geregistreerde gebruikersnaam van de gebruiker';
$string['waitmail_desc'] = '';
$string['waitmail_heading'] = 'Wachtlijst e-mail';
$string['waitmailsubject'] = 'E-mailonderwerp voor het op de wachtlijst zetten';
$string['waitmailsubject_desc'] = '';
