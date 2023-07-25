<?php

namespace App\Enums;

enum Taille: string {

    use EnumToArray;

    case COURTE = "courte";

    case ELANCER = "elancer";

    case MOYENNE = "moyenne";
}
