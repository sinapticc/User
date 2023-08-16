<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['name' => 'تهران'],
            ['name' => 'گیلان'],
            ['name' => 'آذربایجان شرقی'],
            ['name' => 'خوزستان'],
            ['name' => 'فارس'],
            ['name' => 'اصفهان'],
            ['name' => 'خراسان رضوی'],
            ['name' => 'قزوین'],
            ['name' => 'سمنان'],
            ['name' => 'قم'],
            ['name' => 'مرکزی'],
            ['name' => 'زنجان'],
            ['name' => 'مازندران'],
            ['name' => 'گلستان'],
            ['name' => 'اردبیل'],
            ['name' => 'آذربایجان غربی'],
            ['name' => 'همدان'],
            ['name' => 'کردستان'],
            ['name' => 'کرمانشاه'],
            ['name' => 'لرستان'],
            ['name' => 'بوشهر'],
            ['name' => 'کرمان'],
            ['name' => 'هرمزگان'],
            ['name' => 'چهارمحال و بختیاری'],
            ['name' => 'یزد'],
            ['name' => 'سیستان و بلوچستان'],
            ['name' => 'ایلام'],
            ['name' => 'کهگلویه و بویراحمد'],
            ['name' => 'خراسان شمالی'],
            ['name' => 'خراسان جنوبی'],
            ['name' => 'البرز'],

        ];

        DB::table('provinces')->insert($provinces);
    }
}
