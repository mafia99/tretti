<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_format' => '$1,0.00',
            'currency_exchange_rate' => '0.11',
            'currency_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
        DB::table('currencies')->insert([
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_format' => '1.0,00 €',
            'currency_exchange_rate' => '0.10',
            'currency_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
        DB::table('currencies')->insert([
            'currency_name' => 'Danish Krone',
            'currency_code' => 'DKK',
            'currency_symbol' => 'kr.',
            'currency_format' => '1.0,00 kr.',
            'currency_exchange_rate' => '0.78',
            'currency_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
        DB::table('currencies')->insert([
            'currency_name' => 'Swedish Krona',
            'currency_code' => 'SEK',
            'currency_symbol' => 'kr',
            'currency_format' => '1 0,00 kr',
            'currency_exchange_rate' => '1.00',
            'currency_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
    }
}
