<?php
namespace App\Enums;
enum livraison : string
{
    case Default = 'A specifier';
    case Adomicile = 'A domicile';
    case PointDeRecuperation = 'Au point de récupération';
    case Recupere = 'Recuperé';
}