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
 * Strings for component 'qtype_essayautograde', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   qtype_essayautograde
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = 'Voeg {$a} cijferbereiken toe';
$string['addmultiplephrases'] = 'Voeg {$a} doelzinnen toe';
$string['addpartialgrades'] = 'Deelcijfers toekennen?';
$string['addpartialgrades_help'] = 'Als deze optie ingeschakeld is, zullen cijfers voor gedeeltelijk bereikte cijferbereiken toegekend worden.';
$string['addsingleband'] = 'Voeg één extra cijferbereik toe';
$string['addsinglephrase'] = 'Voeg één extra doelzin toe';
$string['autograding'] = 'Automatisch beoordelen';
$string['bandcount'] = 'Voor';
$string['bandpercent'] = 'of meer items, ken toe';
$string['chars'] = 'Tekens';
$string['charspersentence'] = 'Tekens per zin';
$string['commonerror'] = 'Algemene fout';
$string['commonerrors'] = 'Algemene fouten';
$string['commonerrors_help'] = 'De algemene fouten worden gedefinieerd in de "Woordenlijst van fouten" die met deze vraag geassocieerd is.';
$string['correctresponse'] = 'Om alle punten op deze vraag te krijgen moet je antwoord aan volgende criteria voldoen:';
$string['enableautograde'] = 'Automatisch beoordelen inschakelen';
$string['enableautograde_help'] = 'Automatisch beoordelen inschakelen of uitschakelen';
$string['errorcmid'] = 'Woordenlijst van fouten';
$string['errorcmid_help'] = 'Kies de woordenlijst die een lijst met algemene fouten bevat.

Telkens er zo een fout gevonden wordt in het antwoord van een leerling dan zal het opgegeven aantal punten afgetrokken worden van het cijfer voor deze vraag.';
$string['errorpercent'] = 'Punten per fout.';
$string['errorpercent_help'] = 'Kies het percentage van het totaalcijfer dat moet afgetrokken worden voor elke fout die gevonden wordt in het antwoord.';
$string['excludecommonerrors'] = 'Maak geen algemene fouten die staan in <a href="{$a->href}" target="_blank">{$a->name}</a>';
$string['explanationautopercent'] = 'Dit valt buiten het normale percentage. Daarom is het aangepast naar {$a->autopercent}%.';
$string['explanationcommonerror'] = '{$a->percent}% wegens het maken van fout "{$a->error}", wat een algemene fout is';
$string['explanationcompleteband'] = '{$a->percent}% voor het voltooien van cijferbereik [{$a->gradeband}]';
$string['explanationdatetime'] = 'op %Y %b %d (%a) om %H:%M';
$string['explanationfirstitems'] = '{$a->percent}% voor de eerste {$a->count} {$a->itemtype}';
$string['explanationgrade'] = 'Daarom is het computer-gegenereerde cijfer voor deze vraag {$a->finalgrade} = ({$a->finalpercent}% op {$a->maxgrade}).';
$string['explanationitems'] = '{$a->percent}% voor {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'Het maximale cijfer voor deze vraag is {$a->maxgrade}.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} is minder dan het minimale cijfer dan nodig was om een cijfer te krijgen.';
$string['explanationoverride'] = 'Op {$a->datetime} is het cijfer voor deze vraag manueel bijgesteld tot {$a->manualgrade}.';
$string['explanationpartialband'] = '{$a->percent}% voor het gedeeltelijk voltooien van cijferbereik [{$a->gradeband}]';
$string['explanationpenalty'] = 'Maar, {$a->penaltytext} is afgetrokken voor het controleren van het antwoord voor het afgeven.';
$string['explanationrawpercent'] = 'Het ruwe percentage voor deze open vraag is {$a->rawpercent}% <br /> = ({$a->details}).';
$string['explanationremainingitems'] = '{$a->percent}% voor de resterende  {$a->count} {$a->itemtype}';
$string['explanationseecomment'] = '(zie onderstaande opmerking)';
$string['explanationtargetphrase'] = '{$a->percent}% voor het gebruiken van de zin "{$a->phrase}"';
$string['feedback'] = 'Feedback';
$string['feedbackhinterrors'] = 'Maakte je algemene fouten?';
$string['feedbackhintphrases'] = 'Heb je alle doelzinnen gebruikt?';
$string['feedbackhints'] = 'Hints om je cijfer te verbeteren';
$string['feedbackhintwords'] = 'Heb je het juiste aantal woorden gebruikt?';
$string['fogindex'] = 'Fog-index';
$string['fogindex_help'] = 'De Gunning fog index is een maat voor de leesbaarheid. De index wordt berekend met volgende formule:

