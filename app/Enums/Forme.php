<?php

namespace App\Enums;

enum Forme: string {

    use EnumToArray;

    case RONDE = "ronde";

    case SKINNY = "skinny";

}
