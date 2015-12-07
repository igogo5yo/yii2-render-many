<?php
namespace igogo5yo\rendermany;

/**
 * RenderManyTrait
 * Trait for Yii Framework 2 allows render many views
 * @author Ihor Skliar <skliar.ihor@gmail.com>
 * @version 1.0
 */
trait RenderManyTrait {
    /**
     * @param array of views options
     * [
     *   'view1' => [ params ],
     *   'view2' => [ params ],
     *    ...
     * ]
     *
     * @return string imploded views array
    */
    public function renderMany(array $views) {
        $renders = [];
        foreach ($views as $view => $params) {
            $renders[] = $this->render($view, $params);
        }

        return implode("\r", $renders);
    }
}
