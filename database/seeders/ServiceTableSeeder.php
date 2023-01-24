<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'service_title' => 'Refreshing Design',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-capsule',
            ],
            [
                'service_title' => 'Solid Bootstrap 5',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-bootstrap',
            ],
            [
                'service_title' => '100+ Components',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-shortcode',
            ],
            [
                'service_title' => 'Speed Optimized',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-dashboard',
            ],
            [
                'service_title' => 'Fully Customizable',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-layers',
            ],
            [
                'service_title' => 'Regular Updates',
                'service_description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'service_icon' => 'lni lni-reload',
            ],
        ];


        \DB::table('services')->insert($array); // Query Builder approach

    }
}
