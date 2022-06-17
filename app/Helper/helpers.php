<?php

use App\Models\OrderGroup;
use App\Models\OrderItem;

    function getPaymentMethod($val)
    {
        $casting = explode(":", $val);
        $casting = explode(",", $casting[1]);
        $result = str_replace('"', '', $casting[0]);

        return $result;
    }

    function findPaymentMethod($id)
    {
        $orderGroup = OrderGroup::findOrFail($id);
        $paymentMethod = $orderGroup->bill_distribution;
        if ($paymentMethod) {
            $result = getPaymentMethod($paymentMethod);
        }else {
            $result = "-";
        }

        return $result;
    }

    function customerName($id)
    {
        $orderGroup = OrderGroup::findOrFail($id);
        $result = $orderGroup->customer_name;

        return $result;
    }
?>