<?php


// Script coded by RAW Networks

// Version 1.0-PHP

// License: Open Source / Free To Use


system('clear');

sleep('2');

$start = shell_exec('apt-get update -y; apt-get upgrade -y; update-ca-certificates');

echo $start;

system('clear');

sleep ('1');


echo "
###################################
#          RAW Networks           #
###################################
# 1. TeamSpeak Server installieren#
# 2. TeamSpeak Server starten     #
# 3. TeamSpeak Server stoppen     #
###################################";

    echo PHP_EOL;


    $command = readline('Geben Sie eine Zahl ein: ');

        if ($command == "1") {

            system('clear');

            shell_exec('apt install bzip2 -y');

            $pack = readline('Geben Sie den Archiv Namen ein z.B ts3.tar.bz2  : ');

            if ($pack == "" || $pack == " ") {

                system('clear');

                echo "Error: Ungeultige Eingabe!";

                sleep('2');

                exit(0);

            }

            echo PHP_EOL;
            system('clear');

            if (!is_dir('/home/ts3installer')) {

                mkdir('/home/ts3installer');

            }


            $dir = getcwd();

            echo $dir;


            shell_exec('cp ' . $dir . "/" . $pack . ' /home/ts3installer/');

            $dirconv = '' . $dir . "/" . $pack . '';

            shell_exec('cd /home/ts3installer; tar -xvf ' . $dirconv . '');

            system('clear');

            echo PHP_EOL;

            $x86oramd64 = readline('Welche Serverversion wird genutzt? x86 oder amd64? : ');

            if ($x86oramd64 == "amd64") {

                shell_exec('cd /home/ts3installer/teamspeak3-server_linux_amd64; chmod 777 ts3server_startscript.sh; apt-get install touch -y; touch .ts3server_license_accepted; sleep 2;');
                $outputamd = shell_exec('cd /home/ts3installer/teamspeak3-server_linux_amd64; ./ts3server_startscript.sh start');

                echo PHP_EOL;

                echo $outputamd;

                readline('Bitte die Daten abspeichern! : ');

                sleep('2');

                system('clear');

                echo "Vielen Dank fuer die Nutzung!";

                echo PHP_EOL;

                sleep('2');

            } elseif ($x86oramd64 == "x86") {

                shell_exec('cd /home/ts3installer/teamspeak3-server_linux_x86; chmod 777 ts3server_startscript.sh; apt-get install touch -y; touch .ts3server_license_accepted; sleep 2;');

                $outputx86 = shell_exec('cd /home/ts3installer/teamspeak3-server_linux_x86; ./ts3server_startscript.sh start');

                echo PHP_EOL;

                echo $outputx86;

                readline('Bitte die Daten abspeichern! : ');

                sleep('2');

                system('clear');

                echo "Vielen Dank fuer die Nutzung!";

                echo PHP_EOL;

                sleep('2');

            } elseif ($x86oramd64 == "") {

                system('clear');

                echo PHP_EOL;

                echo "Ungeultige Eingabe!";

                sleep('2');

                exit(0);

            } elseif ($x86oramd64 == " ") {

                system('clear');

                echo PHP_EOL;

                echo "Ungeultige Eingabe!";

                sleep('2');

                exit(0);

            } else {


            }

        }

        if ($command == "2") {

            system('clear');

            $startcom = readline('Welche Serverversion nutzen Sie? Geben Sie entweder x86 ein oder amd64 : ');

            echo PHP_EOL;


            // Startet den TS3 Server für die amd64 Version

            if ($startcom == "amd64") {

                system('clear');

                echo "Der TeamSpeak 3 Server wird gestartet...";

                echo PHP_EOL;


                sleep('2');

                shell_exec('cd /home/ts3installer/teamspeak3-server_linux_amd64; ./ts3server_startscript.sh start');

                system('clear');

                echo "Der TeamSpeak 3 Server wurde gestartet!";

                sleep('2');

                echo "Vielen Dank fuer die Nutzung!";

                echo PHP_EOL;

                sleep('2');

                exit(0);

            } // Startet den TS3 Server für die x86 Version

            elseif ($startcom == "x86") {

                system('clear');

                echo "Der TeamSpeak 3 Server wird gestartet...";

                echo PHP_EOL;


                sleep('2');

                shell_exec('cd /home/ts3installer/teamspeak3-server_linux_x86; ./ts3server_startscript.sh start');

                system('clear');

                echo "Der TeamSpeak 3 Server wurde gestartet!";

                sleep('2');

                echo "Vielen Dank fuer die Nutzung!";

                echo PHP_EOL;

                sleep('2');

                exit(0);

            } else {

            }

        }


            if ($command == "3") {

                system('clear');

                $stopcom = readline('Welche Servervversion nutzen Sie? Geben Sie entweder x86 ein oder amd64 : ');

                echo PHP_EOL;


                // Stoppt den TS3 Server für die x86 Version

                if ($stopcom == "x86") {

                    system('clear');

                    echo "Der TeamSpeak 3 Server wird gestoppt...";

                    echo PHP_EOL;

                    shell_exec('cd /home/ts3installer/teamspeak3-server_linux_x86; ./ts3server_startscript.sh stop');

                    system('clear');

                    echo "Der TeamSpeak 3 Server wurde gestoppt!";

                    sleep('2');

                    echo "Vielen Dank fuer die Nutzung!";

                    echo PHP_EOL;

                    sleep('2');

                    exit(0);

                    // Befehlscheck

                } elseif ($stopcom == "") {

                    system('clear');

                    echo "Ungueltige Eingabe!";

                    echo PHP_EOL;

                    sleep('3');

                    exit(0);

                } elseif ($stopcom == " ") {

                    system('clear');

                    echo "Ungueltige Eingabe!";

                    echo PHP_EOL;

                    sleep('3');

                    exit(0);
                } // Stoppt den TS3 Server für die amd64 Version

                elseif ($stopcom == "amd64") {

                    system('clear');

                    echo "Der TeamSpeak 3 Server wird gestoppt...";

                    echo PHP_EOL;

                    shell_exec('cd /home/ts3installer/teamspeak3-server_linux_amd64; ./ts3server_startscript.sh stop');

                    system('clear');

                    echo "Der TeamSpeak 3 Server wurde gestoppt!";

                    sleep('2');

                    echo "Vielen Dank fuer die Nutzung!";

                    echo PHP_EOL;

                    sleep('2');

                    exit(0);


                } else {


                }

        }



?>