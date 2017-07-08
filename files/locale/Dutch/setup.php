<?php
// Index
$locale['setup_0000'] = "PHP-Fusion 9.0 Editie Setup";
$locale['setup_0001'] = "PHP-Fusion 9.0 Editie Setup";
$locale['setup_0002'] = 'Welkom bij de PHP-Fusion 9.0 Installatie';
$locale['setup_0003'] = "Het installatie programma zal je begeleiden door alle stappen die nodig zijn om PHP-Fusion CMS op je server te installeren. Als je meer hulp nodig hebt, controleer dan onze <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208' target='_blank'>Online Installatie Documentatie</a>.";
$locale['setup_0005'] = " Ik heb de <a href='https://php-fusion.co.uk/license/' target='_blank'>algemene voorwaarden</a> gelezen en ga daarmee akkoord";
$locale['setup_5000'] = "Om PHP-Fusion te mogen gebruiken, dien je akkoord te gaan met de algemen voorwaarden</a>.";
$locale['setup_0010'] = "Huidige versie - ";
$locale['setup_0011'] = "nl";
$locale['setup_0012'] = "utf-8";
$locale['setup_0020'] = "PHP-Fusion Upgrade";
$locale['setup_0022'] = "Welkom bij de PHP-Fusion Upgrading Service";
$locale['setup_0023'] = "De upgrade service zal je begeleiden door alle stappen die nodig zijn om PHP-Fusion CMS op je server te upgraden. Volg a.u.b. alle stappen die nodig zijn en controleer alle informatie die bednodigd is.";
$locale['setup_0050'] = "Web Server";
$locale['setup_0051'] = "PHP Versie";
$locale['setup_0052'] = "PHP Extensie";
$locale['setup_0053'] = "OPCache Ondersteuning";
$locale['setup_0054'] = "PDO Database Ondersteuning";
$locale['setup_0055'] = "PHP Memory limiet";
$locale['setup_0056'] = "Bestanden controleer vereisten";
$locale['setup_0101'] = "Introductie";
$locale['setup_0102'] = "Testen bestands- en mappermissies";
$locale['setup_0103'] = "Database Instellingen";
$locale['setup_0104'] = "Config / Database setup";
$locale['setup_0105'] = "Configureer Basis Systeem";
$locale['setup_0106'] = "Gegevens primaire beheerder";
$locale['setup_0107'] = "Laatste instellingen";
$locale['setup_0109'] = "The minimale versie van Apache nodig om PHP-Fusion te kunnen uitvoeren zonder mod_rewrite ingeschakeld is 2.2.16.";
$locale['setup_0110'] = "Door de instelling voor Servertokens in httpd.confg, is het onmogelijk om de versie van Apache zonder mod_rewrite te bepalen, een minimale versie van 2.2.16 is nodig.";
$locale['setup_0112'] = "De phpinfo() functe is uitgeschakeld voor veiligheids redenen. Om de phpinfo() informatie van uw server te zien, wijzig uw PHP instellinen of neem contact op met uw server beheerder.";
$locale['setup_0113'] = "Uw PHP installatie is te oud. PHP-Fusion heeft minimaal versie 5.5.21 nodig. PHP versies hoger dan 5.6.5 or 5.5.21 zijn voorzien van ingebouwde SQL injection beveiliging voor mysql databases. Het wordt aanbevolen om te updaten.";
$locale['setup_0114'] = "Voor PHP-Fusion het is nodig PHP extension in te schakelen in onderstaande lijst";
$locale['setup_0115'] = "Inschakeld";
$locale['setup_0115a'] = "Niet Inschakeld";
$locale['setup_0116'] = "PHP OPcode caching kan uw sites's performance aanzienlijk verbeteren Het word <strong>ten zeerste aangeraden</strong> om <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPcache</a> op uw server te installeren.";
$locale['setup_0118'] = "Het lijkt er op dat uw webserver geen PDO (PHP Data Objects) ondersteund. Vraag uw hosting provider of deze native PDO extensie ondersteunen.";
$locale['setup_0119a'] = "Overweeg us PHP memory limit te verhogten tot %memory_minimum_limit om fouten te voorkomen gedurende het installatie proces.";
$locale['setup_0119b'] = "Verhoog de memory limit door de memory_limit parameter aan de passen in het bestand ".get_cfg_var('cfg_file_path')." en herstart uw your web server (of neem contact op met uw systeem beheerder voor ondersteuning).";
$locale['setup_0119c'] = "Neem contact op met uw systeem beheerder of hosting provider voor ondersteuning uw PHP memory limit te verhogen.";
$locale['setup_stepx'] = "Step %1\$d: %2\$s";
// Buttons
$locale['setup_0120'] = "Afronden Configuratie";
$locale['setup_0121'] = "Volgende";
$locale['setup_0122'] = "Probeer nogmaals";
$locale['setup_0123'] = "Afronden";
$locale['setup_0124'] = "Ga naar herstel opties";
$locale['setup_0125'] = "Deinstalleren bezig, wachten a.u.b....";
$locale['setup_0130'] = "Xdebug instellingen";
$locale['setup_0131'] = "xdebug.max_nesting_level is ingesteld op";
$locale['setup_0132'] = "Zet {%code%} in uw PHP configuratie omdat anders sommige pagina's op uw PHP-Fusion site niet werken als deze instelling te laag is.";
$locale['setup_0134'] = "Alle benodigde bestanden hebben de juiste schrijfrechten.";
$locale['setup_0135'] = "Om de installatie voor te kunnen zetten, dienen onderstaande bestanden en mappen te worden voorzien van schrijfrechten. Chmod a.u.b. de bestanden to 755 or 777 om verder te gaan";
$locale['setup_0136'] = "Niet beschrijfbaar (Mislukt)";
$locale['setup_0137'] = "Beschrijfbaar (Gelukt)";
$locale['setup_0138'] = "Database verbinding gemaakt";
$locale['setup_0139'] = "Database kolom selectie gemaakt";
$locale['setup_0140'] = "Database is beschikbaar en gereed voor installatie";
$locale['setup_0141'] = "Database rechten en toegang gecontroleerd";
$locale['setup_0142'] = "config.php bestand aangemaakt";
$locale['setup_0143'] = "De opgegeven tabel prefix is reeds in gebruik. De installer zal doorgaan met aangepaste isntellingen indien nodig";
$locale['setup_0144'] = "Database diagnostiek Afgerond";
// Step 1
$locale['setup_1000'] = "Kies a.u.b. de gewenste taal (locale):";
$locale['setup_1001'] = "U kunt meer talen downloaden van de <a href='https://www.php-fusion.co.uk/downloads.php#langpacks' target='_blank'><strong>PHP-Fusion Official Support Site</strong></a> website";
$locale['setup_1002'] = "Welkom bij de PHP-Fusion 9.0 Herstel Mode.";
$locale['setup_1003'] = "We hebben geconstateerd dat er reeds een systeem geinstalleerd is.<br/><br/>Maak a.u.b. een keuze uit de volgende opties om verder te gaan.";
$locale['setup_1004'] = "Schone installatie";
$locale['setup_1005'] = "Je kunt je database deinstalleren en opschonen en opnieuw een schone installatie starten.";
$locale['setup_1006'] = "MAAK A.U.B. EEN BACKUP VAN JE CONFIG.PHP. DEZE ZAL WORDEN VERWIJDERD VAN HET SYSTEEM GEDURENDE DE INSTALLATIE.";
$locale['setup_1007'] = "Deinstalleren en Opnieuw beginnen";
$locale['setup_1008'] = "Basis Systeem Installeerder";
$locale['setup_1009'] = "Verander basis systeem configuratie.";
$locale['setup_1010'] = "Ga naar Systeem Installeerder";
$locale['setup_1011'] = "Verander Primaire Acount Gegevens";
$locale['setup_1012'] = "Verander Systeem Super Beheerder details zonder het wachtwoord te herstellen of verplaats SB inloggegevens naar een andere persoon.";
$locale['setup_1013'] = "Verander Super Beheerder Gegevens";
$locale['setup_1014'] = "Regenereer .htaccess";
$locale['setup_1015'] = "Verwijder huidig bestand en vervang door een standaard versie van het .htaccess bestand";
$locale['setup_1016'] = "Genereer bestand";
$locale['setup_1017'] = "Afbreken en Verlaten van deze installeerder";
$locale['setup_1018'] = "Je kunt deze installeerder door op de button hieronder te klikken. Dit zal je config_temp.php terug hernoemen naar config.php.";
$locale['setup_1019'] = "Verlaat Installeerder";
$locale['setup_1020'] = ".htaccess bestand aangemaakt/aangepast";
// Step 2
$locale['setup_1090'] = "Bestanden";
$locale['setup_1091'] = "Status";
$locale['setup_1092'] = "Database Configuratie en Stuurprogramma";
$locale['setup_1106'] = "Server en bestandsstructuur vereisten onderzoek";
// Step 3 - Access criteria
$locale['setup_1200'] = "Database Instellingen en Server Paden";
$locale['setup_1201'] = "Geef a.u.b. de gegevens voor toegang tot uw MySQL database.";
$locale['setup_1202'] = "Database hostnaam:";
$locale['setup_1203'] = "Naam van databasegebruiker:";
$locale['setup_1204'] = "Database wachtwoord:";
$locale['setup_1205'] = "Database naam:";
$locale['setup_1206'] = "Tabelvoorvoegsel:";
$locale['setup_1207'] = "Cookie Voorvoegsel:";
$locale['setup_1208'] = "Database stuurprogramma";
// Step 4 - Database Setup
$locale['setup_1210'] = "PHP-Fusion installatie fouten. herstart a.u.b. de installeerder.";
$locale['setup_1211'] = "Nieuwe PHP-Fusion installatie afgerond. Ga a.u.b. verder met de volgende stap.";
$locale['setup_1212'] = "Site and Super Admin Configuratie";
$locale['setup_1213'] = "Site Informatie Details";
$locale['setup_1214'] = "Site Naam";
$locale['setup_1215'] = "PHP-Fusion Powered Website";
$locale['setup_1216'] = "PHP-Fusion is een lichtgewicht open source content management system (CMS) geschreven in PHP.";
$locale['setup_1217'] = "Uw login gegevens zijn aangepast. Gebruik a.u.b. vanaf nu de nieuwe login gegevens.";
$locale['setup_1220'] = "De naam van de database die u wilt gebruiken met PHP-Fusion";
$locale['setup_1221'] = "Uw MYSQL gebruikersnaam";
$locale['setup_1222'] = "...en uw your MYSQL wachtwoord";
$locale['setup_1223'] = "Maak dit uniek om uw database te beveiligen";
$locale['setup_1224'] = "Browser Cookie Identifier Voorvoegsel";
$locale['setup_1307'] = "Verzeker u ervan dat config.php schrijfbaar is.";
$locale['setup_1310'] = "Niet in staat om te verbinden met de MySQL database.";
$locale['setup_1311'] = "De opgegeven MySQL database bestaat niet.";
$locale['setup_1313'] = "Het gewenste tabelvoorvoegsel is al in gebruik. Er kunnen geen tabellen aangemaakt worden. Begin a.u.b. overnieuw of ga door met de volgende stap.";
$locale['setup_1317'] = "Vul A.U.B. alle MySQL velden in.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Inloggegevens primaire superbeheerder";
$locale['setup_1501'] = "Configureer je Super Beheerder inloggegevens.";
$locale['setup_1502'] = "Wijzig je primaire Super Beheerder inloggegevens";
$locale['setup_1503'] = "Er is een bestaand Super Beheerder Account gedetecteerd. Als je de detals van dit account wilt aanpassen, voer dan de aangepaste gegevens hier in. ";
$locale['setup_1504'] = "Gebruikersnaam:";
$locale['setup_1505'] = "Inlogwachtwoord:";
$locale['setup_1506'] = "Inlogwachtwoord herhalen:";
$locale['setup_1507'] = "Beheerderwachtwoord:";
$locale['setup_1508'] = "Beheerderwachtwoord herhalen:";
$locale['setup_1509'] = "E-mailadres:";
$locale['setup_1510'] = "Website Email adres:";
$locale['setup_1511'] = "Selecteer Website Regio:";
$locale['setup_1512'] = "Site Taal Installaties:";
$locale['setup_1513'] = "Site Eigenaar naam";
// Progress Reports
$locale['setup_1600'] = "Installeren ";
$locale['setup_1601'] = "Aanpassen table structuur op ";
$locale['setup_1602'] = "Kolom toevoegen op ";
$locale['setup_1603'] = "Vullen met data ";
// Step 6 - User details validation
$locale['setup_5010'] = "De gebruikernaam bevalt ongeldige tekens.";
$locale['setup_5011'] = "Het gebruikernaamveld moet worden ingevuld.";
$locale['setup_5012'] = "Uw twee inlogwachtwoorden komen niet overeen.";
$locale['setup_5013'] = "Ongeldig inlogwachtwoord. Gebruik a.u.b. alleen alfanumerieke tekens.<br />Het wachtwoord dient minimaal acht tekens lang te zijn.";
$locale['setup_5015'] = "Uw twee beheerderwachtwoorden komen niet overeen.";
$locale['setup_5016'] = "Uw loginwachtwoord en beheerderwachtwoord moeten verschillend zijn.";
$locale['setup_5017'] = "Ongeldig beheerderwachtwoord. Gebruik a.u.b. alleen alfanumerieke tekens.<br />Het wachtwoord dient minimaal acht tekens lang te zijn.";
$locale['setup_5020'] = "E-mailadres velden mogen niet leeg blijven.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Beheerders";
$locale['setup_3002'] = "Artikelen";
$locale['setup_3003'] = "Banners";
$locale['setup_3004'] = "BB-Codes";
$locale['setup_3005'] = "Zwarte lijst";
$locale['setup_3006'] = "Reacties";
$locale['setup_3007'] = "Eigen Pagina&rsquo;s";
$locale['setup_3008'] = "Database Backup";
$locale['setup_3010'] = "Downloads";
$locale['setup_3011'] = "FAQ&rsquo;s";
$locale['setup_3012'] = "Forum Beheer";
$locale['setup_3013'] = "Afbeeldingen";
$locale['setup_3014'] = "Infusions";
$locale['setup_3015'] = "Infusion Panelen";
$locale['setup_3016'] = "Leden";
$locale['setup_3017'] = "Nieuws Categorieën";
$locale['setup_3018'] = "Nieuws";
$locale['setup_3019'] = "Panelen";
$locale['setup_3020'] = "Foto Albums";
$locale['setup_3021'] = "PHP Info";
$locale['setup_3022'] = "Enquêtes";
$locale['setup_3023'] = "Site Links";
$locale['setup_3024'] = "Smileys";
$locale['setup_3026'] = "Upgrade";
$locale['setup_3027'] = "Gebruikers Groepen";
$locale['setup_3029'] = "Weblinks";
$locale['setup_3030'] = "Algemeen";
$locale['setup_3031'] = "Datum en Tijd";
$locale['setup_3033'] = "Registratie";
$locale['setup_3035'] = "Diverse";
$locale['setup_3036'] = "Priv&eacute; Berichten";
$locale['setup_3037'] = "Gebruikers Velden";
$locale['setup_3038'] = "Forum Rangen";
$locale['setup_3041'] = "Gebruikersbeheer";
$locale['setup_3044'] = "Beveiliging";
$locale['setup_3047'] = "Admin Wachtwoord Reset";
$locale['setup_3048'] = "Fouten Log";
$locale['setup_3049'] = "Gebruikers Log";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Taalinstellingen";
$locale['setup_3052'] = "Permalinks";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Thema Aanpassingen";
$locale['setup_3057'] = "Migratie Tool";
$locale['setup_3058'] = "Thema Instellingen";
//Multilanguage table rights
$locale['setup_3200'] = "Artikelen";
$locale['setup_3201'] = "Eigen Pagina&rsquo;s";
$locale['setup_3202'] = "Downloads";
$locale['setup_3203'] = "FAQ&rsquo;s";
$locale['setup_3204'] = "Forums";
$locale['setup_3205'] = "Nieuws";
$locale['setup_3206'] = "Foto Galerij";
$locale['setup_3207'] = "Enquêtes";
$locale['setup_3208'] = "E-mail Sjablonen";
$locale['setup_3209'] = "Weblinks";
$locale['setup_3210'] = "Site Links";
$locale['setup_3211'] = "Panelen";
$locale['setup_3212'] = "Forum Rangen";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Start Pagina";
$locale['setup_3302'] = "Downloads";
$locale['setup_3303'] = "FAQ&rsquo;s";
$locale['setup_3304'] = "Forum";
$locale['setup_3305'] = "Contact";
$locale['setup_3307'] = "Web Links";
$locale['setup_3308'] = "Foto Galerij";
$locale['setup_3309'] = "Zoeken";
$locale['setup_3310'] = "Link inzenden";
$locale['setup_3311'] = "Nieuws inzenden";
$locale['setup_3312'] = "Artikel inzenden";
$locale['setup_3313'] = "Foto inzenden";
$locale['setup_3314'] = "Download inzenden";
$locale['setup_3315'] = "Download Insturen";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Blog insturen";
$locale['setup_3318'] = "Blog Archief Paneel";
$locale['setup_3319'] = "Laatste Discussies";
$locale['setup_3320'] = "Deelnemende Discussies";
$locale['setup_3321'] = "Gevolgde Onderwerpen";
$locale['setup_3322'] = "Niet beantwoorde onderwerpen";
$locale['setup_3323'] = "Niet opgeloste vragen";
$locale['setup_3324'] = "Start een Nieuw Onderwerp";
$locale['setup_3325'] = "Nieuwste Artikelen";
$locale['setup_3326'] = "Nieuwste Downloads";
$locale['setup_3327'] = "FAQ inzenden";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigatie";
$locale['setup_3401'] = "Online Gebruikers";
$locale['setup_3402'] = "Forum Onderwerpen";
$locale['setup_3403'] = "Laatste Artikelen";
$locale['setup_3404'] = "Welkomst Bericht";
$locale['setup_3405'] = "Forum Onderwerpenlijst";
$locale['setup_3406'] = "Gebruikersinformatie";
$locale['setup_3407'] = "Ledenenquête";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Bugs";
$locale['setup_3501'] = "Downloads";
$locale['setup_3502'] = "Games";
$locale['setup_3503'] = "Grafisch";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Journaal";
$locale['setup_3506'] = "Leden";
$locale['setup_3507'] = "Mods";
$locale['setup_3508'] = "Films";
$locale['setup_3509'] = "Netwerk";
$locale['setup_3510'] = "Nieuws";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Veiligheid";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Thema&rsquo;s";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Superbeheerder";
$locale['setup_3601'] = "Beheerder";
$locale['setup_3602'] = "Moderator";
$locale['setup_3603'] = "Nieuweling";
$locale['setup_3604'] = "Junior Lid";
$locale['setup_3605'] = "Lid";
$locale['setup_3606'] = "Senior Lid";
$locale['setup_3607'] = "Veteraan";
$locale['setup_3608'] = "Guru";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Lachen";
$locale['setup_3621'] = "Knipogen";
$locale['setup_3622'] = "Triest";
$locale['setup_3623'] = "Fronzen";
$locale['setup_3624'] = "Geschoqueerd";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Geweldig";
$locale['setup_3627'] = "Grijnzen";
$locale['setup_3628'] = "Boos";
$locale['setup_3629'] = "Leuk";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profiel";
$locale['setup_3641'] = "Contact Informatie";
$locale['setup_3642'] = "Diverse Informatie";
$locale['setup_3643'] = "Opties";
$locale['setup_3644'] = "Statistieken";
$locale['setup_3645'] = "Privacy";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Site Informatie";
$locale['setup_3661'] = "Discussies over het beheer van deze website";
// Stage 6 - User Fields
require_once(dirname(__FILE__)."/user_fields/user_aim.php");
require_once(dirname(__FILE__)."/user_fields/user_birthdate.php");
require_once(dirname(__FILE__)."/user_fields/user_icq.php");
require_once(dirname(__FILE__)."/user_fields/user_location.php");
require_once(dirname(__FILE__)."/user_fields/user_sig.php");
require_once(dirname(__FILE__)."/user_fields/user_skype.php");
require_once(dirname(__FILE__)."/user_fields/user_theme.php");
require_once(dirname(__FILE__)."/user_fields/user_web.php");
require_once(dirname(__FILE__)."/user_fields/user_yahoo.php");
require_once(dirname(__FILE__)."/user_fields/user_timezone.php");
require_once(dirname(__FILE__)."/user_fields/user_blacklist.php");

