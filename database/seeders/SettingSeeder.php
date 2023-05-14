<?php

namespace Database\Seeders;

use App\Repositories\SettingRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(SettingRepository $repository): void
    {
        $settings = [
            'logo' => url('/assets/images/logo.png'),
            'telegram' => 'https://t.me',
            'instagram' => 'https://instagram.com/',
            'linkedin' => 'https://linkedin.com/',
            'whatsapp' => 'https://wa.com/',
            'title' => 'Ductcen',
            'email' => 'info@ductcen.test',
            'landline' => '+983134424433',
            'fax' => '0313356677',
            'landline2' => +983134424431,
            'mobile' => '+989335251871',
            'address' => 'Isfahan, Iran, Asia, Earth',
            'description' => 'Ductcen is based on Product center words. We sell quality to our customers and we proud of our customers',
            'contact' => json_encode([
                'title' => 'Contact with us',
                'description' => 'Our workers are responding customers question 24/7 even during holidays!',
                'form_title' => 'Need help? You can fill out form below and we will call you back ASAP!',
                'form_description' => 'We will call you back within 1 hour',
                'header_image' => url('assets/images/breadcrumbs/inr_9.jpg'),
                'mapurl' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d551.9242404691323!2d51.645238973361316!3d32.667290493135106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbc34f63584b525%3A0xdf5fc51bd55cf02d!2z2KfYs9iq2KfZhiDYp9i12YHZh9in2YbYjCDYp9i12YHZh9in2YbYjCDYqNix2LLYp9mG2Iwg2K7bjNin2KjYp9mGINi12YXYr9uM2YfYjCDYp9uM2LHYp9mG!5e0!3m2!1sfa!2sno!4v1654840879908!5m2!1sfa!2sno" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            ]),
            'about' => json_encode([
                'title' => 'Our duty is creating high quality products',
                'description' => 'Trust us. we know how much your trust worth and we won\'t let you down :)',
                'middle_title' => 'Who are we?',
                'middle_description' => 'We are Product Center known also as Ductcen and we promise we will make high quality products and we won\'t create bad products',
                'header_image' => url('assets/images/breadcrumbs/inr_1.jpg'),
                'middle_image' => url('assets/images/about/about-3.png'),

            ]),
            'products' => json_encode([
                'title' => 'Ductcen Products',
                'header_image' => url('/assets/images/breadcrumbs/inr_5.jpg')
            ]),
            'faq' => json_encode([
                'title' => 'Frequently Asked Questions',
                'header_image' => url('/assets/images/breadcrumbs/inr_5.jpg')
            ]),

            'blog' => json_encode([
                'title' => 'Ductcen Blog',
                'header_image' => url('/assets/images/breadcrumbs/inr_5.jpg')
            ]),

            'menus' => json_encode([
                ['name' => 'Home', 'url' => '/'],
                ['name' => 'products', 'url' => '/products'],
                ['name' => 'Blog', 'url' => '/blog'],
                ['name' => 'About', 'url' => '/about'],
                ['name' => 'Contact', 'url' => '/contact'],
            ])

        ];

        foreach ($settings as $key => $value) {
            $repository->create(
                    ['key' => $key, 'en' => [ 'value' => $value ],'de'=> ['value' => $value]]

            );
        }

    }
}
