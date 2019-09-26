<?php
namespace App\Repositories;

use App\Models\Session;
use App\Repositories\BaseRepository;

/**
 * Class SessionRepository
 * @package App\Repositories
 * @version September 26, 2019, 8:29 pm UTC
*/

class SessionRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'session',
        'image',
        'country',
        'date',
        'numbering',
        'is_current_applying'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Session::class;
    }
}
