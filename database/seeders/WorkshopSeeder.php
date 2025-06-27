<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    public function run(): void
    {
        $workshops = [
            [
                'name' => 'Taller Central La Habana',
                'address' => 'Calle 23 #156, Centro Habana',
                'phone' => '+53 7 1234567',
                'email' => 'taller.habana@rentalcars.cu',
                'latitude' => 23.1236,
                'longitude' => -82.3766,
                'status' => 'open',
                'available_mechanics' => 8,
                'services' => json_encode(['Mantenimiento general', 'Reparación de motores', 'Suspensión', 'Frenos']),
                'opening_time' => '08:00:00',
                'closing_time' => '18:00:00',
                'description' => 'Taller principal en La Habana con servicio completo'
            ],
            [
                'name' => 'Taller Varadero',
                'address' => 'Avenida 1ra #123, Varadero',
                'phone' => '+53 45 9876543',
                'email' => 'taller.varadero@rentalcars.cu',
                'latitude' => 23.1494,
                'longitude' => -81.2960,
                'status' => 'open',
                'available_mechanics' => 5,
                'services' => json_encode(['Mantenimiento general', 'Reparación de motores', 'Suspensión']),
                'opening_time' => '08:00:00',
                'closing_time' => '17:00:00',
                'description' => 'Taller especializado en Varadero'
            ],
            [
                'name' => 'Taller Santiago',
                'address' => 'Calle Aguilera #456, Santiago de Cuba',
                'phone' => '+53 22 4567890',
                'email' => 'taller.santiago@rentalcars.cu',
                'latitude' => 20.0317,
                'longitude' => -75.8394,
                'status' => 'open',
                'available_mechanics' => 6,
                'services' => json_encode(['Mantenimiento general', 'Reparación de motores', 'Frenos']),
                'opening_time' => '08:00:00',
                'closing_time' => '18:00:00',
                'description' => 'Taller en Santiago de Cuba'
            ]
        ];

        foreach ($workshops as $workshop) {
            DB::table('workshops')->insert([
                'name' => $workshop['name'],
                'address' => $workshop['address'],
                'phone' => $workshop['phone'],
                'email' => $workshop['email'],
                'latitude' => $workshop['latitude'],
                'longitude' => $workshop['longitude'],
                'status' => $workshop['status'],
                'available_mechanics' => $workshop['available_mechanics'],
                'services' => $workshop['services'],
                'opening_time' => $workshop['opening_time'],
                'closing_time' => $workshop['closing_time'],
                'description' => $workshop['description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
