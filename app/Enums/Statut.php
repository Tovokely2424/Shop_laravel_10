<?php

namespace App\Enums;

enum Statut : string
{
 case Valide = 'Traité';
 case Encours = 'Encours';
 case Default= 'Default';
}