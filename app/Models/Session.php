<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Session
 * @package App\Models
 * @version September 26, 2019, 8:29 pm UTC
 *
 * @property string title
 * @property string session
 * @property string image
 * @property string country
 * @property string date
 * @property integer numbering
 * @property boolean is_current_applying
 */
class Session extends Model
{

    public $table = 'Session';
    


    public $fillable = [
        'title',
        'session',
        'image',
        'country',
        'date',
        'numbering',
        'is_current_applying'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'numbering' => 'integer',
        'is_current_applying' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
