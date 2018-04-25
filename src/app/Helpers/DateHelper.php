<?php
/**
 * Helper class for Date functions
 * @since 30/06/2017
 * @author IXA DEV TEAM - Brisbane
 */
namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    /**
     * Get date in the display format
     *
     * @param String $value
     * @return null|String
     */
    public static function getDisplayDate($value)
    {
        if (empty($value)) {
            return null;
        }

        $dateTime = Carbon::createFromFormat('Y-m-d', $value);
        return $dateTime->format('d/m/Y');
    }

    /**
     * Get date in the storage format
     *
     * @param String $value
     * @return null|String
     */
    public static function getStorageDate($value)
    {
        if (empty($value)) {
            return null;
        }

        $dateTime = Carbon::createFromFormat('d/m/Y', $value);
        return $dateTime->format('Y-m-d');
    }

    /**
     * Get time in the storage format
     *
     * @param String $value
     * @return null|String
     */
    public static function getDisplayTime($value)
    {
        if (empty($value)) {
            return null;
        }

        $dateTime = Carbon::createFromFormat('H:i:s', $value);
        return $dateTime->format('h:i A');
    }

    /**
     * Get time in the storage format
     *
     * @param String $value
     * @return null|String
     */
    public static function getStorageTime($value)
    {
        if (empty($value)) {
            return null;
        }

        $dateTime = Carbon::createFromFormat('H:i', $value);
        return $dateTime->format('H:i:s');
    }
}
