<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Пересчет скидки',
    'description' => 'Автопересчет скидки при редактирование заказа',
    'img' => 'img/recountdiscount.png',
    'vendor' => '985310',
    'version' => '1.0.0',
    'rights' => false,
    'frontend' => true,
    'handlers' => array(
        'backend_orders' => 'backendOrders',
    )
);
