<?php

namespace App\Models\Daily;

use App\Models\Model;

class DailyHarvest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'daily_id', 'size', 'alignment', 'has_harvest_image', 'text_orientation', 'text_fontsize'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'daily_harvest';

    /**
     * Validation rules for creation.
     *
     * @var array
     */
    public static $createRules = [
        'daily_id' => 'required',
        'harvest_image' => 'mimes:png',
    ];

    /**
     * Validation rules for updating.
     *
     * @var array
     */
    public static $updateRules = [
        'daily_id' => 'required',
        'harvest_image' => 'mimes:png',
    ];


    /**********************************************************************************************

        ACCESSORS

     **********************************************************************************************/

    /**
     * Gets the file directory containing the model's image.
     *
     * @return string
     */
    public function getImageDirectoryAttribute()
    {
        return 'images/data/dailies/harvest';
    }

    /**
     * Gets the path to the file directory containing the model's image.
     *
     * @return string
     */
    public function getImagePathAttribute()
    {
        return public_path($this->imageDirectory);
    }

    /**
     * Gets the url of the model's harvest image
     * @return string
     */
    public function getHarvestFileNameAttribute()
    {
        return $this->id . '-harvest_image.' . $this->harvest_extension;
    }

    /**
     * Gets the URL of the model's harvest image.
     *
     * @return string
     */
    public function getHarvestUrlAttribute()
    {
        if (!$this->harvest_extension) return null;
        return asset($this->imageDirectory . '/' . $this->harvestFileName);
    }

    /**
     * Gets the URL of the model's encyclopedia page.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return url(__('dailies.dailies') . '/' . $this->id);
    }


    /**********************************************************************************************

        OTHER FUNCTIONS

     **********************************************************************************************/




}
