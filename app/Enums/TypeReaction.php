<?php

namespace App\Enums;

enum TypeReaction: string {

    use EnumToArray;

    case PARTAGE    = "partage";

    case JAIME      = "jaime";

    case NOTE       = "note";

    case VUE        = "vue";

}
