<?php

class Star extends Eloquent
{

    protected $fillable = array(
        'name',
        'description',

    );

    public static function getValidationRules()
    {
        $validation = array(
            'name' => 'required',
        );

        return $validation;
    }

    /**
     * Return planets
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function planets()
    {
        return $this->hasMany('Planet');
    }

    /**
     * Return sector
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function sector()
    {
        return $this->belongsTo('Sector','sector_id');
    }

}
