<?php

namespace App\Enums;

enum Preference: string {

    use EnumToArray;

    case CELIBATAIRE = "CELIBATAIRE";

    case PASSE_TEMPS = "PASSE_TEMPS";

}
