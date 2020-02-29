<?php

interface Removable
{
    public function delete();
}

class Video implements Removable
{
    public function delete(): void
    {
        echo 'Vidéo supprimée';
    }
}

class Word implements Removable
{
    public function delete(): void
    {
        echo 'Fichier Word supprimé';
    }
}

function poubelle(Removable $object): void
{
    $object->delete();
}

poubelle(new Video());
poubelle(new Word());
