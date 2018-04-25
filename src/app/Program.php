<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\DateHelper;

class Program extends Model
{
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    // protected $dateFormat = 'Y-m-d H:i:sO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'start_time',
        'end_time',
        'person_name',
        'house_no',
        'street',
        'suburb',
        'postcode',
        'state'
    ];

    protected $dates = [
        'start_date',
        'created_at',
        'updated_at'
    ];

    /**
     * Set the program's start date.
     *
     * @param  string  $value
     * @return void
     */
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = DateHelper::getStorageDate($value);
    }

    /**
     * Set the program's start time.
     *
     * @param  string  $value
     * @return void
     */
    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = DateHelper::getStorageTime($value);
    }

    /**
     * Set the program's end time.
     *
     * @param  string  $value
     * @return void
     */
    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = DateHelper::getStorageTime($value);
    }

    /**
     * Get the program's start date.
     *
     * @param  string  $value
     * @return void
     */
    public function getStartDateAttribute($value)
    {
        return DateHelper::getDisplayDate($value);
    }

    /**
     * Get the program's start time.
     *
     * @param  string  $value
     * @return void
     */
    public function getStartTimeAttribute($value)
    {
        return DateHelper::getDisplayTime($value);
    }

    /**
     * Get the program's end time.
     *
     * @param  string  $value
     * @return void
     */
    public function getEndTimeAttribute($value)
    {
        return DateHelper::getDisplayTime($value);
    }
}
