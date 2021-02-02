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
 * Strings for component 'block_demostudent', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   block_demostudent
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adviceforfirstuse'] = 'Het aanmaken van een DemoStudent account schrijft een nieuwe gebruiker genaamd DemoStudent in in de cursus. Je kunt daarna inloggen als DemoStudent en de cursus ervaren zoals je studenten.';
$string['adviceforinstructor'] = 'Er is een DemoStudent account aangemaakt in deze cursus.
                                Door om te schakelen naar het DemoStudent account kun je:<blockquote>
                                <ul><li>De cursus bekijken als student
                                   <li>Groepsrestricties gebaseerd op lidmaatschap testen
                                   <li>Activiteiten testen om precies te ervaren wat je studenten ervaren
                               </ul></blockquote>';
$string['advicetwowindows'] = '<p>Twee browsers, in beide ingelogd in Moodle,<br>
                               Een als Instructeur, de andere als DemoStudent,<br>
                               voorkomst dat je constant heen en weer moet schakelen<br>
                               tussen de accounts.';
$string['buttonfordemostudent'] = 'Terug naar mijn <b>Instructeur</b> rol';
$string['buttonforfirstuse'] = 'Maak een DemoStudent aan';
$string['buttonforinstructor'] = 'Schakel naar het DemoStudent account';
$string['buttonforunenrol'] = 'Uitschrijven DemoStudent';
$string['demostudent'] = 'DemoStudent';
$string['demostudent:addinstance'] = 'Voeg een nieuw DemoStudent block toe(alleen voor instructeurs).';
$string['demostudent:seedemostudentblock'] = 'Bekijk het DemoStudent block (voor instructeurs en DemoStudents).';
$string['errorfailedtocreateuser'] = '<hr><h4>ERROR:</h4>Gebruiker <b>{$a}</b> kon niet aangemaakt worden.  Sorry.';
$string['errorinstructormasquerade'] = '<hr><h4>ERROR:</h4>Een DemoStudent account kan de cursus niet als Instructeur bekijken.<p>Log opnieuw in.<hr>';
$string['errormissingaddinstancecapability'] = '<hr><h4>ERROR:</h4>Je dient de
                                                <i>block/demostudent:addinstance</i> capability te hebben om
                                                een DemoStudent account aan te maken.<p>Laat een Admin je rollen en rechten controleren.<p>Log opnieuw in.<hr>';
$string['errorremovenotinstructor'] = '<hr><h4>ERROR:</h4>Alleen een Instructeur kan zijn eigen DemoStudent verwijderen.<p>Log opnieuw in.<hr>';
$string['pluginname'] = 'DemoStudent block';
$string['privacy:metadata'] = 'Het DemoStudent block is niet GDPR compliant (AVG) geconfigureerd.';
$string['returntocourse'] = '<p><a href="{$a}">Terug</a> naar de cursus.';
$string['roledemostudentdescription'] = 'Rol toegevoegd via het DemoStudent block.';
$string['roledemostudentname'] = 'DemoStudent';
$string['switchfromdemostudentview'] = 'Terug naar Instructeur.  Misschien moet je opnieuw inloggen.';
$string['switchfromfirstuseview'] = 'Maak een DemoStudent en schrijf direct in.';
$string['switchfrominstructorview'] = 'Bekijk de cursus als DemoStudent.';
$string['unenroltip'] = 'Verwijder de DemoStudent uit deze cursus.';
$string['viewisdemostudent'] = 'Je bekijkt momenteel als <b>DemoStudent</b>.';
$string['viewisfirstuse'] = 'Je bekijkt momenteel als <b>Instructeur</b>.\'';
$string['viewisinstructor'] = 'Je bekijkt momenteel als <b>Instructeur</b>.\'';
$string['warningcoursenotvisible'] = '<hr><h4>Deze cursus is niet beschikbaar voor studenten.</h4>
                                      Instructeurs kunnen dit wijzigen via de cursusinstellingen.<hr>';
$string['warningmissingrole'] = '<hr><h4>Waarschuwing:</h4>Een "demostudent" rol werd niet gevonden in de database.
                                 Dit kan onverwachte gevolgen hebben voor het DemoStudent block.
                                 Laat een Admin de systeemrollen en -rechten controleren,
                                 en/of installeer de plugin opnieuw.<hr>';
