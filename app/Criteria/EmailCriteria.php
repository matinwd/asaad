<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EmailCriteria.
 *
 * @package namespace App\Criteria;
 */
class EmailCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        if($this->email) {
            $model = $model->where('email', $this->email);
//            dd($model->toSql());
        }
        return $model;
    }
}
