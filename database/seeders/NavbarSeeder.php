<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Calendario',
                'route' => 'calendario',
                'ordering' => 1,
            ],
            [
                'name' => 'Procedimientos',
                'route' => 'procedimientos.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Layout',
                'route' => 'layout.bhp',
                'ordering' => 3,
            ]
        ];

        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
