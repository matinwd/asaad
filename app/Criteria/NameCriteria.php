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
    public $hasTranslation;

    public function __construct($name,$hasTranslation = true)
    {
        $this->name = $name;
        $this->hasTranslation = $hasTranslation;
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
            if($this->hasTranslation)
                $model = $model->whereTranslationLike('name',$queryItem);
            else
                $model = $model->where('name','like',$queryItem);
        }
        return $model;
    }
}
