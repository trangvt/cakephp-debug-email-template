<?php
function debug_email_template()
{
    $cartId = 20;
    $replace = $this->MailTemplateObject->makeCartByCartId($cartId, true);
    foreach ((array)Hash::get($replace, "reservations") as $records) {
        foreach ($records as $key => $value) {
            echo '<pre>';
            var_dump($key);
            echo '</pre>';
            $this->set($key, $value);
        }
    }
    return $this->render('/emails/reservations');
}
