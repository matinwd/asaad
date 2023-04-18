<?php

namespace App\Presenters;

use App\Transformers\TemplateTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TemplatePresenter.
 *
 * @package namespace App\Presenters;
 */
class TemplatePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TemplateTransformer();
    }
}
