<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Electrolux ZUSGREEN58',
            'product_description' => 'This vacuum cleaner is particularly effective on hard floors where it received top rating of A. It also gives good results on carpets where the result is a C, which is more than halfway on the scale. The powerful 650W motor ensures a good suction. If you are tired of your vacuum cleaner sounds, try this model. It is actually one of the lowest noise levels of only 58 dB. Energy class A ensures that the vacuum cleaner has an extra low energy consumption. A is the best energy class of the vacuum cleaner.',
            'product_price' => '1524',
            'product_image' => 'zusgreen58.jpg',
            'product_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
        DB::table('products')->insert([
            'product_name' => 'Bosch WAT286I8SN I-Dos',
            'product_description' => "The machine can hold up to 8 kg. laundry per tvättillfälle. There is an appropriate amount to keep the washing down with few washes with a family of 4-5 people. This appliance can spin at up to 1400 omdr./min. That means, at tørretiden on vasketøjet becometh cleat so long, Fordi meget of the overskydende transformation slynges ud af vasketøjet during centrifugation. There are only advantages in having a carbon-free motor in the washing machine. It will, inter alia, quieter in operation and has a positive influence on the machine's lifetime. Wash often often it is a good idea to choose a washing machine with an energy-efficient Energy class that saves both water and power consumption. This machine has energy class A +++, which is the best energy label.",
            'product_price' => '6490',
            'product_image' => 'wat286i8sn.jpg',
            'product_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
        DB::table('products')->insert([
            'product_name' => 'Titan Fitness ST590',
            'product_description' => "ST590 has a good engine of 2 hp, suitable for both fast interval training and long distance running.

Treadmill computer has 15 training programs and displays speed, time, distance, calories burned, fat burning and heart rate. The computer also has an integrated MP3 player and clock. Adapter included.",
            'product_price' => '5794',
            'product_image' => '270-000176.jpg',
            'product_status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
    }
}
