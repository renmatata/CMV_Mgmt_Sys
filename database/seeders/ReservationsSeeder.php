<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservations;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ResevationsRecords = [
            [
                'id' => 1,
                'name' => 'Torqs',
                'email' => 'torqs@gmail.com',
                'phone' => '09998079012',
                'type' => 'venue',
                'date' => '11-21-23',
                'pax' => '21',
                'status' => 'pending',
                'request' => 'wheel chair',
            ],
        ];
        Reservations::insert($ResevationsRecords);
    }
}
