<?php

#WebApp Title
$webtitle = "Sprinkler System";

#Set IP of OpenSprinkler
$os_ip = "192.168.1.30";

#Set OpenSprinkler password
$os_pw = "opendoor";

#Force SSL
$force_ssl = 1;

#How far back to show logs ex. '24 hours' or '14 days'
$timeViewWindow="7 days";

#Password File
$pass_file="/var/www/sprinklers/.htpasswd";

#Cache File
$cache_file = "/var/www/sprinklers/.cache";

#Sprinkler Log File
$log_file = "/var/www/sprinklers/SprinklerChanges.txt";

#Sprinkler Previous Status
$log_previous = "/var/www/sprinklers/SprinklerPrevious.txt";

#Enable/Disable Automatic Rain Delay Based on Weather
$auto_delay = 0;

#Rain Delay Default for Adverse Weather
$auto_delay_duration=24;

?>