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
 * Strings for component 'tool_inspire', language 'nl', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_inspire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Nauwkeurigheid';
$string['allindicators'] = 'Alle indicatoren';
$string['analysablenotused'] = 'Analyseerbaar {$a->analysableid} niet gebruikt: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyseerbaar {$->analysableid} is niet geldig voor dit doel: {$a->result}';
$string['analysingsitedata'] = 'Site analyseren';
$string['bettercli'] = 'Uitvoeren en evalueren van modellen zijn zware processen, het is beter deze via de opdrachtprompt uit te voeren';
$string['cantguessenddate'] = 'Kan einddatum niet inschatten';
$string['cantguessstartdate'] = 'Kan begindatum niet inschatten';
$string['clienablemodel'] = 'Je kunt het model inschakelen door een methode via het id te selecteren om de tijd op te delen. Let op: je kunt dit ook later inschakelen via de web interface (\'geen\' om te af te sluiten)';
$string['coursenotyetfinished'] = 'De cursus is nog niet geëindigd';
$string['coursenotyetstarted'] = 'De cursus is nog niet begonnen';
$string['coursetoolong'] = 'Duur is langer dan 1 jaar';
$string['disabledmodel'] = 'Sorry, dit model is uitgeschakeld door de sitebeheerder';
$string['editmodel'] = 'Model {$a} bewerken';
$string['enabled'] = 'Ingeschakeld';
$string['enabledtimesplittings'] = 'Methodes om tijd op te delen';
$string['erroralreadypredict'] = 'Bestand {$a} is al gebruikt om te voorspellen';
$string['errorcantenablenotimesplitting'] = 'Je moet een methode selecteren om tijd te splitsen alvorens het model in te schakelen';
$string['errordisabledmodel'] = '{$a} model is uitgeschakeld en kan niet worden gebruikt voor voorspellingen';
$string['errorinvalidindicator'] = 'Ongeldige {$a} indicator';
$string['errornoenabledandtrainedmodels'] = 'Er zijn geen ingeschakelde en getrainde modellen om te voorspellen';
$string['errornoenabledmodels'] = 'Er zijn geen ingeschakelde modellen om te trainen';
$string['errornoindicators'] = 'Dit model heeft geen enkele indicator';
$string['errornopredictresults'] = 'De voorspellingsprocessor geeft geen resultaten terug';
$string['errornoroles'] = 'De rollen Leerling en Leraar zijn niet gedefinieerd. Definieer deze op de instellingenpagina van de Inspire plugin.';
$string['errornotarget'] = 'Dit model heeft geen enkel doel';
$string['errornotimesplittings'] = 'Dit model heeft geen enkele methode om tijd te splitsen';
$string['errornottrainedmodel'] = 'Model {$a} is nog niet getraind';
$string['errorpredictionformat'] = 'Onjuist format voor voorspellingsberekeningen';
$string['errorpredictionnotfound'] = 'Voorspelling niet gevonden';
$string['errorpredictionsprocessor'] = 'Fout in verwerker van voorspellingen: {$a}';
$string['errorunknownaction'] = 'Onbekende actie';
$string['evaluate'] = 'Evalueer';
$string['evaluatemodel'] = 'Evalueer model';
$string['eventactionclicked'] = 'Voorspellingsactie geklikt';
$string['executemodel'] = 'Uitvoeren';
$string['executingmodel'] = 'Model aan het trainen en voorspellingen aan het berekenen';
$string['extrainfo'] = 'Info';
$string['generalerror'] = 'Evaluatiefout. Statuscode {$a}';
$string['goodmodel'] = 'Dit is een goed model dat kan worden gebruikt om te voorspellen. Schakel het in en voer het uit om te beginnen voorspellingen te ontvangen.';
$string['indicator:accessesafterend'] = 'Toegang na einddatum';
$string['indicator:accessesbeforestart'] = 'Toegang voor startdatum';
$string['indicator:anywrite'] = 'Iedere schrijfactie';
$string['indicator:cognitivedepthassign'] = 'Opdracht cognitief';
$string['indicator:cognitivedepthbook'] = 'Boek cognitief';
$string['indicator:cognitivedepthchat'] = 'Chat cognitief';
$string['indicator:cognitivedepthchoice'] = 'Keuze cognitief';
$string['indicator:cognitivedepthdata'] = 'Databank cognitief';
$string['indicator:cognitivedepthfeedback'] = 'Feedbackformulier cognitief';
$string['indicator:cognitivedepthfolder'] = 'Map cognitief';
$string['indicator:cognitivedepthforum'] = 'Forum cognitief';
$string['indicator:cognitivedepthglossary'] = 'Woordenlijst cognitief';
$string['indicator:cognitivedepthimscp'] = 'IMS inhoudspakket cognitief';
$string['indicator:cognitivedepthlabel'] = 'Label cognitief';
$string['indicator:cognitivedepthlesson'] = 'Les cognitief';
$string['indicator:cognitivedepthlti'] = 'LTI cognitief';
$string['indicator:cognitivedepthpage'] = 'Pagina cognitief';
$string['indicator:cognitivedepthquiz'] = 'Test cognitief';
$string['indicator:cognitivedepthresource'] = 'Bestand cognitief';
$string['indicator:cognitivedepthscorm'] = 'SCORM-pakket cognitief';
$string['indicator:cognitivedepthsurvey'] = 'Onderzoek cognitief';
$string['indicator:cognitivedepthurl'] = 'URL cognitief';
$string['indicator:cognitivedepthwiki'] = 'Wiki cognitief';
$string['indicator:cognitivedepthworkshop'] = 'Workshop cognitief';
$string['indicator:readactions'] = 'Aantal leesacties';
$string['indicators'] = 'Indicatoren';
$string['indicator:socialbreadthassign'] = 'Opdracht sociaal';
$string['indicator:socialbreadthbook'] = 'Boek sociaal';
$string['indicator:socialbreadthchat'] = 'Chat sociaal';
$string['indicator:socialbreadthchoice'] = 'Keuze sociaal';
$string['indicator:socialbreadthdata'] = 'Databank sociaal';
$string['indicator:socialbreadthfeedback'] = 'Feedbackformulier sociaal';
$string['indicator:socialbreadthfolder'] = 'Map sociaal';
$string['indicator:socialbreadthforum'] = 'Forum sociaal';
$string['indicator:socialbreadthglossary'] = 'Woordenlijst sociaal';
$string['indicator:socialbreadthimscp'] = 'IMS inhoudspakket sociaal';
$string['indicator:socialbreadthlabel'] = 'Label sociaal';
$string['indicator:socialbreadthlesson'] = 'Les sociaal';
$string['indicator:socialbreadthlti'] = 'LTI sociaal';
$string['indicator:socialbreadthpage'] = 'Pagina sociaal';
$string['indicator:socialbreadthquiz'] = 'Test sociaal';
$string['indicator:socialbreadthresource'] = 'Bestand sociaal';
$string['indicator:socialbreadthscorm'] = 'SCORM-pakket sociaal';
$string['indicator:socialbreadthsurvey'] = 'Onderzoek sociaal';
$string['indicator:socialbreadthurl'] = 'URL sociaal';
$string['indicator:socialbreadthwiki'] = 'Wiki sociaal';
$string['indicator:socialbreadthworkshop'] = 'Workshop sociaal';
$string['info'] = 'Info';
$string['insightinfo'] = '{$a->insightname} - {$a->contextname}';
$string['insights'] = 'Inzichten';
$string['inspire:managemodels'] = 'Modellen beheren';
$string['inspiremodels'] = 'Inspire modellen';
$string['labelstudentdropoutno'] = 'Geen risico';
$string['labelstudentdropoutyes'] = 'Student met risico op uitval';
$string['modelslist'] = 'Lijst modellen';
$string['nocourses'] = 'Geen cursussen om te analyseren';
$string['nocoursesections'] = 'Geen cursussecties';
$string['nocoursestudents'] = 'Geen leerlingen';
$string['nodata'] = 'Geen data beschikbaar';
$string['nodatatoevaluate'] = 'Er is geen data om het model te evalueren';
$string['nodatatopredict'] = 'Er is geen data om voor voorspellingen te gebruiken';
$string['nodatatotrain'] = 'Es is geen data om als trainingsdata te gebruiken';
$string['nonewdata'] = 'Geen nieuwe data beschikbaar';
$string['pluginname'] = 'Inspire';
