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
 * Strings for component 'taskchain', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   taskchain
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Verlaten';
$string['addtaskchain_help'] = '**Nee**
Er wordt slechts één taak aan de cursus toegevoegd

**Ja**
Als het bronbestand een ** taakbestand ** is, wordt dit behandeld als het begin van een reeks taken en worden alle taken in de keten toegevoegd aan de cursus met identieke instellingen. Elke taak in de keten moet een link bevatten naar het volgende bestand in de keten.

Als het bronbestand een ** map ** is, worden alle herkenbare taken in de map aan de cursus toegevoegd om een reeks taken met identieke instellingen te vormen.

Als het bronbestand een ** ketenbestand ** is, zoals een Hot Potatoes-stamperbestand of index.html, worden taken in het ketenbestand aan de cursus toegevoegd als een reeks taken met identieke instellingen.';
$string['addtype_help'] = 'Welke bestanden moeten als taken worden toegevoegd?

** Detecteer automatisch **
: Als een bestand is geselecteerd, wordt het behandeld als een ** taakbestand ** aan het begin van een reeks taken, of als ** ketenbestand ** dat een lijstbestanden bevat die moeten worden toegevoegd. Als er geen bestand is geselecteerd, worden alle herkenbare bestanden in de map als taken toegevoegd.

** Voeg alleen een geselecteerd bestand toe **
: Alleen het geselecteerde bronbestand wordt als een taak aan deze activiteit toegevoegd.

** Ketting toevoegen beginnend bij geselecteerd bestand **
: Het geselecteerde bronbestand wordt verondersteld een ** taakbestand ** te zijn aan het begin van een reeks taken. Alle taken in de keten worden aan deze activiteit toegevoegd. Elke taak moet een link hebben naar de volgende taak in de keten.

** Voeg alle bestanden toe die in het geselecteerde bestand worden vermeld **
: Het geselecteerde bronbestand wordt verondersteld ** ketenbestand **, zoals een Hot Potatoes-stamperbestand of index.html. Alle taken die in het geselecteerde bestand worden vermeld, worden aan deze activiteit toegevoegd.

** Alle bestanden in de geselecteerde map toevoegen **
: Alle herkenbare taakbestanden in de bronmap worden aan deze activiteit toegevoegd.

** Voeg alle bestanden in alle mappen toe **
: Alle herkenbare taakbestanden in de bronmap en alle bijbehorende submappen worden aan deze activiteit toegevoegd.';
$string['addtypetaskchain'] = 'Ketting toevoegen beginnend bij geselecteerd bestand';
$string['configbodystyles'] = 'Standaard gaan Moodle-themastijlen over op TaskChain-activiteitenstijlen. Voor alle stijlen die hier zijn geselecteerd, krijgen de TaskChain-activiteitenstijlen, inclusief stijlen die zijn gedefinieerd in taakbronbestanden zoals Hot Potatoes-bestanden, prioriteit boven de Moodle-themastijlen.';
$string['entrygradewarning'] = 'Je kunt deze activiteit pas starten als je {$a->entrygrade}% scoort op {$a->entryactivity}. Momenteel is jouw cijfer voor die activiteit {$a->usergrade}%';
$string['entrypage_help'] = 'Moeten de leerlingen een eerste pagina te zien krijgen voordat ze de TaskChain-activiteit starten?

**Ja**
: de  leerlingen krijgen een startpagina te zien voordat ze de TaskChain starten. De inhoud van de invoerpagina wordt bepaald door de invoerpagina-opties van de TaskChain.

**Nee**
: de leerlingen krijgen geen toegangspagina te zien en starten de TaskChain onmiddellijk.

Een invoerpagina wordt altijd getoond aan de docent om toegang te bieden tot de rapporten en de pagina met de bewerkingstaken';
$string['entrytaskchaincourse'] = 'Vorige TaskChain in deze cursus';
$string['entrytaskchainsection'] = 'Vorige TaskChain in deze cursussectie';
$string['lastattempt'] = 'Vorige poging';
$string['maximum'] = '&lt;=';
$string['minimum'] = '&gt;=';
$string['name'] = 'Naam';
$string['nameadd'] = 'Naam';
$string['next1task'] = 'Volgende taak';
$string['next2task'] = 'Volgende taak overslaan';
$string['next3task'] = 'Volgende 2 taken overslaan';
$string['next4task'] = 'Volgende 3 taken overslaan';
$string['next5task'] = 'Volgende 4 taken overslaan';
$string['nexttaskid'] = 'Volgende taak';
