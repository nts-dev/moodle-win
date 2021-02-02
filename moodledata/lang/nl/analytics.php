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
 * Strings for component 'analytics', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analyseerbaar item {$a->analysableid} niet gebruikt: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analyseerbaar item {$a->analysableid} is niet geldig voor dit doel: {$a->result}';
$string['analysisinprogress'] = 'Wordt nog steeds door een eerdere uitvoering geanalyseerd';
$string['analytics'] = 'Analytics';
$string['analyticslogstore'] = 'Log store gebruikt voor analytics';
$string['analyticslogstore_help'] = 'De log store die gebruikt zal worden door de analytics API om de activiteit van gebruikers te lezen.';
$string['analyticssettings'] = 'Instellingen analytics';
$string['analyticssiteinfo'] = 'Site informatie';
$string['defaultpredictionsprocessor'] = 'Standaard voorspellingsprocessor';
$string['defaultpredictoroption'] = 'Standaard processor ({$a})';
$string['defaulttimesplittingmethods'] = 'Standaard tijdverdelingsmethoden voor de evaluatie van het model';
$string['defaulttimesplittingmethods_help'] = 'De tijd splitsende methode verdeelt de cursusduur in delen; de voorspellingsmachine loopt aan het einde van deze delen. Een tijdssplitsingsmethode van het model wordt gespecificeerd, tenzij het modelevaluatieproces deze tijdsverdelingsmethoden zal herhalen. (De mogelijkheid om een tijdverdelingsmethode op te geven is alleen beschikbaar bij het evalueren van modellen met behulp van het opdrachtregelscript.)';
$string['disabledmodel'] = 'Uitgeschakeld model';
$string['erroralreadypredict'] = 'Bestand {$a} is al gebruikt om te voorspellen.';
$string['errorcannotreaddataset'] = 'Het dataset-bestand {$a} kan niet worden gelezen.';
$string['errorcannotwritedataset'] = 'Het dataset-bestand {$a} kan niet worden geschreven.';
$string['errorexportmodelresult'] = 'Het machine-leermodel kan niet worden geëxporteerd.';
$string['errorimport'] = 'Fout bij het importeren van het meegeleverde JSON-bestand.';
$string['errorimportmissingclasses'] = 'De volgende analytische componenten zijn niet beschikbaar op deze site: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Voor het geleverde model moeten de volgende plug-ins worden geïnstalleerd: {$a}. Let op: de versies hoeven niet overeen te komen met de versies die op uw site zijn geïnstalleerd. Het installeren van dezelfde of nieuwere versie van de plug-in zou in de meeste gevallen goed moeten zijn.';
$string['errorimportversionmismatches'] = 'De versie van de volgende componenten verschilt van deze site: {$a}. U kunt de optie \'Negeer niet-overeenkomende versies negeren\' gebruiken om deze verschillen te negeren.';
$string['errorinvalidindicator'] = 'Ongeldige {$a} indicator';
$string['errorinvalidtarget'] = 'Ongeldig {$a} doel';
$string['errorinvalidtimesplitting'] = 'Ongeldige tijdsopsplitsing: geef de fully qualified class name.';
$string['errornoexportconfig'] = 'Er is een probleem opgetreden bij het exporteren van de modelconfiguratie.';
$string['errornoexportconfigrequirements'] = 'Alleen niet-statische modellen met tijdverdelingsmethoden kunnen worden geëxporteerd.';
$string['errornoindicators'] = 'Dit model heeft geen enkele indicator.';
$string['errornopredictresults'] = 'Geen resultaten gekregen van de voorspellingsprocessor. Controleer de inhoud van de map voor de output voor meer informatie.';
$string['errornoroles'] = 'Rollen voor leerling of leraar zijn niet gedefinieerd. Definieer ze op de instellingenpagina voor analytics.';
$string['errornotarget'] = 'Dit model heeft geen enkel doel.';
$string['errornotimesplittings'] = 'Dit model heeft geen tijdsopsplitsingsmethode.';
$string['errorpredictioncontextnotavailable'] = 'Deze voorspellingscontext is niet meer beschikbaar.';
$string['errorpredictionformat'] = 'Onjuist format voor voorspellingsberekeningen';
$string['errorpredictionnotfound'] = 'Voorspellingen niet gevonden';
$string['errorpredictionsprocessor'] = 'Fout voorspellingsverwerker: {$a}';
$string['errorpredictwrongformat'] = 'Wat de voorspellingsprocessor teruggaf kan niet gedecodeerd worden: "{$a}"';
$string['errorprocessornotready'] = 'De geselecteerde voorspellingsprocessor is nog niet klaar: {$a}';
$string['errorsamplenotavailable'] = 'Het voorspelde deel is niet meer beschikbaar.';
$string['errorunexistingmodel'] = 'Niet-bestaand model {$a}';
$string['errorunexistingtimesplitting'] = 'De geselecteerde tijdssplitsingsmethode is niet beschikbaar.';
$string['errorunknownaction'] = 'Onbekende actie';
$string['eventinsightsviewed'] = 'Inzichten bekeken';
$string['eventpredictionactionstarted'] = 'Voorspellingsproces gestart';
$string['fixedack'] = 'Bevestigd';
$string['insightinfomessage'] = 'Het systeem heeft een inzicht voor jou gegenereerd: {$a}';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Het systeem heeft enkele inzichten voor jou gegenereerd.';
$string['insightmessagesubject'] = 'Nieuw inzicht voor "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Dit kan niet geanalyseerd worden met  {$a} tijdsopsplitsingsmethode';
$string['invalidtimesplitting'] = 'Model met ID {$a} heeft een tijdopsplitsingsmethode nodig voor het kan gebruikt worden om te trainen.';
$string['levelinstitution'] = 'Opleidingsniveau';
$string['levelinstitutionisced0'] = 'Voorschools onderwijs (voor Basisonderwijs)';
$string['levelinstitutionisced1'] = 'Basisonderwijs';
$string['levelinstitutionisced2'] = 'Lager middelbaar onderwijs';
$string['levelinstitutionisced3'] = 'Hoger middelbaar onderwijs';
$string['levelinstitutionisced4'] = 'Postsecundair niet-tertiair onderwijs (mogelijk bedrijfs- of gemeenschaps- / NGO-training)';
$string['levelinstitutionisced5'] = 'Kortcyclisch tertiair onderwijs (mogelijk bedrijfs- of gemeenschaps- / NGO-training)';
$string['levelinstitutionisced6'] = 'Bachelor of gelijkwaardig niveau';
$string['levelinstitutionisced7'] = 'Master of gelijkwaardig niveau';
$string['levelinstitutionisced8'] = 'Doctoraal of gelijkwaardig niveau';
$string['modeinstruction'] = 'Wijze van instructie';
$string['modeinstructionblendedhybrid'] = 'Gemengd of hybride';
$string['modeinstructionfacetoface'] = 'Face-to-face';
$string['modeinstructionfullyonline'] = 'Volledig online';
$string['modeloutputdir'] = 'Output-map voor modellen';
$string['modeloutputdirinfo'] = 'De map waar voorspellingsprocessoren al hun evaluatie-informatie opslaan. Nuttig voor foutopsporing en onderzoek.';
$string['modeltimelimit'] = 'Tijdslimiet analyse per model';
$string['modeltimelimitinfo'] = 'Deze instelling beperkt de tijd voor ieder model om de inhoud van de site te analyseren.';
$string['nocourses'] = 'Geen cursussen om te analyseren';
$string['nodata'] = 'Geen data om te analyseren';
$string['noevaluationbasedassumptions'] = 'Modellen gebaseerd op aannames kunnen niet worden geëvalueerd.';
$string['noinsights'] = 'Geen inzichten gerapporteerd';
$string['noinsightsmodel'] = 'Dit model genereert geen inzichten';
$string['nonewdata'] = 'Geen nieuwe gegevens beschikbaar';
$string['nonewranges'] = 'Nog geen nieuwe voorspellingen';
$string['nonewtimeranges'] = 'Geen nieuwe tijdsspanne; er is niets te voorspellen.';
$string['nopredictionsyet'] = 'Nog geen voorspellingen beschikbaar';
$string['noranges'] = 'Nog geen voorspellingen';
$string['notrainingbasedassumptions'] = 'Modellen gebaseerd op aannames hoeven niet getraind te worden.';
$string['notuseful'] = 'Niet bruikbaar';
$string['novaliddata'] = 'Geen geldige data beschikbaar';
$string['novalidsamples'] = 'Er zijn geen geldige voorbeelden beschikbaar';
$string['onlycli'] = 'Analyseproces uitvoeren enkel via command line';
$string['onlycliinfo'] = 'Analyseprocessen, zoals evaluatiemodellen, het trainen van de machine lerende algoritmes of voorspellingen maken, kunnen wel wat tijd in beslag nemen. Ze lopen als cron-taken en kunnen geforceerd gestart worden via command line. Schakel deze instelling uit als je wil dat site managers deze procedures manueel via de webinterface kunnen starten.';
$string['percentonline'] = 'Percentage online';
$string['percentonline_help'] = 'Als uw organisatie gemengde of hybride cursussen aanbiedt, welk percentage van het leerlingenwerk wordt online uitgevoerd in Moodle? Voer een cijfer tussen 0 en 100 in.';
$string['predictionsprocessor'] = 'Voorspellingsprocessor';
$string['predictionsprocessor_help'] = 'Een voorspellingsprocessor is het machine lerende achtergrondproces dat de gegevenssets verwerkt door het berekenen van modelindicatoren en doelen. Elk model kan een andere processor gebruiken. Degene die je hier opgeeft zal de standaard zijn.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Indicatorberekeningen';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'De context';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Berekening eindtijd';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'De indicator berekeningsklasse';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Het voorbeeld-ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'De oorsprongtabel van het voorbeeld';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Berekening starttijd';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Wanneer de voorspelling gemaakt is';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'De berekende waarde';
$string['privacy:metadata:analytics:predictionactions'] = 'Voorspellingsacties';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'De actienaam';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'De voorspellings-ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Wanneer de voorspelling was gedaan';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'De gebruiker die de actie uitvoerde';
$string['privacy:metadata:analytics:predictions'] = 'Voorspellingen';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Indicator berekeningen';
$string['privacy:metadata:analytics:predictions:contextid'] = 'De context';
$string['privacy:metadata:analytics:predictions:modelid'] = 'De model-ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'De voorspelling';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'De voorspellingsscore';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'De index van de tijdssplitsingsmethode';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Het voorbeeld-ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Wanneer de voorspelling gedaan is';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Eindtijd berekeningen';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Starttijd berekeningen';
$string['processingsitecontents'] = 'Site inhoud verwerken';
$string['successfullyanalysed'] = 'Succesvol geanalyseerd';
$string['timesplittingmethod'] = 'Tijdssplitsingsmethode';
$string['timesplittingmethod_help'] = 'De tijdopsplitisingsmethode bepaalt wanneer het systeem voorspellingen zal berekenen en het deel van de activiteitenlogs dat zal gebruikt worden voor deze voorspellingen. Hiermee kan bijvoorbeeld de cursus opgesplitst worden in tijdsblokken en een voorspelling kan berekend worden aan het einde van elk deel.';
$string['typeinstitution'] = 'Type instelling';
$string['typeinstitutionacademic'] = 'Academisch';
$string['typeinstitutionngo'] = 'Niet-gouvernementele organisatie (NGO)';
$string['typeinstitutiontraining'] = 'Bedrijfstrainingen';
$string['viewdetails'] = 'Bekijk details';
$string['viewinsight'] = 'Bekijk inzicht';
$string['viewinsightdetails'] = 'Bekijk inzicht';
$string['viewprediction'] = 'Bekijk details van voorspelling';
