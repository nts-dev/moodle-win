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
 * Strings for component 'auth_saml2', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   auth_saml2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowed_groups'] = 'Toegestane groepen';
$string['allowed_groups_help'] = 'Kommagescheiden lijst van goepen. Gebruikers zullen toestemming krijgen om aan te melden als één van de groepen hun Groep-attribuut bevat. Beperking van groepen wordt eerst getest.';
$string['alterlogout'] = 'Alternatieve URL om af te melden';
$string['alterlogout_help'] = 'De URL om een gebruiker naar toe te sturen nadat alle interne afmeldingsmechanismen gelopen hebben';
$string['anyauth'] = 'Gelijk welk authenticatietype toestaan';
$string['anyauth_help'] = 'Ja: SAML-login toestaan voor alle gebruikers? Nee: enkel gebruikers die saml2 als login-type hebben.';
$string['attemptsignout'] = 'Probeer Idp Afmelden';
$string['attemptsignout_help'] = 'Dit zal proberen mte de IDP te communiceren en een vraag om afmelden te versturen';
$string['attrsimple'] = 'Vereenvoudig attributen';
$string['attrsimple_help'] = 'Verschillende IDP\'s, zoals ADFS gebruiken lange attribuutsleutels, zoals urns of namespaced xml schema-namen. Indien ingesteld op ja zullen deze vereenvoudigd worden en bijvoorbeeld http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname to such \'givenname\' koppelen aan \'givenname\'.';
$string['auth_data_mapping'] = 'Gegevenskoppeling';
$string['auth_fieldlock_expl'] = '<p><b>Blokkeer waarde</b> Indien ingeschakeld zal Moodle verhinderen dat gebruikers en beheerders deze waarde zelf wijzigen. Gebruik deze optie als je deze gegevens op een extern authenticatiesysteem beheert. </p>';
$string['auth_fieldlockfield'] = 'Blokkeer waarde ({$a})';
$string['auth_fieldlocks'] = 'Blokkeer gebruikersvelden';
$string['auth_fieldmapping'] = 'Gegevenskoppeling ({$a})';
$string['auth_saml2blockredirectdescription'] = 'Redirect of toon bericht aan SAML2-logins gebaseerd op geconfigureerde groepsbeperkingen.';
$string['auth_saml2description'] = 'Authenticeer met een SAML2 Idp';
$string['auth_updatelocalfield'] = 'Lokaal updaten ({$a})';
$string['auth_updateremotefield'] = 'Extern updaten ({$a})';
$string['autocreate'] = 'Maak gebruikers automatisch aan';
$string['autocreate_help'] = 'Als gebruikers wel bestaan in de Idp, maar niet in Moodle, maak dan een nieuwe Moodle-account.';
$string['availableidps'] = 'Selecteer beschikbare IdP\'s';
$string['availableidps_help'] = 'Als een IdP metadata xml meerdere IdP\'s bevat, dan moet je selecteren van welke IdP\'s gebruikers mogen inloggen.';
$string['blockredirectheading'] = 'Account blokkeer-acties';
$string['cannotmapfield'] = 'Botsing van koppelingen ontdekt - twee velden koppelen op hetzelfde beoordelingsitem {$a}';
$string['certificate'] = 'Certificaat opnieuw genereren';
$string['certificatedetails'] = 'Details certificaat';
$string['certificatedetailshelp'] = '<h1>Inhoud automatisch gegenereerd SAML2 certificaat</h1>
<p>Dit is het pad van het certificaat:</p>';
$string['certificate_help'] = 'Private sleutel en certificaat voor deze SP opnieuw genereren | <a href=\'{$a}\'>Bekijk SP certificaat</a>';
$string['certificatelock'] = 'Blokkeer certificaat';
$string['certificatelock_help'] = 'Het blokkeren van het certificaat verhindert dat het wordt overschreven eens het gecreëerd is.';
$string['certificatelock_locked'] = 'Het certificaat is geblokkeerd';
$string['certificatelock_warning'] = 'Waarschuwing: je gaat de certificaten blokkeren. Ben je zeker dat je dit wil doen?';
$string['commonname'] = 'Common Name';
$string['countryname'] = 'Land';
$string['debug'] = 'Fouten opsporen';
$string['debug_help'] = '<p>Dit voegt extra foutopsporing toe aan de normale Moodle logs | <a href=\'{$a}\'>Bekijk SSP configuratie</a></p>';
$string['duallogin'] = 'Dubbele login';
$string['duallogin_help'] = '<p>Indien ingeschakeld kunnen gebruikers zowel de knop voor manueel aanmelden als een SAML-loginknop zien. Indien uitgeschakeld worden ze onmiddellijk naar de loginpagina van de Idp gebracht.</p>
<p>Indien uitgeschakeld kunnen beheerders nog wel de manuele loginpagina zien via /login/index.php?saml=off</p>
<p>Indien ingeschakeld kunnen externe pagina\'s diep linken in Moodle door gebruik te maken van saml, vb /course/view.php?id=45&saml=on</p>';
$string['emailtaken'] = 'Kan geen nieuwe account maken want  het e-mailadres {$a} is al geregistreerd';
$string['emailtakenupdate'] = 'Je e-mailadres is niet geüpdatet want {$a} is al geregistreerd';
$string['errorparsingxml'] = 'Fout bij het verwerken van de XML: {$a}';
$string['exception'] = 'SAML2 uitzondering: {$a}';
$string['expirydays'] = 'Vervaldag';
$string['flaggedresponsetypemessage'] = 'Toon aangepast bericht';
$string['flaggedresponsetyperedirect'] = 'Redirect naar externe URL';
$string['flagmessage'] = 'Antwoordbericht';
$string['flagmessage_default'] = 'Je bent aangemeld bij je identiteitsprovider, maar deze account heeft beperkte rechten voor Moodle. Neem contact op met je systeembeheerder voor meer informatie.';
$string['flagmessage_help'] = '<p>Het te tonen bericht wanneer een gebruiker geen toegang krijgt tot Moodle gebaseerd op de geconfigureerde groepsbeperkingen.</p>
<p>(Wordt enkel getoond wanneer \'Antwoordtype\' is ingesteld op \'Toon aangepast bericht\').</p>';
$string['flagredirecturl'] = 'Redirect URL';
$string['flagredirecturl_help'] = '<p>De URL waarnaar een gebruiker gestuurd wordt wanneer een gebruiker geen toegang krijgt tot Moodle gebaseerd op de geconfigureerde groepsbeperkingen.</p>
<p>(Wordt enkel getoond wanneer \'Antwoordtype\' is ingesteld op \'Redirect naar externe URL\').</p>';
$string['flagresponsetype'] = 'Antwoordtype account blokkeren';
$string['flagresponsetype_help'] = 'Als de toegang geblokkeerd is op basis van geconfigureerde groepsbeperkingen, wat moet Moodle dan doen?';
$string['groupattr'] = 'Groepsattribuut';
$string['groupattr_help'] = 'Attribuut dat een aantal gebruikersgroepen bevat.';
$string['idpattr'] = 'Koppel IdP';
$string['idpattr_help'] = 'Welk IdP-attribuut moet gekoppeld worden met een Moodle gebruikersveld?';
$string['idpmetadata'] = 'Idp metadata XML of publieke xml URL';
$string['idpmetadata_badurl'] = 'De url gaf geen gegevens terug';
$string['idpmetadata_help'] = 'vb XML met een EntityDescriptor element';
$string['idpmetadata_invalid'] = 'De XML van de Idp is niet geldig';
$string['idpmetadata_noentityid'] = 'De XML van de Idp heeft geen entityID';
$string['idpmetadatarefresh'] = 'IdP metadata verversen';
$string['idpmetadatarefresh_help'] = 'Start een geplande taak om de IdP Metadata te updaten van een IdP metadata URL';
$string['idpname'] = 'Idp label overschrijven';
$string['idpnamedefault'] = 'Login via SAML2';
$string['idpnamedefault_varaible'] = 'Aanmelden via SAML2 ({$a})';
$string['idpname_help'] = 'vb mijnUniversiteit - dit wordt uit de metadata gehaald en zal getoond worden op de dubbele loginpagina (indien ingeschakeld)';
$string['localityname'] = 'Localiteit';
$string['locked'] = 'Geblokkeerd';
$string['logdir'] = 'Log map';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'De log map waarnaar SSPHP zal schrijven. Het bestand zal simplesamlphp.log genoemd worden';
$string['logtofile'] = 'Logbestand inschakelen';
$string['logtofile_help'] = 'Dit inschakelen zal de SSPHP logs naar een bestand in de logmap sturen';
$string['manageidpsheading'] = 'Beheer beschikbare IdP\'s';
$string['mdlattr'] = 'Koppelen van Moodle';
$string['mdlattr_help'] = 'Met welk Moodle gebruikersveld moet het IdP-attribuut gekoppeld worden?';
$string['metadatafetchfailed'] = 'Ophalen van metadata mislukt: {$a}';
$string['metadatafetchfailedstatus'] = 'Ophalen van metadata mislukt: statuscode {$a}';
$string['metadatafetchfailedunknown'] = 'Ophalen van metadata mislukt: onbekende cURL-fout';
$string['multiidpbuttons'] = 'Knoppen met icoontjes';
$string['multiidpdisplay'] = 'Type tonen van meerdere IdP\'s';
$string['multiidpdisplay_help'] = 'Als een IdP metadata xml meerdere IdP\'s bevat, hoe wordt elke IdP dan getoond?';
$string['multiidpdropdown'] = 'Rolmenu';
$string['multiidpinfo'] = '<ul>
<li>Een IdP kan alleen gebruikt worden als die actief staat</li>
<li>Wanneer duaal aanmelden is ingeschakeld, zullen alle actieve IdP\'s op de login-pagina getoond worden</li>
<li>Wanneer een IdP als standaard is ingesteld en Duaal aanmelden is niet ingeschakeld, dan zal deze IdP automatisch gebruikt worden behalve als  ?multiidp=on of saml=off wordt doorgegeven aan /login/index.php</li>
<li>Wanneer een IdP als beheerder is ingesteld zullen alle gebruikers die via deze IdP aanmelden automatisch een beheerder zijn</li>
<li>Een IdP kan een alias gegeven worden wanneer je naar /login/index.php?idpalias={alias} gaat, kan de alias van de te gebruiken IdP rechtstreeks doorgegeven worden.</li>
</ul>';
$string['nameidasattrib'] = 'Toon NameID als attribuut';
$string['nameidasattrib_help'] = 'De NameID claim zal getoond worden aan SSPHP als een attribuut met de naam NameID';
$string['nameidpolicy'] = 'NameID-beleid';
$string['nameidpolicy_help'] = 'Hulp ontbreekt';
$string['noattribute'] = 'Het aanmelden is gelukt maar we konden je attribuut  \'{$a}\'  niet vinden om jou te associëren met een account in Moodle.';
$string['noidpfound'] = 'De IdP \'{$a}\' is niet gevonden als geconfigureerde IdP.';
$string['nouser'] = 'Je bent aangemeld als  \'{$a}\'  maar je hebt geen account in Moodle.';
$string['nullprivatecert'] = 'Aanmaken van privaat certificaat mislukt.';
$string['nullpubliccert'] = 'Aanmaken van publiek certificaat mislukt.';
$string['organizationalunitname'] = 'Organisatie-unit';
$string['organizationname'] = 'Organisatie';
$string['passivemode'] = 'Passieve modus';
$string['phone1'] = 'Telefoonnummer';
$string['phone2'] = 'Mobiel telefoonnummer';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'De SAML2 authenticatie-plugin bewaart geen persoonlijke gegevens.';
$string['privatekeypass'] = 'Wachtwoord private certificaatsleutel';
$string['privatekeypass_help'] = 'Dit wordt gebruikt om het lokale Moodle-certificaat te tekenen. Door dit te wijzigen vervalt het huidige certificaat.';
$string['regenerate_submit'] = 'Opnieuw genereren';
$string['rememberidp'] = 'Aanmeldservice onthouden';
$string['required'] = 'Dit veld is vereist';
$string['requireint'] = 'Dit veld is vereist en moet een positief geheel getal zijn';
$string['restricted_groups'] = 'Beperkte groepen';
$string['restricted_groups_help'] = 'Kommagescheiden lijst van groepen. Gebruikers zullen geen toegang krijgen als ze in één van de groepen zitten die hier opgelijst zijn.';
$string['selectloginservice'] = 'Kies een aanmeldservice';
$string['sha1'] = 'Verouderd SHA1 (gevaarlijk)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'Toon IdP-link';
$string['showidplink_help'] = 'Dit toont een link naar de IDP wanneer de site geconfigureerd is.';
$string['signaturealgorithm'] = 'Ondertekeningsalgoritme';
$string['signaturealgorithm_help'] = 'Dit is het algoritme dat wordt gebruikt om SAML-aanvragen te ondertekenen. Waarschuwing: het SH1-algoritme wordt enkel voor terugwaartse compatibiliteit aangeboden. Gebruik het enkel wanneer het echt niet anders kan. Aangeraden wordt om minstens SHA256 te gebruiken.';
$string['spmetadata'] = 'SP metadata';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Bekijk de  Service Provider Metadata</a> | <a href=\'{$a}?download=1\'>Download SP Metadata</a>
<p>Je moet dit waarschijnlijk aan de beheerder van je Idp geven om je op de toegelaten lijst te zetten.</p>';
$string['spmetadatasign'] = 'SP Metadata ondertekening';
$string['spmetadatasign_help'] = 'Onderteken de SP Metadata';
$string['sspversion'] = 'SimpleSAMLphp-versie';
$string['stateorprovincename'] = 'Staat of provincie';
$string['suspendeduser'] = 'Je bent succesvol aangemeld als \'{$a}\', maar je account is geschorst in Moodle.';
$string['taskmetadatarefresh'] = 'Metadata ververs-taak';
$string['test_auth'] = '<a href="{$a}">Test isAuthenticated en login</a>';
$string['test_auth_button_login'] = 'IdP login';
$string['test_auth_button_logout'] = 'IdP afmelden';
$string['test_auth_str'] = 'Test isAuthenticated en login';
$string['test_passive'] = '<a href="{$a}">Test using isPassive</a>';
$string['test_passive_str'] = 'Test gebruik isPassive';
$string['tolower'] = 'Kleine letters';
$string['tolower_help'] = 'Kleine letters toepassen op Idp-attribuut voor het koppelen?';
$string['unlocked'] = 'Niet geblokkeerd';
$string['unlockedifempty'] = 'Niet geblokkeerd indien leeg';
$string['update_never'] = 'Nooit';
$string['update_oncreate'] = 'Bij aanmaken';
$string['update_onlogin'] = 'Bij elke login';
$string['update_onupdate'] = 'Bij aanpassen';
$string['wrongauth'] = 'Login als  \'{$a}\' is gelukt, maar je hebt geen rechten om deze Moodle-site te gebruiken.';
