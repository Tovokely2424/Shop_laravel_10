<?php

namespace App\Enums;
enum Transaction : string
{
    case Mvola = 'Mvola';
    case AirtelMoney = 'Airtel Money';
    case OrgangeMoney = 'Orange Money';
    case Default = 'Espece';
}