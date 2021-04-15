<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;
use Carbon\Carbon;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Settings::create([
            'title' => 'Beauty Trend Korea',
            'headline' => 'All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Products are 100% authentic.',
            'from_email' => 'mathswithnabeel@gmail.com',
            'email' => 'sales@beautytrendkorea.com',
            'phone' => '070-8860-4678',
            'whatsapp' => '+82 10 7475 9078',
            'address' => '<p>SILICON2 CO.,LTD - Beautytrendkorea.com | CEO Kim Sung Woon | Business Licence No. 214-87-03359</p>
                            <p>Basement No. 102, 22-3, Osadan-Ro. Yongsan-gu, Seoul, Korea</p>
                            <p>Copyright © 2020 Beautytrendkorea.com All Rights Reserved.</p>',
            'weight_class' => 'Gram',
            'dimension_class' => 'Centimeter',
            'logo' => 'assets/admin/images/logo.png',
            'favico' => 'assets/admin/images/favicon.png',
            'facebook' => 'https://www.facebook.com/mnbprofile',
            'instagram' => 'https://www.instagram.com/nabeelbaigmnb',
            'twitter' => 'https://www.instagram.com/nabeelbaigmnb',
            'created_by' => 1,
            'created_at' => $now
        ]);
    }
}
