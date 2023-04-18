<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Slider;

/**
 * Class SliderTransformer.
 *
 * @package namespace App\Transformers;
 */
class SliderTransformer extends TransformerAbstract
{
    /**
     * Transform the Slider entity.
     *
     * @param \App\Models\Slider $model
     *
     * @return array
     */
    public function transform(Slider $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
