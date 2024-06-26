<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Form;

/**
 * Class FormRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class FormRepositoryEloquent extends BaseRepository implements FormRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Form::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
