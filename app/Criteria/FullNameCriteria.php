<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FullNameCriteria.
 *
 * @package namespace App\Criteria;
 */
class FullNameCriteria implements CriteriaInterface
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
        $items = array_filter(explode(' ',$this->name));
        foreach($items ?? [] as $item){
            $queryItem = '%' . $item . '%';
            $model = $model->orWhere('first_name','LIKE', $queryItem)->orWhere('last_name', 'LIKE',$queryItem);
        }
        return $model;
    }
}
