<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Bánh Ngọt',
                'description' =>'Bánh ngọt có đường',
                'image' => 'https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/53/2017/10/Pick-and-mix-cake.jpg'
            ],
            [
                'name' => 'Bánh Mặn',
                'description' =>'Bánh mặn',
                'image' => 'https://i.ytimg.com/vi/Vg5JkfQ64eQ/maxresdefault.jpg'
            ],
            [
                'name' => 'Bánh Sinh Nhật',
                'description' =>'Bánh Sinh Nhật',
                'image' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg'
            ],
            [
                'name' => 'Bánh Hàn Quốc',
                'description' =>'Bánh Hàn Quốc',
                'image' => 'https://abby.vn/wp-content/uploads/2017/03/hqdefault-1-2.jpg'
            ],
            [
                'name' => 'Bánh Nhật Bản',
                'description' =>'Bánh nhật bản',
                'image' => 'https://i.ytimg.com/vi/5uNyNNBiMCg/hqdefault.jpg'
            ],
        ]);
    }
}
