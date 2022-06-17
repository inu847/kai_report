<?php

namespace App\Exports;

use App\Models\OrderGroup;
use App\Models\OrderItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $id;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function array(): array
    {
        if ($this->start && $this->end) {
            $orderItems = OrderItem::whereBetween('created_at', [date('Y-m-d', $this->start), date('Y-m-d', $this->end)])->orderBy('id', 'ASC')->get();
        }else {
            $orderItems = OrderItem::orderBy('id', 'ASC')->get();
        }
        $data = array();
        foreach ($orderItems as $key => $orderItem) {
            $data[$key]['Order Number'] = $orderItem->id;
            $data[$key]['Nama Customer'] = customerName($orderItem->order_group_id);
            $data[$key]['Tanggal Order'] = $orderItem->created_at->format("F j, Y, g:i a");
            $data[$key]['Product'] = $orderItem->food_item;
            $data[$key]['Qty'] = $orderItem->quantity;
            $data[$key]['Harga'] = $orderItem->price;
            $data[$key]['Total Harga'] = $orderItem->quantity * $orderItem->price;
            $data[$key]['Metode Pembayaran'] = findPaymentMethod($orderItem->order_group_id);
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            'Order Number',
            'Nama Customer',
            'Tanggal Order',
            'Product',
            'Qty',
            'Harga',
            'Total Harga',
            'Metode Pembayaran',
        ];
    }
}
