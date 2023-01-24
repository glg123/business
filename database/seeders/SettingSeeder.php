<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\Setting::create([
            'site_name' => 'Business',
            'site_logo' => 'setting/white-logo.svg',
            'slider_title' => 'Corporate & Business Site Template By Ayro UI.',
            'slider_description' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.',
            'about_us_title' => 'Our team comes with the experience and knowledge',
            'about_us_description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.
There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
            'about_us_image' => 'settings/about-img1.jpg',
            'service_title' => 'Our Best Services',
            'service_description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'blog_title' => 'Latest News & Blog',
            'blog_description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'slider_image' => 'settings/hero-image.jpg',
            'slider_video_link' => 'https://www.youtube.com/watch?v=r44RKWyfcFw',
            'site_mobile' => '0984537278623',
            'site_email' => 'yourmail@gmail.com',
            'site_address' => '175 5th Ave, New York, <br> NY 10010 United States',
            'site_schedule' => '24 Hours / 7 Days Open <br> Office time: 10 AM - 5:30 PM',
            'footer_logo' => 'settings/logo.svg',
            'footer_description' => 'Making the world a better place through constructing elegant hierarchies.
© 2024 Business. Designed and Developed',
            'who_are_you' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.

There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
            'our_vision' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.

There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
            'our_history' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.

There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
        ]);

    }
}
