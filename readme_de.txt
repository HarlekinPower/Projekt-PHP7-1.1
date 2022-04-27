----------------------------------------------------
Erklärung:
----------------------------------------------------

ACHTUNG: Projekt PHP7 1.1 ist keine offizielle PHP Fusion Version!

Bei Projekt PHP7 1.1 handelt es sich um eine, von Rolly8-HL und mir (Harlekin), angepasste englische PHP Fusion Version 7.02.07 mit deutscher Locale, welche mit PHP 7.1 mittels PDO arbeitet.

Projekt PHP7 1.1 wurde von uns gestartet, weil es zu diesem Zeitpunkt noch keine Lösung für PHP 7.1 gab. Für PHP 7.0 hatte ich ja bereits Projekt PHP7 1.0 fertig gemacht. Projekt PHP7 1.1 sollte auch mit PHP 7.0 laufen.

Projekt PHP7 1.1 ist ein reines Laien Projekt und natürlich können sich in den Dateien immer noch Fehler befinden! (Da kann man testen und testen, alles findet man leider nie.) Allerdings läuft es bei uns derzeit stabil.

Die Nutzung erfolgt also auf eigene Gefahr!


----------------------------------------------------
Installation:
----------------------------------------------------

1. Vor der Installation bitte sicherstellen, dass eine Datenbank besteht.

2. Im Verzeichnis files die Datei _config.php umbenennen in config.php

3. Den Inhalt vom Verzeichnis files auf den Webspace laden.

4. Den folgenden Dateien und Verzeichnissen CHMOD 777 geben. Sollte CHMOD 777 nicht gehen, CHMOD 755 verwenden.

- administration/db_backups/
- downloads/
- downloads/images/
- downloads/submissions/
- downloads/submissions/images/
- forum/attachments/
- ftp_upload/
- images/
- images/imagelist.js
- images/articles/
- images/avatars/
- images/news/
- images/news/thumbs/
- images/news_cats/
- images/photoalbum/
- images/photoalbum/submissions/
- config.php

4. Die Webseite im Browser aufrufen. Die Installation sollte automatisch starten. Wenn nicht, die die Webseite mit /setup.php aufrufen.
Beispiel: http://deine_webseite.de/setup.php

5. Den Schritten der Installation folgen.

6. Nach erfolgreicher Installation die setup.php löschen und der config.php CHMOD 644 geben.


