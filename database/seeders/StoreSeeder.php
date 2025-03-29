<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
            'user_id' => '3',
            'storeName' => 'ABC Oleh-Oleh',
            'address' => 'Jl. Kalpataru, Malang'
        ]);
        Store::create([
            'user_id' => '7',
            'storeName' => 'Himalaya Store',
            'address' => 'Jl. Himalaya, Malang'
        ]);
    }
}