* ((woorden per zin) + (lange woorden per zin)) x 0.4

Meer informatie op  <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'Upgrade afdwingen';
$string['gradeband'] = 'Cijferbereik [{no}]';
$string['gradeband_help'] = 'Geef het minimale aantal telbare items waar dit bereik op toegepast wordt en het cijfer dat moet toegekend worden als dit bereik is toegepast.';
$string['gradebands'] = 'Cijferbereiken';
$string['gradecalculation'] = 'Cijferberekening';
$string['gradeforthisquestion'] = 'Cijfer voor deze vraag';
$string['hidesample'] = 'Verberg voorbeld';
$string['itemcount'] = 'Verwacht aantal items';
$string['itemcount_help'] = 'Het minimale aantal telbare items die in de tekst moeten voorkomen om het maximumcijfer voor deze vraag te behalen.

Merk op dat deze waarde nutteloos kan worden door de cijferbereiken, als die er zijn, die hieronder gedefinieerd worden.';
$string['itemtype'] = 'Type telbare items';
$string['itemtype_help'] = 'Selecteer het type items die zullen bijdragen tot het automatisch vaststellen van een cijfer.';
$string['lexicaldensity'] = 'Lexicale dichtheid';
$string['lexicaldensity_help'] = 'De lexicale dichtheid is een percentage dat met volgende formule berekend wordt:

* 100 x (aantal unieke woorden) / (totaal aantal woorden)

