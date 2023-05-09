<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\User;

/**
 * Class UserRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    protected $fieldSearchable = [
        'first_name' => 'like',
        'last_name' => 'like',
        'email'
    ];

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {

    }

}
