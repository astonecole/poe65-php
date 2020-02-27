<?php

interface Removable {
    public function delete();
}

class Video implements Removable {
    public function delete() {
        echo 'Vidéo supprimée';
    }
}

class Word implements Removable {
    public function delete() {
        echo 'Fichier Word supprimé';
    }
}

function poubelle(Removable $object) {
    $object->delete();
}

poubelle(new Video());
poubelle(new Word());
