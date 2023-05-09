<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class VisibilityCriteria.
 *
 * @package namespace App\Criteria;
 */
class VisibilityCriteria implements CriteriaInterface
{
    public $visibility;

    public function __construct($visibility)
    {
        $this->visibility = $visibility;
    }

    public function apply($model, RepositoryInterface $repository)
    {
//        dd($this->visibility);
        if(!is_null($this->visibility)){
//            dd('visibility');
            $model = $model->where('visibility', $this->visibility );
        }
        return $model;
    }
}
