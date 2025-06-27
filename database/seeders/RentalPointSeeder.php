<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalPointSeeder extends Seeder
{
    public function run(): void
    {
        $rentalPoints = [
            [
                'name' => 'Havana Car Rental - Centro Habana',
                'address' => 'Calle 23 #156, Centro Habana',
                'phone' => '+53 7 1234567',
                'email' => 'havana@rentalcars.cu',
                'latitude' => 23.1136,
                'longitude' => -82.3666,
                'status' => 'open',
                'available_cars' => 15,
                'description' => 'Punto de renta en el corazón de La Habana'
            ],
            [
                'name' => 'Varadero Beach Cars',
                'address' => 'Avenida 1ra #123, Varadero',
                'phone' => '+53 45 9876543',
                'email' => 'varadero@rentalcars.cu',
                'latitude' => 23.1394,
                'longitude' => -81.2860,
                'status' => 'open',
                'available_cars' => 12,
                'description' => 'Renta de autos en la playa más famosa de Cuba'
            ],
            [
                'name' => 'Santiago Auto Rentals',
                'address' => 'Calle Aguilera #456, Santiago de Cuba',
                'phone' => '+53 22 4567890',
                'email' => 'santiago@rentalcars.cu',
                'latitude' => 20.0217,
                'longitude' => -75.8294,
                'status' => 'open',
                'available_cars' => 8,
                'description' => 'Servicio de renta en la ciudad heroica'
            ],
            [
                'name' => 'Trinidad Classic Cars',
                'address' => 'Calle Real #789, Trinidad',
                'phone' => '+53 41 2345678',
                'email' => 'trinidad@rentalcars.cu',
                'latitude' => 21.8044,
                'longitude' => -79.9847,
                'status' => 'open',
                'available_cars' => 6,
                'description' => 'Renta de autos clásicos en la ciudad colonial'
            ],
            [
                'name' => 'Holguín Car Services',
                'address' => 'Calle Libertad #321, Holguín',
                'phone' => '+53 24 3456789',
                'email' => 'holguin@rentalcars.cu',
                'latitude' => 20.8883,
                'longitude' => -76.2571,
                'status' => 'open',
                'available_cars' => 10,
                'description' => 'Servicio de renta en la ciudad de los parques'
            ],
            [
                'name' => 'Camagüey Auto Rent',
                'address' => 'Calle República #567, Camagüey',
                'phone' => '+53 32 4567890',
                'email' => 'camaguey@rentalcars.cu',
                'latitude' => 21.3808,
                'longitude' => -77.9169,
                'status' => 'open',
                'available_cars' => 7,
                'description' => 'Renta de autos en la ciudad de los tinajones'
            ],
            [
                'name' => 'Cienfuegos Car Rental',
                'address' => 'Paseo del Prado #234, Cienfuegos',
                'phone' => '+53 43 5678901',
                'email' => 'cienfuegos@rentalcars.cu',
                'latitude' => 22.1497,
                'longitude' => -80.4436,
                'status' => 'open',
                'available_cars' => 9,
                'description' => 'Servicio de renta en la Perla del Sur'
            ],
            [
                'name' => 'Santa Clara Auto Rent',
                'address' => 'Calle Independencia #890, Santa Clara',
                'phone' => '+53 42 6789012',
                'email' => 'santaclara@rentalcars.cu',
                'latitude' => 22.4069,
                'longitude' => -79.9647,
                'status' => 'open',
                'available_cars' => 8,
                'description' => 'Renta de autos en la ciudad del Che'
            ]
        ];

        foreach ($rentalPoints as $point) {
            DB::table('rental_points')->insert([
                'name' => $point['name'],
                'address' => $point['address'],
                'phone' => $point['phone'],
                'email' => $point['email'],
                'latitude' => $point['latitude'],
                'longitude' => $point['longitude'],
                'status' => $point['status'],
                'available_cars' => $point['available_cars'],
                'description' => $point['description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
