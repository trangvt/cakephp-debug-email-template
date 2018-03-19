<?php
$cartId = 20;
//get cart data
$cartData = $this->YourModel->makeCartByCartId($cartId, true);

foreach ((array)Hash::get($cartData, "reservations") as $records) {
    foreach ($records as $key => $value) {
        echo '<pre>';
        var_dump($key);
        echo '</pre>';
        $this->set($key, $value);
    }
}

return $this->render('/emails/reservations');
die();
