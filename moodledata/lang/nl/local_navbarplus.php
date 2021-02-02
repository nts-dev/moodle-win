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
 * Strings for component 'local_navbarplus', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   local_navbarplus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting_inserticonswithlinks_desc'] = 'Met deze instelling kunt u koppelingspictogrammen toevoegen aan de kopbalk links naast de pictogrammen "berichten" en "meldingen". <br/>
Elke regel bestaat uit een pictogramafbeelding, een koppelings-URL, een tekst, ondersteunde taal (talen) (optioneel) en een nieuwe vensterinstelling (optioneel) - gescheiden door pijptekens. Elk pictogram moet in een nieuwe regel worden geschreven. <br/>
Bijvoorbeeld: <br/>
fa-vraag|http: //moodle.org|Moodle|en, de|true|d-geen d-sm-block <br/>
fa-sign-out|/login/logout.php|Afmelden||false <br/>
Verdere informatie over de parameters:
<ul>
<li><b>Afbeelding: </b> u kunt pictogramidentificaties voor lettertype Awesome toevoegen (<a href="http://fontawesome.io/icons/"> Zie de pictogramlijst op fontawesome.io</a>). Font Awesome is opgenomen in Moodle\'s kernthema Clean and Boost sinds versie 3.3.</li>
<li><b>Link:</b> het linkdoel kan worden gedefinieerd door een volledige web-URL (bijv. https://moodle.org) of een relatief pad binnen uw Moodle-instantie (bijv. /login/logout.php) .</li>
<li><b>Titel:</b> deze tekst wordt geschreven in de titel en alt-attributen van het pictogram.</li>
<li><b>Ondersteunde taal (talen) (optioneel):</b> deze instelling kan alleen worden gebruikt voor het weergeven van de koppeling naar gebruikers van de opgegeven taal. Scheid meer dan één ondersteunde taal met komma\'s. Als de link in alle talen moet worden weergegeven, laat u dit veld leeg.</li>
<li><b>Nieuw venster (optioneel)</b>: standaard wordt de link in hetzelfde venster geopend en is de waarde van deze instelling ingesteld op false. Als u de koppeling in een nieuw venster wilt openen, stelt u de waarde in op true.</li>
<li><b>Extra klassen (optioneel)</b>: u kunt individuele klassen toevoegen met deze optionele parameter. Een veelvoorkomende toepassing is het toevoegen van responsieve klassen van Bootstrap om een pictogram te verbergen voor specifieke weergaveformaten.<br/> U kunt de definities voor de responsieve Bootstrap-weergave klassen opzoeken voor <a href="https://getbootstrap.com/docs/4.0/utilities/display/"> Bootstrap versie 4</a> voor alle Boost op basis van thema\'s. <br/>
De belangrijkste klassen voor Boost-gebaseerde thema\'s kunnen "d-none d-sm-block" zijn om een pictogram op kleine apparaten te verbergen of "d-sm-none" om alleen het pictogram op kleine schermen weer te geven.</li>
<li><b> ID (optioneel)</b>: u kunt een individuele ID toevoegen aan uw pictogramelement. Dit maakt het mogelijk om dit specifieke pictogram eenvoudig met CSS aan te pakken (bijvoorbeeld voor de Moodle-gebruikersrondleidingen). De reeks die u hier invoert, wordt altijd voorafgegaan door "localnavbarplus -".</li>
</ul>
Houd er rekening mee dat:
<ul>
<li>Pijpverdeling voor optionele parameters is altijd nodig als ze zich tussen andere opties bevinden. Dit betekent dat je params moet scheiden van het pipe-personage, hoewel ze leeg zijn. Bekijk ook het voorbeeld hierboven voor het bovenstaande lettertype.</li>
<li>Als het pictogram niet wordt weergegeven in de navigatiebalk, controleer dan of alle verplichte parameters correct zijn ingesteld en of de optionele taalinstelling past bij uw huidige Moodle-gebruikerstaal.</li>
</ul>';
