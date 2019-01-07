<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['cate_name' => 'iphone'],
        	['cate_name' => 'samsung'],
        	['cate_name' => 'htc'],
        	['cate_name' => 'nokia'],
        	['cate_name' => 'xiaomi'],
        	
        ];
        DB::table('typeproduct')->insert($cates);
    }
}
