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
 * Strings for component 'block_xp', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoresourceis'] = 'De activiteit of bron is {$a}';
$string['addacondition'] = 'Voeg een conditie toe';
$string['addarule'] = 'Voeg een regel toe';
$string['addrulesformhelp'] = 'De laatste kolom bepaalt de hoeveelheid ervaringspunten wanneer er voldaan is aan een criterium.';
$string['awardaxpwhen'] = '<strong>{$a}</strong> ervaringspunten worden verdiend wanneer:';
$string['basexp'] = 'Algoritmebasis';
$string['cachedef_filters'] = 'Level filters';
$string['cachedef_ruleevent_eventslist'] = 'Lijst van gebeurtenissen';
$string['changelevelformhelp'] = 'Als je het aantal levels aanpast, zullen de custom level badges tijdelijk uitgeschakeld worden om er voor te zorgen dat er geen levels zonder badges ontstaan. Als je het aantal levels wilt aan passen, ga dan naar de pagina \'Visuals (Visueel)\' om de custom badges weer aan te zetten na het op slaan van dit formulier.';
$string['cheatguard'] = 'Valsspeelbeveiliging';
$string['coefxp'] = 'Algoritmecoëfficient';
$string['colon'] = '{$a->a}: {$a->b}';
$string['configdescription'] = 'Beschrijving bijvoegen';
$string['configheader'] = 'Instellingen';
$string['configtitle'] = 'Titel';
$string['congratulationsyouleveledup'] = 'Gefeliciteerd!';
$string['coolthanks'] = 'Cool, bedankt!';
$string['courselog'] = 'Cursus log';
$string['coursereport'] = 'Cursusverslag';
$string['courserules'] = 'Cursusregels';
$string['coursesettings'] = 'Cursusinstellingen';
$string['coursevisuals'] = 'Cursus visueel';
$string['customizelevels'] = 'Pas de levels aan';
$string['defaultrules'] = 'Standaardregels';
$string['defaultrulesformhelp'] = 'Dit zijn de standaard regels van deze plugin. Ze geven automatisch exerpience punten en negeren wat onbelangrijke gebeurtenissen. Regels die je zelf aanmaakt overstijgen deze standaard regels.';
$string['deletecondition'] = 'Verwijder conditie';
$string['deleterule'] = 'Verwijder regel';
$string['description'] = 'Beschrijving';
$string['dismissnotice'] = 'Sluit deze melding';
$string['enableinfos'] = 'Activeer informatiepagina';
$string['enableinfos_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten de informatiepagina niet benaderen.';
$string['enableladder'] = 'Activeer de ladder';
$string['enableladder_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten niet de ladder benaderen.';
$string['enablelevelupnotif'] = 'Activeer level up notificatie';
$string['enablelevelupnotif_help'] = 'Wanneer dit op "Ja" staat, zullen studenten een popup krijgen met een felicitatie wanneer ze een level omhoog gaan.';
$string['enablelogging'] = 'Activeer logs';
$string['enablexpgain'] = 'Activeer XP verkrijgen';
$string['enablexpgain_help'] = 'Wanner dit op "Nee" staat, zal niemand in de cursus experience punten krijgen. Dit is nuttig om het aantal experience punten te bevriezen, of om het te activeren op gegeven tijdstip.

Dit kan iets preciezer gecontroleerd worden door te configureren via \'blockxp:earnxp\'';
$string['errorformvalues'] = 'Er zijn wat problemen in de formulier waarden, fix dit alsjeblieft.';
$string['errorlevelsincorrect'] = 'Het minimale aantal levels is 2';
$string['errornotalllevelsbadgesprovided'] = 'Niet alle level badges zijn aangeleverd. De volgende missen:{$a}';
$string['errorunknownevent'] = 'Fout: onbekende gebeurtenis';
$string['errorunknownmodule'] = 'Fout: onbekende module';
$string['errorxprequiredlowerthanpreviouslevel'] = 'De XP nodig is lager of gelijk aan die van het vorige level.';
$string['eventis'] = 'De gebeurtenis is {$a}';
$string['eventname'] = 'Gebeurtenis naam';
$string['eventproperty'] = 'Gebeurtenis eigenschap';
$string['eventtime'] = 'Gebeurtenis tijd';
$string['event_user_leveledup'] = 'Gebruiker is een level omhoog gegaan';
$string['for1day'] = 'Voor 1 dag';
$string['for1month'] = 'Voor een maand';
$string['for1week'] = 'Voor een week';
$string['for3days'] = 'Voor 3 dagen';
$string['forever'] = 'Voor altijd';
$string['forthewholesite'] = 'Voor de gehele site';
$string['give'] = 'geef';
$string['incourses'] = 'In cursussen';
$string['infos'] = 'Informatie';
$string['invalidxp'] = 'Ongeldige XP waarde';
$string['keeplogs'] = 'Behoud logs';
$string['ladder'] = 'Ladder';
$string['level'] = 'Level';
$string['levelbadges'] = 'Level badges';
$string['levelbadgesformhelp'] = 'Benoem de bestanden [level].[file extension], bijvoorbeeld: 1.png, 2.png, etc... De aanbevolen resolutie is: 100x100.';
$string['levelcount'] = 'Aantal levels';
$string['leveldesc'] = 'Level beschrijving';
$string['levels'] = 'Levels';
$string['levelswillbereset'] = 'Waarschuwing! Dit formulier opslaan herberekend de levels van iedereen!';
$string['levelup'] = 'Level omhoog!';
$string['levelx'] = 'Level #{$a}';
$string['likenotice'] = '<strong>Bevalt deze pluging?</strong> Neem alsjeblieft een momentje om <a href="{$a->moodleorg}" target="_blank"> deze plugin toe te voegen aan je favorieten op Moodle.org</a> of <a href="{$a->github}" target="_blank">star het op Github</a>';
$string['logging'] = 'Loggen';
$string['maxactionspertime'] = 'Maximale acties in tijd frame.';
$string['maxactionspertime_help'] = 'Het maximale aantal acties die mee tellen voor XP binnen de opgegeven tijd. Alle acties daarbuiten worden genegeerd.';
$string['movecondition'] = 'Verplaats conditie';
$string['moverule'] = 'Verplaats regel';
$string['navinfos'] = 'Informatie';
$string['navladder'] = 'Ladder';
$string['navlevels'] = 'Levels';
$string['navlog'] = 'Log';
$string['navreport'] = 'Verslag';
$string['navrules'] = 'Regels';
$string['navsettings'] = 'Instellingen';
$string['navvisuals'] = 'Visueel';
$string['participatetolevelup'] = 'Neem deel aan de cursus om experience points te krijgen en levels omhoog te gaan!';
$string['pickaconditiontype'] = 'Kies een conditie type';
$string['pluginname'] = 'Level omhoog!';
$string['progress'] = 'Vooruitgang';
$string['property:action'] = 'Gebeurtenis actie';
$string['property:component'] = 'Gebeurtenis onderdeel';
$string['property:crud'] = 'Gebeurtenis CRUD';
$string['property:eventname'] = 'Gebeurtenis naam';
$string['property:target'] = 'Gebeurtenis doel';
$string['rank'] = 'Rang';
$string['reallyresetdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze cursus?';
$string['reallyresetgroupdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze groep?';
$string['resetcoursedata'] = 'Reset de cursus data';
$string['resetgroupdata'] = 'Reset de groep data';
$string['rule'] = 'Regel';
$string['rulecm'] = 'Activiteit of bron';
$string['rulecmdesc'] = 'De activiteit of bron is \'{$a->contextname}\'.';
$string['rule:contains'] = 'bevat';
$string['rule:eq'] = 'is gelijk aan';
$string['rule:eqs'] = 'is precies gelijk aan';
$string['ruleevent'] = 'Specifieke gebeurtenis';
$string['ruleeventdesc'] = 'De gebeurtenis is {$a->eventname}';
$string['rule:gt'] = 'is groter dan';
$string['rule:gte'] = 'is groter dan of gelijk aan';
$string['rule:lt'] = 'is kleiner dan';
$string['rule:lte'] = 'is kleiner dan of gelijk aan';
$string['ruleproperty'] = 'Gebeurtenis eigenschap';
$string['rulepropertydesc'] = 'De eigenschap \'{$a->property}\' {$a->compare}\'{$a->value}\'.';
$string['rule:regex'] = 'is gelijk aan de regex';
$string['ruleset'] = 'Set van condities';
$string['ruleset:all'] = 'Als voldaan is aan ALLE condities';
$string['ruleset:any'] = 'Als voldaan is aan tenminste één van de condities';
$string['ruleset:none'] = 'Als voldaan is aan GEEN van de condities';
$string['rulesformhelp'] = '<p> Deze plugin gebruikt de gebeurtenissen om experience points aan acties gedaan door studenten te koppelen. Je kunt het formulier hier beneden gebruiken om je eigen regels toe te voegen en de standaard regels te bekijken. </p>
<p>It is advised to check the plugin\'s <a href="{$a->log}">log</a> to identify what events are triggered as you perform actions in the course, and also to read more about events themselves: <a href="{$a->list}">list of all events</a>, <a href="{$a->doc}">developer documentation</a>.</p>
<p> Tot slot, de plugin negeert altijd:
<ul>
 <li> De acties gedaan door administrators, gasten of gebruikers die niet ingelogd zijn. </li>
<li>De acties gedaan door gebruikers die niet het block/xp:earnxp mogen bekijken </li>
<li> Herhaalde acties in een korte tijd, om valsspelen te voorkomen</li>
<li> Gebeurtenissen die gemarkeerd zijn als anoniem, in een anonieme feedback bijvoorbeeld</li>
<li> En alle gebeurtenissen van gebruikers die niet deelnemen </li>
</ul>
</p>';
$string['timebetweensameactions'] = 'Benodigde tijd tussen gelijke acties';
$string['timebetweensameactions_help'] = 'In seconden, de minimale tijd die verstreken moet zijn tussen twee gelijke acties om beiden te laten tellen. Een actie is gelijk wanneer deze geplaatst is in het zelfde object of in de zelfde context. Het lezen van een forum post is een gelijke actie als dezelfde post nog een keer gelezen wordt.';
$string['timeformaxactions'] = 'Tijdsbestek voor maximale acties.';
$string['timeformaxactions_help'] = 'Aantal seconden waarin een gebruiker niet het maximale aantal acties moet overschrijden.';
$string['updateandpreview'] = 'Update en laat zien';
$string['usealgo'] = 'Gebruik algoritme';
$string['usecustomlevelbadges'] = 'Gebruik aangepaste badges';
$string['usecustomlevelbadges_help'] = 'Wanneer ingesteld op Ja, moet je voor elk level een afbeelding aanleveren.';
$string['value'] = 'Waarde';
$string['valuessaved'] = 'De waarden zijn succesvol opgeslagen.';
$string['viewtheladder'] = 'Bekijk de ladder';
$string['when'] = 'Wanneer';
$string['wherearexpused'] = 'Wanneer worden experience points gebruikt?';
$string['wherearexpused_desc'] = 'Wanneer';
$string['xp'] = 'Experience points';
$string['xp:addinstance'] = 'Voeg nieuw XP blok toe';
$string['xp:earnxp'] = 'Experience points verdienen';
$string['xpgaindisabled'] = 'XP verdienen uitgeschakeld.';
$string['xp:myaddinstance'] = 'Voeg het blok aan mijn dashboard toe.';
$string['xprequired'] = 'XP vereist.';
$string['xp:view'] = 'Laat het blok en gerelateerde pagina\'s zien';
$string['youreachedlevela'] = 'Je hebt level {$a} behaald!';
$string['yourownrules'] = 'Je eigen regels.';
