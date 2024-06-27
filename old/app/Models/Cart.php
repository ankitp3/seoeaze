<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice  = $oldCart->totalPrice;
        }
    }

    public function add($item , $id){
        $storedItem =  ['qty' => 0 , 'price' => $item->amount , 'service_name' => $item->service_name, 'discount' => $item->coupon_percent , 'item' => $item];
        if($this->items){
            if(array_key_exists($id , $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        if($item->amount < 0){
            $storedItem['price'] = $item->amount  -  $item->amount*$item->coupon_percent/100;
        }
        else{
            $storedItem['price'] = $item->amount;
        }

        $storedItem['amount'] = $storedItem['price'] * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice +=  $storedItem['price'];

    }

    public function remove($item , $id){
        if($this->items){
            if(array_key_exists($id , $this->items)){
                $qty  = $this->items[$id]['qty'];
                $price = $this->items[$id]['qty'] * $this->items[$id]['price'];
                unset($this->items[$id]);
            }
        }
        $this->totalQty =  $this->totalQty -  $qty;
        $this->totalPrice = $this->totalPrice - $price;
    }

    public function minus($item , $id){
        if($this->items){
            if(array_key_exists($id , $this->items)){
                $qty  = $this->items[$id]['qty'];
                $price = $this->items[$id]['price'];
                $this->items[$id]['qty'] -= 1;
                $this->items[$id]['amount'] -= $this->items[$id]['price'];
            }

        }

        $this->totalQty --;
        $this->totalPrice =  $this->totalPrice - $price;

    }


}