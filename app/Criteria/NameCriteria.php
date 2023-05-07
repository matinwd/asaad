<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class NameCriteria.
 *
 * @package namespace App\Criteria;
 */
class NameCriteria implements CriteriaInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if($this->name){
             $queryItem = '%' . $this->name . '%';

            $model = $model->whereTranslationLike('name',$queryItem);
        }
        return $model;
    }
}