// Welcome message
$locale['setup_3650'] = "Welkom op uw site!";
// Final message
$locale['setup_1700'] = "De setup is voltooid!";
$locale['setup_1701'] = "PHP-Fusion 9.0 is nu klaar voor gebruik. Klik op afronden om je config_temp.php file te hernoemen naar config.php<br/>";
$locale['setup_1702'] = "<strong>Opmerking: Indien uw site goed blijkt te werken dient u uit veiligheidsoverwegingen de gehele /install map van de server te verwijdereen moet u config.php tegen schrijven beveiligen (CHMOD 644).</strong>";
$locale['setup_1703'] = "Dank u wel voor het kiezen van PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "E-mail Sjablonen";
$locale['setup_3801'] = "Notificatie bij een nieuw PM";
$locale['setup_3802'] = "U heeft een nieuw priv&eacute; bericht ontvangen van [USER] op [SITENAME]";
$locale['setup_3803'] = "Hallo [RECEIVER],\r\nU heeft een nieuw priv&eacute; bericht ontvangen met als titel [SUBJECT] van [USER] op [SITENAME]. U kunt uw priv&eacute; berichten lezen op [SITEURL]messages.php\r\n\r\nBericht: [MESSAGE]\r\n\r\nIndien u niet langer notificaties voor nieuwe priv&eacute; berichten per e-mail wilt ontvangen kunt u dit uitschakelen via het <strong>Opties Paneel</strong> in uw priv&eacute; berichten pagina.\r\n.\r\n\r\nGroeten,\r\n[SENDER].";
$locale['setup_3804'] = "Notificatie bij nieuwe forum posts";
$locale['setup_3805'] = "Thread Reply Notificatie - [SUBJECT]";
$locale['setup_3806'] = "Hallo [RECEIVER],\r\n\r\nEr is een antwoord geplaatst in het forumonderwerp \'[SUBJECT]\' welke u volgt op [SITENAME]. U kunt de onderstaande link gebruiken om het antwoord te bekijken:\r\n\r\n[THREAD_URL]\r\n\r\nIndien u het onderwerp niet langer wenst te volgen, dan kunt u op de link 'Volg dit onderwerp niet langer' klikken. U vindt de link bovenaan in het betreffende onderwerp.\r\n\r\nRegards,\r\n[SENDER].";
$locale['setup_3807'] = "Contact formulier";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artikelen";
$locale['articles']['description'] = "Een Standaard Documentatie Systeem.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Een Standaard Blogging Systeem.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "Een Standard Download Systeem.";
$locale['faqs']['title'] = "FAQ&rsquo;s";
$locale['faqs']['description'] = "Een Vraagbaak FAQ Systeem.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "A Plakbord Forum Systeem.";
$locale['news']['title'] = "Nieuws";
$locale['news']['description'] = "Een Nieuws Publicatie Systeem.";
$locale['photos']['title'] = "Foto Albums";
$locale['photos']['description'] = "Een Foto Albums Publicatie Systeem.";
$locale['polls']['title'] = "Enqu&egrave;tes";
$locale['polls']['description'] = "Een Enqu&egrave;te and Leden Stem Systeem.";
$locale['weblinks']['title'] = "Weblinks";
$locale['weblinks']['description'] = "Een Web Adressen Systeem.";
$locale['install'] = "Basis systeem";
