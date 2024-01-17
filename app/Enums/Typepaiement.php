<?php
namespace App\Enums;

enum Typepaiement : string
{
    case Default = 'Total';
    case Partiel = 'Partiel';
}