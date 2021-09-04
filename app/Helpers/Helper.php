<?php

namespace App\Helpers;


use App\Currency;
use Illuminate\Support\Facades\Session;

class Helper
{

    public static function make_slug($string) {
        $slug = preg_replace('/\s+/u', '-', trim($string));
        $slug = str_replace("/","",$slug);
        $slug = str_replace("?","",$slug);
        return $slug;
    }

    public static function convertUtf8($value){
        return mb_detect_encoding($value, mb_detect_order(), true) === 'UTF-8' ? $value : mb_convert_encoding($value, 'UTF-8');
    }
    
    public static function showCurrencyPrice($price) {
        $curr = Currency::where('is_default','=',1)->first();
        $price = round($price * $curr->value,2);
        if (Session::has('currency')){
            $curr = Currency::find(Session::get('currency'));
        }
        else
        {
            $curr = Currency::where('is_default','=',1)->first();
        }


            return $curr->sign.$price;


    }


    public static function showAdminCurrencyPrice($price) {
        $curr = Currency::where('is_default','=',1)->first();
        $price = round($price * $curr->value,2);
        return $curr->sign.$price;
    }


      public static function storePrice($price) {
        $curr = Currency::where('is_default','=',1)->first();
        $price = ($price / $curr->value);
        return $price;
    }


    public static function showCurrency()
    {
        $curr = Currency::where('is_default','=',1)->first();
        return $curr->sign;
    }

    public static function showCurrencyCode()
    {
        $curr = Currency::where('is_default','=',1)->first();
        return $curr->name;
    }

    public static function showCurrencyValue()
    {
        $curr = Currency::where('is_default','=',1)->first();
        return $curr->value;
    }


    public static function showPrice($price) {
        $curr = Currency::where('is_default','=',1)->first();
        $price = $price * $curr->value;
        return round($price,2);

    }

    public static function Total()
    {
        if(Session::has('cart')){
            $cart_data = Session::get('cart');
            $cartTotal = 0;
            if($cart_data){
                foreach($cart_data as $product){
                    $cartTotal += (double)$product['price'] * (int)$product['qty'];
                }
            }
            return $cartTotal;

        }else{
            return 0;
        }
        
    }

}


