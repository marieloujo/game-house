<?php

namespace App\Enums;

enum TypeFile: string
{

    use EnumToArray;

    case IMAGE         = 'image';
    case VIDEO         = 'video';


    public static function getFromExtension(string $extension) {
        switch ($extension) {
            case "jpg":
            case "jpeg":
            case 'png':
            case 'gif':
            case 'svg':
                    return self::IMAGE;
                    break;
            case "mp4":
            case 'avi':
            case 'mov':
                return  self::VIDEO ;
                break;
            default:
                return self::IMAGE;
        }
    }

}
