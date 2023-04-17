<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Form;

/**
 * Class FormTransformer.
 *
 * @package namespace App\Transformers;
 */
class FormTransformer extends TransformerAbstract
{
    /**
     * Transform the Form entity.
     *
     * @param \App\Models\Form $model
     *
     * @return array
     */
    public function transform(Form $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
