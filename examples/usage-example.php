<?php

include '../src/bigDream/whois/Whois.php';

$sld = 'reg.ru';

$domain = new bigDream\whois\Whois($sld);

$whois_answer = $domain->info();

echo $whois_answer;

if ($domain->isAvailable()) {
    echo "Domain is available\n";
} else {
    echo "Domain is registered\n";
}
