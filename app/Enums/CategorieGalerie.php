<?php

namespace App\Enums;


enum CategorieGalerie: string {

    use EnumToArray;

    case COUVERTURE = "couverture";

    case AUTRE = "autre";
}
