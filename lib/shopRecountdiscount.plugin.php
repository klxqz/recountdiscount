<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopRecountdiscountPlugin extends shopPlugin {

    public function backendOrders() {
        if ($this->getSettings('status')) {
            $view = wa()->getView();
            $order_id = waRequest::get('id', null, waRequest::TYPE_INT);
            $html = $view->fetch('plugins/recountdiscount/templates/backendOrders.html');
            return array(
                'sidebar_section' => $html,
            );
        }
    }

}
