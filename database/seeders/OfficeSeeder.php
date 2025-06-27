<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    public function run(): void
    {
        $offices = [
            [
                'name' => 'Oficina Central La Habana',
                'address' => 'Calle 23 #156, Centro Habana',
                'phone' => '+53 7 1234567',
                'email' => 'oficina.habana@rentalcars.cu',
                'latitude' => 23.1336,
                'longitude' => -82.3866,
                'status' => 'open',
                'manager_name' => 'Juan Pérez',
                'staff_count' => 12,
                'opening_time' => '08:00:00',
                'closing_time' => '18:00:00',
                'description' => 'Oficina principal en La Habana'
            ],
            [
                'name' => 'Oficina Varadero',
                'address' => 'Avenida 1ra #123, Varadero',
                'phone' => '+53 45 9876543',
                'email' => 'oficina.varadero@rentalcars.cu',
                'latitude' => 23.1594,
                'longitude' => -81.3060,
                'status' => 'open',
                'manager_name' => 'María Rodríguez',
                'staff_count' => 8,
                'opening_time' => '08:00:00',
                'closing_time' => '17:00:00',
                'description' => 'Oficina en Varadero'
            ],
            [
                'name' => 'Oficina Santiago',
                'address' => 'Calle Aguilera #456, Santiago de Cuba',
                'phone' => '+53 22 4567890',
                'email' => 'oficina.santiago@rentalcars.cu',
                'latitude' => 20.0417,
                'longitude' => -75.8494,
                'status' => 'open',
                'manager_name' => 'Carlos Martínez',
                'staff_count' => 6,
                'opening_time' => '08:00:00',
                'closing_time' => '18:00:00',
                'description' => 'Oficina en Santiago de Cuba'
            ]
        ];

        foreach ($offices as $office) {
            DB::table('offices')->insert([
                'name' => $office['name'],
                'address' => $office['address'],
                'phone' => $office['phone'],
                'email' => $office['email'],
                'latitude' => $office['latitude'],
                'longitude' => $office['longitude'],
                'status' => $office['status'],
                'manager_name' => $office['manager_name'],
                'staff_count' => $office['staff_count'],
                'opening_time' => $office['opening_time'],
                'closing_time' => $office['closing_time'],
                'description' => $office['description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
