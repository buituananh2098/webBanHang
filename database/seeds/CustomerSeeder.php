<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            [
                [
                    'address_id' => 1,
                    'firstname' => 'Tuan',
                    'lastname' => 'Nguyen',
                    'phone' => '0868612860',
                    'email' => 'cust@dev.cn',
                    'password' => bcrypt('123'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
        DB::table('customers')->insert([
            [
                'firstname' => 'Tuan',
                'lastname' => 'Phan',
                'phone' => '0123436523',
                'email' => 'cust1@dev.cn',
                'password' => bcrypt('123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('customer_address')->insert([
            [
                'customer_id' => 1,
                'payment_firstname' => 'admin',
                'payment_lastname' => 'admin',
                'payment_phone' => '123123123',
                'payment_address' => 'admin',
                'payment_district' => 'admin',
                'payment_province' => 'admin',
                'payment_nation' => 'admin',
                'delivery_firstname' => 'admin',
                'delivery_lastname' => 'admin',
                'delivery_phone' => '123123123',
                'delivery_address' => 'admin',
                'delivery_district' => 'admin',
                'delivery_province' => 'admin',
                'delivery_nation' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'customer_id' => 1,
                'payment_firstname' => 'admin',
                'payment_lastname' => 'admin',
                'payment_phone' => '32123123',
                'payment_address' => 'admin',
                'payment_district' => 'admin',
                'payment_province' => 'admin',
                'payment_nation' => 'admin',
                'delivery_firstname' => 'admin',
                'delivery_lastname' => 'admin',
                'delivery_phone' => '32123123',
                'delivery_address' => 'admin',
                'delivery_district' => 'admin',
                'delivery_province' => 'admin',
                'delivery_nation' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