Dus heeft een tekst waarin veel woorden herhaald worden een lage lexicale dichtheid, terwijl een tekst met veel unieke woorden een hoge lexicale dichtheid heeft.';
$string['longwords'] = 'Lange woorden';
$string['longwords_help'] = '"Lange woorden" zijn woorden met drie of meer lettergrepen. Merk op dat het algoritme voor het bepalen van het aantal lettergrepen het aantal slechts bij benadering kan vinden.';
$string['longwordspersentence'] = 'Aantal lange woorden per zin';
$string['missing'] = 'Ontbrekend';
$string['paragraphs'] = 'Alinea\'s';
$string['percentofquestiongrade'] = '{$a}% van het vraagcijfer.';
$string['phrasecasesensitiveno'] = 'Overeenkomst is niet hoofdlettergevoelig.';
$string['phrasecasesensitiveyes'] = 'Overeenkomst is hoofdlettergevoelig.';
$string['phrasefullmatchno'] = 'Overeenkomst voor hele of gedeeltelijke woorden.';
$string['phrasefullmatchyes'] = 'Overeenkomst enkel voor hele woorden.';
$string['phrasematch'] = 'Als';
$string['phrasepercent'] = 'is gebruikt, geef dan';
$string['pleaseenterananswer'] = 'Geef je antwoord in het tekstvak.';
$string['pluginname'] = 'Open vraag (automatisch cijfer)';
$string['pluginnameadding'] = 'Voeg een open vraag (automatisch cijfer) toe';
$string['pluginnameediting'] = 'Bewerk een open vraag (automatisch cijfer)';
$string['pluginname_help'] = 'Als antwoord op een vraag, die een afbeelding kan bevatten, schrijft de respondent een antwoord van één of meerdere alinea\'s. Initieel wordt er een automatisch een cijfer gegeven, gebaseerd op het aantal tekens, woorden, zinnen of alinea\'s en de aanwezigheid van een aantal doelzinnen. Het automatisch cijfer kan later door de leraar aangepast worden.';
$string['pluginnamesummary'] = 'Hiermee kun je een tekst of een aantal zinnen of alinea\'s laten insturen als antwoord op een vraag. De vraag wordt automatisch beoordeeld. Het cijfer kan later aangepast worden.';
$string['present'] = 'Nu';
$string['privacy:metadata'] = 'De open vraag (automatisch cijfer) vraag-plugin bewaart geen persoonlijke gegevens.';
$string['responsesample'] = 'Voorbeeldantwoord';
$string['responsesampleformat'] = 'Voorbeeld tekstformaat';
$string['responsesampleformat_help'] = 'Selecteer het tekstformaat van de voorbeeld antwoord-tekst.';
$string['responsesample_help'] = 'De tekst die hier gezet wordt, wordt getoond als een voorbeeldantwoord wanneer de leerling klikt op de "Toon voorbeeld"-link in de vraagtekst.';
$string['rewriteresubmiterrors'] = 'Verbeter de algemene fouten en stuur opnieuw in.';
$string['rewriteresubmitphrases'] = 'Herschrijf en stuur opnieuw in, nu met de ontbrekende zinnen.';
$string['rewriteresubmitphraseserrors'] = 'Verbeter de algemene fouten, herschrijf de tekst met de ontbrekende zinnen en stuur opneiuw in.';
$string['rewriteresubmitwords'] = 'Herschrijf en stuur opnieuw in met meer woorden.';
$string['rewriteresubmitwordserrors'] = 'Herstel de algemene fouten en stuur opnieuw in met meer woorden.';
$string['rewriteresubmitwordsphrases'] = 'Herschrijf en stuur opnieuw in met meer woorden en met de ontbrekende zinnen.';
$string['rewriteresubmitwordsphraseserrors'] = 'Herstel de algemene fouten, herschrijf de tekst met meer woorden en gebruik ook de ontbrekende zinnen. Stuur dan opnieuw in.';
$string['sentences'] = 'Zinnen';
$string['sentencesperparagraph'] = 'Zinnen per alinea';
$string['showcalculation'] = 'Toon cijferberekening?';
$string['showcalculation_help'] = 'Als deze optie wordt ingeschakeld, dan zal er een uitleg over de berekening van het automatisch toegekend cijfer getoond worden op de cijfer- en beoordelingspagina\'s';
$string['showfeedback'] = 'Toon feedback?';
$string['showfeedback_help'] = 'Als deze optie is ingesteld, dan zal er een tabel met feedback getoond worden aan de leerling. Deze feedback zegt wat de leerling moet doen om te verbeteren.';
$string['showgradebands'] = 'Toon cijferbereiken?';
$string['showgradebands_help'] = 'Als deze optie is ingeschakeld, dan zullen details van de beoordeling en de cijferbereiken getoond worden op de cijfer- en beoordelingspagina\'s.';
$string['showsample'] = 'Toon voorbeeld';
$string['showtargetphrases'] = 'Toon doelzinnen?';
$string['showtargetphrases_help'] = 'Als deze optie is ingeschakeld, dan zullen details van de doelzinnen getoond worden op de cijfer- en beoordelingspagina\'s.';
$string['showtextstats'] = 'Toon tekststatistieken?';
$string['showtextstats_help'] = 'Als deze optie ingeschakeld is, dan worden statistieken over de tekst getoond.';
$string['showtostudentsonly'] = 'Ja, toon enkel aan leerlingen';
$string['showtoteachersandstudents'] = 'Ja, toon aan leerlingen en leraren';
$string['showtoteachersonly'] = 'Ja, toon enkel aan leraren';
$string['targetphrase'] = 'Doel zinsdeel [{no}]';
$string['targetphrase_help'] = 'Geef het cijfer op dat zal toegekend worden als dit doel zinsdeel in de tekst verschijnt.

>**vb** Als [tenslotte] gebruikt wordt, geef dan [10% van het totaalcijfer]

De doel zinsdelen kunnen een enkel zinsdeel of een lijst zinsdelen zijn, gescheiden door een komma "," of het woord "OR" (hoofdletters).

>**vb** Als [tenslotte OR uiteindelijk] gebruikt worden, geef dan [10% van het totaalcijfer]

Een vraagteken "?" in een zinsdeel komt overeen met één teken. Een asterisk "*" komt overeen met een willekeurig aantal tekens (ook 0 tekens)

>**vb** Als [eerst\\*dan\\*tenslotte] gebruikt wordt, geef dan [50% van het totaalcijfer]';
$string['targetphrases'] = 'Doel zinsdelen';
$string['textstatistics'] = 'Tekststatistieken';
$string['textstatitems'] = 'Statistische items';
$string['textstatitems_help'] = 'Selecteer alle items die je in de tekststatistieken wil tonen op de cijfer- en beoordelingspagina\'s.';
$string['uniquewords'] = 'Unieke woorden';
$string['words'] = 'Woorden';
$string['wordspersentence'] = 'Woorden per zin';
