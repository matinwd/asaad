<?php

namespace App\Presenters;

use App\Transformers\FormTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class FormPresenter.
 *
 * @package namespace App\Presenters;
 */
class FormPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FormTransformer();
    }
}
