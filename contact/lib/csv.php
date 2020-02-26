<?php

/**
 * Sauvegarde les contacts depuis un tableau dans un fichier CSV.
 * 
 * @param string $filename chemin du fichier de sauvegarde
 * @param array $contacts tableau des contacts
 */
function saveFile(string $filename, array $contacts) {
    $data = '';

    foreach ($contacts as $c) {
        $data .= sprintf("%s,%s,%s,%s\n", $c['firstname'], $c['lastname'], $c['email'], $c['phone']);
    }

    return file_put_contents($filename, $data, LOCK_EX) !== false;
}

/**
 * Chargement des contacts au format CSV dans un tableau PHP.
 * 
 * @param string $filename
 * @return array retourne le tableau des contacts.
 */
function loadContacts(string $filename): array {
    $contacts = [];
    $handle = fopen($filename, 'r');

    if ($handle !== false) {
        while (($data = fgetcsv($handle, 1024)) !== false) {
            $contacts[] = [
                'firstname' => $data[0],
                'lastname' => $data[1],
                'email' => $data[2],
                'phone' => $data[3]
            ];
        }
    }
    return $contacts;
}
