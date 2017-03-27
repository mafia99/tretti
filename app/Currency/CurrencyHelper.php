<?php

namespace App\Currency;
use App\Models\Currency;
use Illuminate\Http\Request as Request;

class CurrencyHelper 
{
    
    static $_defaultCurency = 'USD';
    
    public static function setCurrency($currencyCode){
        request()->session()->put('currency', $currencyCode);
    }
    public static function getCurrentCode(){
        $currencyCode = self::$_defaultCurency;
        if(session('currency')){
            $currencyCode = request()->session()->get('currency');
        }else{
            request()->session()->put('currency', $currencyCode);
        }
        return $currencyCode;
    }
    public static function currencyList(){
        $list = Currency::where('currency_status', 1)->get();
        return $list;
    }
    
    public static function getCurrentCurrency($value){
        $currencyCode = self::$_defaultCurency;
        if(session('currency')){
            $currencyCode = request()->session()->get('currency');
        }else{
            request()->session()->put('currency', $currencyCode);
        }

        $currentCurrency = Currency::where('currency_code', $currencyCode)->first();
        
        $value = $value * $currentCurrency->currency_exchange_rate;
        return self::format($value,$currentCurrency->currency_format);
        //return $currentCurrency->currency_symbol.' '.$value;
    }
    
    public static function format($value, $format = null)
    {
        
        // Value Regex
        $valRegex = '/([0-9].*|)[0-9]/';
        // Match decimal and thousand separators
        preg_match_all('/[\s\',.!]/', $format, $separators);
        if ($thousand = array_get($separators, '0.0', null)) {
            if ($thousand == '!') {
                $thousand = '';
            }
        }
        $decimal = array_get($separators, '0.1', null);
        // Match format for decimals count
        preg_match($valRegex, $format, $valFormat);
        $valFormat = array_get($valFormat, 0, 0);
        // Count decimals length
        $decimals = $decimal ? strlen(substr(strrchr($valFormat, $decimal), 1)) : 0;
        // Do we have a negative value?
        if ($negative = $value < 0 ? '-' : '') {
            $value = $value * -1;
        }
        // Format the value
        $value = number_format($value, $decimals, $decimal, $thousand);
        // Apply the formatted measurement
        $value = preg_replace($valRegex, $value, $format);
        // Return value
        return $negative . $value;
    }
   
}
