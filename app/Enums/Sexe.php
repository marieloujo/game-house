<?php

namespace App\Enums;

enum Sexe: string {

    use EnumToArray;

    case MASCULIN = "masculin";

    case FEMININ  = "feminin";

}
