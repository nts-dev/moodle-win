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
 * Strings for component 'cachestore_redis', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   cachestore_redis
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['password'] = 'Mot de passe';
$string['password_help'] = 'Ce réglage définit le mot de passe du serveur Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Préfixe des clefs';
$string['prefix_help'] = 'Ce préfixe est utilisé pour toutes les clefs du serveur Redis.
* S\'il n\'y a qu\'une instance de Moodle qui utilise ce serveur, la valeur par défaut peut être conservée.
* En raison de la longueur limités des clefs, le préfixe ne doit pas dépasser 5 caractères.';
$string['prefixinvalid'] = 'Préfixe non valide. Les seuls caractères autorisés sont a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Le plugin de stockage de cache Redis enregistre des données brièvement, de par sa fonction de mise en cache. Ces données sont enregistrées sur un serveur Redis, où les données sont supprimées régulièrement.';
$string['privacy:metadata:redis:data'] = 'Les diverses données enregistrées en cache';
$string['serializer_igbinary'] = 'L sérialiseur <i>igbinary</i>.';
$string['serializer_php'] = 'Le sérialiseur PHP par défaut.';
$string['server'] = 'Serveur';
$string['server_help'] = 'Ce réglage détermine le nom d\'hôte ou l\'adresse IP du serveur Redis.';
$string['test_password'] = 'Tester le mot de passe';
$string['test_password_desc'] = 'Test du mot de passe du serveur Redis.';
$string['test_serializer'] = 'Sérialiseur';
$string['test_serializer_desc'] = 'Sérialiseur à utiliser pour les tests.';
$string['test_server'] = 'Serveur de test';
$string['test_server_desc'] = 'Serveur Redis pour effectuer des tests.';
$string['useserializer'] = 'Utiliser le sérialiseur';
$string['useserializer_help'] = 'Indique l\'outil à utiliser pour la stérilisation. Les sérialiseurs valides sont Redis::SERIALIZER_PHP et Redis::SERIALIZER_IGBINARY. Ce dernier n\'est supporté que lorsque phpredis est configuré avec l\'option --enable-redis-igbinary et que l\'extension <i> igbinary</i> est installée.';
