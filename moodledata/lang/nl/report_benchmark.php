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
 * Strings for component 'report_benchmark', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Systeembenchmark';
$string['benchfail'] = '<b> Pas op!</b><br /> De prestaties van uw Moodle-installatie zijn niet optimaal.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Bekijk het Benchmarkrapport';
$string['benchshare'] = 'Deel mijn score op het forum';
$string['benchsuccess'] = '<b>Gefeliciteerd!</b><br /> De prestaties van je Moodle-installatie lijken perfect te zijn.';
$string['cloadmoreinfo'] = 'Laad het configuratiebestand "config.php"';
$string['cloadname'] = 'Moodle laadtijd';
$string['coursereadmoreinfo'] = 'Lees een cursus meerdere keren om de leessnelheid van de database te controleren';
$string['coursereadname'] = 'Cursusprestaties lezen';
$string['coursewritemoreinfo'] = 'Schrijf meerdere keren een cursus om de schrijfsnelheid van de database te controleren';
$string['coursewritename'] = 'Cursusprestaties schrijven';
$string['description'] = 'Beschrijving';
$string['duration'] = '{$a}s';
$string['during'] = 'Tijd (seconden)';
$string['filereadmoreinfo'] = 'Lees een bestand meerdere keren om de leessnelheid van de tijdelijke map Moodle te controleren';
$string['filereadname'] = 'Bestandsprestaties lezen';
$string['filewritemoreinfo'] = 'Schrijf een bestand meerdere keren om de schrijfsnelheid van de tijdelijke map Moodle te controleren';
$string['filewritename'] = 'Bestandsprestaties schrijven';
$string['info'] = 'Deze benchmarktest duurt minder dan 1 minuut en wordt na 2 minuten afgebroken. Wacht tot de resultaten verschijnen.';
$string['infoaverage'] = 'Het wordt aanbevolen om deze benchmarktest meerdere keren uit te voeren om een significant gemiddelde te verkrijgen. Als de prestaties van uw installatie niet optimaal zijn, vindt u enkele aanbevelingen om deze te verbeteren in de <a href="https://docs.moodle.org/en/Performance_recommendations" target="_blank"> Moodle-documentatie </a >.';
$string['infodisclaimer'] = 'Start deze benchmark niet op een productieplatform, omdat dit kan leiden tot aanzienlijke prestatievermindering.';
$string['infodisclamer'] = 'Het wordt niet aanbevolen om deze benchmark op een productieplatform te lanceren.';
$string['limit'] = 'Acceptabele limiet';
$string['loginguestmoreinfo'] = 'Controleer de laadtijd van de aanmeldingspagina van het gastaccount';
$string['loginguestname'] = 'Tijdstip van aanmelding voor het gastaccount';
$string['loginusermoreinfo'] = 'Controleer de laadtijd van een inlogpagina van een nep-gebruikersaccount';
$string['loginusername'] = 'Inlogtijdprestaties voor een nep-gebruikersaccount';
$string['modulename'] = 'Moodle Benchmark';
$string['modulenameplural'] = 'Moodle Benchmarks';
$string['over'] = 'Kritieke limiet';
$string['pluginname'] = 'Moodle Benchmark';
$string['points'] = '{$a} punten';
$string['privacy:no_data_reason'] = 'De rapport-benchmark-plug-ins slaan zelf geen gegevens op. Het heeft alleen toegang tot gegevens van andere plug-ins';
$string['processormoreinfo'] = 'Roep een PHP-functie aan met een lus om de processorsnelheid te controleren';
$string['processorname'] = 'Verwerkingssnelheid van de processor';
$string['querytype1moreinfo'] = 'Voer een complexe SQL-query uit om de snelheid van de database te controleren';
$string['querytype1name'] = 'Databaseprestaties (#1)';
$string['querytype2moreinfo'] = 'Voer een complexe SQL-query uit om de snelheid van de database te controleren';
$string['querytype2name'] = 'Databaseprestaties (#2)';
$string['redo'] = 'Start de benchmark opnieuw';
$string['score'] = 'Score';
$string['scoremsg'] = 'Benchmarkscore:';
$string['seconde'] = '{$a}s';
$string['slowdatabaselabel'] = 'De database lijkt te traag.';
$string['slowdatabasesolution'] = '<ul><li> Controleer <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank"> de database-integriteit </a>.</li><li> Optimaliseer <a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">de database </a>.</li></ul>';
$string['slowharddrivelabel'] = 'De harde schijf lijkt te traag.';
$string['slowharddrivesolution'] = '<ul><li> Controleer de status van de harde schijf en / of de tijdelijke map. </li><li> Wijzig de harde schijf en / of de tijdelijke map. </li></ul>';
$string['slowprocessorlabel'] = 'De processor lijkt te traag.';
$string['slowprocessorsolution'] = '<ul><li> Controleer of je hardwareconfiguratie hoog genoeg is om Moodle uit te voeren. </li></ul>';
$string['slowserverlabel'] = 'De webserver lijkt te traag.';
$string['slowserversolution'] = '<ul><li> Zet je Apache in de <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a>modus of schakel over naar <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li> Als je Moodle op je computer is geïnstalleerd, configureer dan zorgvuldig je antivirusprogramma zodat het de
 installatie van Moodle niet controleert. </li></ul>';
$string['slowweblabel'] = 'De inlogpagina wordt te langzaam geladen.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank"> De Moodle-cache legen </a>.</li></ul>';
$string['start'] = 'Start de benchmark';
$string['total'] = 'Totale tijd';
