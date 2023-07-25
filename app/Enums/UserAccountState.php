<?php

namespace App\Enums;

use Exception;

enum UserAccountState: int
{
    use EnumToArray;

    case BLOQUER        = -1;

    case EN_ATTENTE     = 0;

    case ACTIF          = 1;


    public static function getDescription($value): string
    {
        if ($value instanceof UserAccountState)
            if (!in_array($value, self::names())) throw new Exception("User status inconnu", 1);

        else if (is_string($value))
            if (!in_array($value, self::values())) throw new Exception("User status inconnu", 1);

        switch ($value) {
            case $value instanceof UserAccountState ? self::BLOQUER : self::BLOQUER->value:
                return "Compte bloqué";
                break;

            case $value instanceof UserAccountState ? self::EN_ATTENTE : self::EN_ATTENTE->value:
                return "Compte en attente d'approbation";
                break;

            default:
                return "Compte actif";
        }
    }

    public static function getName(mixed $value): string
    {
        if ($value instanceof UserAccountState)
            if (!in_array($value, self::values())) throw new Exception("User status inconnu", 1);

        else if (is_string($value))
            if (!in_array($value, self::values())) throw new Exception("User status inconnu", 1);

        switch ($value) {
            case $value instanceof UserAccountState ? self::BLOQUER : self::BLOQUER->value:
                return "Bloqué";
                break;

            case $value instanceof UserAccountState ? self::EN_ATTENTE : self::EN_ATTENTE->value:
                return "En Attente";
                break;

            default:
                return "Actif";
        }
    }

}
