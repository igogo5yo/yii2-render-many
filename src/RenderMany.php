<?php
namespace igogo5yo\rendermany;

/**
 * RenderMany
 * Trait for Yii Framework 2 allows render many views
 * @author Ihor Skliar <skliar.ihor@gmail.com>
 * @version 1.3
 */
trait RenderMany {
    /**
     * @param $views array of views options
     * [
     *   'view1' => [ params ],
     *   'view2' => [ params ],
     *   'view3',
     *   'view4'
     *    ...
     * ]
     *
     * @return string imploded views array
     */
    public function renderMany(array $views, $partial = false) {
        $renders = [];
        foreach ($views as $view => $params) {
            if (is_int($view) && is_string($params)) {
                $view = $params;
                $params = [];
            }

            $renders[] = $this->renderPartial($view, $params);
        }

        $html = implode("\r", $renders);

        return $partial ? $html : $this->renderContent($html);
    }

    /**
     * Alias for RenderMany::renderMany([], true);
     */
    public function renderManyPartial(array $views) {
        return $this->renderMany($views, true);
    }
}
