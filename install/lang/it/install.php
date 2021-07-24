<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Cartella Admin';
$string['availablelangs'] = 'Elenco delle lingue disponibili';
$string['chooselanguagehead'] = 'Seleziona lingua';
$string['chooselanguagesub'] = 'Scegli la lingua da usare durante l\'installazione. La lingua usata nel sito e dagli utenti potrà essere modificata in seguito.';
$string['clialreadyconfigured'] = 'Il file di configurazione config.php è già presente.
Utilizzare admin/cli/install_database.php per installare Moodle.';
$string['clialreadyinstalled'] = 'Il file config.php è già presente.
Utilizzare admin/cli/install_database.php per aggiornare Moodle.';
$string['cliinstallheader'] = 'Programma di installazione Moodle {$a} via linea di comando';
$string['databasehost'] = 'Host database';
$string['databasename'] = 'Nome database';
$string['databasetypehead'] = 'Scegli un database driver';
$string['dataroot'] = 'Cartella dati';
$string['datarootpermission'] = 'Permessi cartella dati';
$string['dbprefix'] = 'Prefisso tabelle';
$string['dirroot'] = 'Cartella di Moodle';
$string['environmenthead'] = 'Verifica dell\'ambiente...';
$string['environmentsub2'] = 'Ciascuna release di Moodle prevede come requisito minimo una data versione del PHP ed una serie di estensioni. Prima di una installazione o di un aggiornamento viene eseguita la verifica dei requisiti minimi. Se non sai come installare nuove versioni del PHP o le sue estensioni, contatta l\'amministratore del tuo server.';
$string['errorsinenvironment'] = 'Sono stati riscontarti problemi nel tuo ambiente';
$string['installation'] = 'Installazione';
$string['langdownloaderror'] = 'Purtroppo non è stato possibile scaricare la lingua "{$a}". L\'installazione proseguirà in lingua Inglese.';
$string['memorylimithelp'] = '<p>Il limite di memoria assegnata al PHP attualmente è {$a}.</p>

<p>Tale limite potrà causare problemi nel funzionamento di Moodle, specialmente se si utilizzano molti moduli di attività con molti utenti.</p>

<p>Raccomandiamo di impostare il PHP con un limite più alto, ad esempio 40M, usando uno dei modi seguenti:
<ol>
<li>Se possibile, ricompilare il PHP con l\'opzione <i>--enable-memory-limit</i>.
Questo consentirà a Moodle di impostare in autonomia il limite di memoria.</li>
<li>Se si ha accesso al file php.ini, è possibile modificare la variabile <b>memory_limit</b> a un valore più alto, ad esempio 40M. Se non hai accesso, puoi chiedere all\'amministratore di sistema di farlo.</li>
<li>Su alcuni server con il PHP è possibile creare un file .htaccess nella cartella di Moodle contenente questa linea:
<blockquote>php_value memory_limit 40M</blockquote>
<p>Tuttavia, su alcuni server la direttiva potrebbe impedire a <b>tutte</b> le pagine PHP di funzionare (appariranno degli errori durante la visualizzazione delle pagine), in tal caso si dovrà rimuovere il file .htaccess.</li></ol>';
$string['paths'] = 'Percorsi';
$string['pathserrcreatedataroot'] = 'Lo script di installazione non ha potuto creare la Cartella dei dati ({$a->dataroot}).';
$string['pathshead'] = 'Conferma percorsi';
$string['pathsrodataroot'] = 'Non è possibile scrivere nella  Cartella dati.';
$string['pathsroparentdataroot'] = 'La cartella genitore ({$a->parent}) non è scrivibile. Lo script di installazione non può creare la Cartella dati ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Alcuni web host utilizzano la cartella /admin come URL di accesso a pannelli di controllo od altre funzioni particolari. Tuttavia questo nome coincide con il nome della cartella che Moodle utilizza per i propri file di amministrazione. Per evitare conflitti, è possibile specificare un nome alternativo per la cartella Admin di Moodle. Ad esempio:<p><b>moodleadmin</b></p>
Tutti i link che puntano ai file di amministrazione di Moodle terranno conto di questa variazione.';
$string['pathssubdataroot'] = '<p>La cartella dove Moodle memorizzerà i file caricati dagli utenti.</p>
<p>L\'utente con il qule gira il processo del web server (in genere \'www-data\' o \'apache\') deve avere i permessi di lettura e di scrittura su questa cartella.</p>
<p>La cartella inoltre non deve essere direttamente accessibile via web.</p>
<p>Qualora la cartella non esista, lo script di installazione tenterà di crearla.</p>';
$string['pathssubdirroot'] = '<p>Percorso assoluto della cartella dove si trova il codice di Moodle.</p>';
$string['pathssubwwwroot'] = '<p>L\'iIndirizzo web per raggiungere a Moodle, in altre parole l\'indirizzo che gli utenti inseriranno nella barra degli indirizzi del proprio browser per accedere a questa installazione.</p>
<p>Non è possibile accedere alla stessa installazione Moodle usando più di un indirizzi web. Se il tuo sito usa più indirizzi web, devi configurare dei re-indirizzamenti permanenti per tutti gli altri indirizzi web.</p>
<p>Se il tuo sito è raggiungibile sia dalla Internet sia dalla rete interna (a volte chiamata Intranet), allora usa l\'indirizzo Internet pubblico.</p>
<p>Se l\'indirizzo utilizzato è errato, per favore correggilo nella barra degli indirizzi del browser e avvia nuovamente l\'installazione.</p>';
$string['pathsunsecuredataroot'] = 'La posizione della Cartella dati non è sicura';
$string['pathswrongadmindir'] = 'La cartella Admin non esiste';
$string['phpextension'] = '{$a} estensioni PHP';
$string['phpversion'] = 'Versione PHP';
$string['phpversionhelp'] = '<p>Moodle necessita come minimo della versione 5.6.5 del PHP. (La versione 7.0.x ha alcuni limiti nell\'engine)</p>
<p>La versione installata nel sistema è la {$a}</p>
<p>E\' necessario aggiornare la versione del PHP oppure spostarsi su un host che abbia una versione più aggiornata del PHP.<br>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Se vedi questa pagina hai installato correttamente e lanciato il pacchetto <strong>{$a->packname} {$a->packversion}</strong>. Complimenti!';
$string['welcomep30'] = 'La release di <strong>{$a->installername}</strong> include l\'applicazione per creare l\'ambiente necessario a far girare <strong>Moodle</strong>:';
$string['welcomep40'] = 'Il pacchetto include anche <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'utilizzo delle applicazioni incluse in questo pacchetto è regolato dalle rispettive licenze. L\'intero pacchetto <strong>{$a->installername}</strong> è <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> ed è distribuito in accordo alla licenza <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Le prossime pagine ti guideranno attraverso semplici passi per installare e configurare <strong>Moodle</strong> nel tuo computer. Puoi utilizzare le impostazioni di default oppure modificarle per adeguarle alle tue esigenze.';
$string['welcomep70'] = 'Fai click sul pulsante "Avanti" per continuare l\'installazione di <strong>Moodle</strong>.';
$string['wwwroot'] = 'Indirizzo web';
