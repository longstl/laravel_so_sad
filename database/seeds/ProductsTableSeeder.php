<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Products')->truncate();
        DB::table('Products')->insert([
           [
               'name'=>'Bánh rán mặn',
               'description' => 'Bánh rán mặn nhiều thịt',
               'images' => 'https://media.cooky.vn/recipe/g3/22565/s800x500/recipe22565-636432583968838138.png',
               'price' => '10000'
           ],
            [
                'name'=>'Bánh rán ngọt',
                'description' => 'Bánh rán ngọt nhiều đường',
                'images' => 'https://duongperit.files.wordpress.com/2011/07/banhranngot.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh gai',
                'description' => 'Bánh gai siêu mềm',
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/12/05/60/24192675/1_155692.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh sinh nhật',
                'description' => 'bánh sinh nhật',
                'images' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg',
                'price' => '100000'
            ],
            [
                'name'=>'Bánh bột lọc',
                'description' => 'Bánh bột lọc',
                'images' => 'https://media.cooky.vn/recipe/g3/22814/s800x500/recipe-cover-r22814.jpg',
                'price' => '3000'
            ],
            [
                'name'=>'Bánh gạo cay',
                'description' => 'Bánh gạo cay',
                'images' => 'https://znews-photo-td.zadn.vn/w660/Uploaded/vhuowar/2017_07_06/19748438_1416362775099649_1595357145508086703_n.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh cáy',
                'description' => 'Bánh cáy',
                'images' => 'https://static.mytour.vn/upload_images/Image/dunghuynh/b%E1%BA%AFc%20ninh/thaibinh3_nunw.jpg',
                'price' => '20000'
            ],
            [
                'name'=>'Bánh nếp',
                'description' => 'Bánh nếp nhiều thịt',
                'images' => 'https://giadinh.tv/wp-content/uploads/2017/07/cach-lam-banh-nep-nhan-dau-xanh-thom-ngon.jpg',
                'price' => '6000'
            ],
            [
                'name'=>'Bánh trôi nước',
                'description' => 'Bánh trôi nước',
                'images' => 'https://ameovat.com/wp-content/uploads/2016/05/cach-lam-banh-troi-nuoc.jpg',
                'price' => '15000'
            ],
            [
                'name'=>'Bánh bao con lợn =)))',
                'description' => 'Bánh bao con lợn',
                'images' => 'https://media.foody.vn/images/IMG_5445.JPG',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh bao thịt',
                'description' => 'Bánh bao thịt',
                'images' => 'https://daylambanh.edu.vn/images/congthuclambanh/cach-lam-banh-bao-nhan-thit-truyen-thong.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh bao sữa',
                'description' => 'Bánh bao sữa',
                'images' => 'https://i.ytimg.com/vi/0ZqHYo7-2yE/maxresdefault.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh pía',
                'description' => 'Bánh pía',
                'images' => 'http://www.sieuthibanhpia.vn/wp-content/themes/twentysixteen/img/bg2.jpg',
                'price' => '50000'
            ],
            [
                'name'=>'Bánh pizza',
                'description' => 'Bánh pizza',
                'images' => 'https://jamja.vn/blog/wp-content/uploads/2017/06/top-5-thuong-hieu-banh-pizza-tai-ha-noi.jpg',
                'price' => '90000'
            ],
            [
                'name'=>'Bánh hamburger',
                'description' => 'Bánh hamburger',
                'images' => 'https://media.cooky.vn/recipe/g3/22565/s800x500/recipe22565-636432583968838138.png',
                'price' => '25000'
            ],
            [
                'name'=>'Bánh mì cay',
                'description' => 'Bánh mì cay',
                'images' => 'https://images.foody.vn/res/g29/285528/prof/s576x330/foody-mobile-1-jpg-993-636124635515737301.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh rán dorayaki',
                'description' => 'Bánh rán dorayaki',
                'images' => 'https://i.pinimg.com/originals/df/42/3f/df423f794f9ba4e3f519038b1d05776c.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh tôm hồ tây',
                'description' => 'Bánh tôm hồ tây',
                'images' => 'https://1.bp.blogspot.com/-KKODJ5wIV3U/WcOGjCqAykI/AAAAAAAAKMg/jQsLLvOccww7VgGoIbVoHqldpL4ibvVAACLcBGAs/s1600/banh-tom-ho-tay.jpg',
                'price' => '10000'
            ],
            [
                'name'=>'Bánh mì chảo',
                'description' => 'Bánh mì chảo',
                'images' => 'https://images.foody.vn/res/g5/40332/prof/s576x330/foody-mobile-cdq2-jpg-706-635739527387996356.jpg',
                'price' => '30000'
            ],
            [
                'name'=>'Bánh mì sandwich',
                'description' => 'Bánh mì sandwich',
                'images' => 'https://i.ytimg.com/vi/f3fDb6KKOXk/maxresdefault.jpg',
                'price' => '15000'
            ],
        ]);
    }
}
