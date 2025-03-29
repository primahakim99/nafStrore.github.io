<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Apple Chips(200 Gram)',
            'slug' => 'apple-chips-200-gram',
            'category_id'=> '2',
            'description'=> 'Apple chips are processed apple chips that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of apples will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine apples fried with a lower temperature of about 50°-60 °C so as not to damage the apples.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 31500,
            'image'=>'Assets/images/img-pro-01.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Bakpao Sayang(6 pcs)',
            'slug' => 'bakpao-sayang-6-pcs',
            'category_id'=> '3',
            'description'=> 'Bakpao that is famous in the city of Malang and is often used as a souvenir is Bakpao Sayang. Various flavors are offered by this product, namely strawberry, chocolate, pineapple, peanut, black bean, green bean, meat, blueberry, and so on.',
            'stock'=> 100,
            'weight'=> 300,
            'price'=> 30000,
            'image'=>'Assets/images/img-pro-02.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Bayam Crispy(100 Gram)',
            'slug' => 'bayam-crispy-100-gram',
            'category_id'=> '2',
            'description'=> 'Spinach chips are chips made from spinach leaves and fried using seasoned flour. Spinach leaves are known to have a high iron content, so besides being delicious, spinach chips also have good benefits for the body.',
            'stock'=> 100,
            'weight'=> 100,
            'price'=> 8700,
            'image'=>'Assets/images/img-pro-03.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Broccoli Chips(200 Gram)',
            'slug' => 'brocolli-chips-200-gram',
            'category_id'=> '2',
            'description'=> 'Brochili chips are processed from broccoli vegetables mixed with flour that has been seasoned. Broccoli chips can affect the nutritional content such as vitamin C, fiber and antioxidants. Even though it is only priced at a relatively cheap price, broccoli chips are beneficial for the health of the body',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 17000,
            'image'=>'Assets/images/img-pro-04.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Chili Chips(200 Gram)',
            'slug' => 'chilli-chips-200-gram',
            'category_id'=> '2',
            'description'=> 'For fans of spicy snacks, of course, you are no stranger to chili chips. Chili chips made from cassava or sweet potato and fried crisply with chili powder are one of the snacks that people really like.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 34000,
            'image'=>'images/img-pro-05.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Cokelat Tempe Dekonco(100 Gram)',
            'slug' => 'cokelat-tempe-dekonco-100-gram',
            'category_id'=> '3',
            'description'=> 'Tempe chocolate is one of the home industry products in Malang that offers the delicacy of chocolate combined with the delicacy of tempeh. Even though it is priced relatively cheaply, this tempeh chocolate has a delicious taste.',
            'stock'=> 100,
            'weight'=> 100,
            'price'=> 10000,
            'image'=>'images/img-pro-06.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Gadung Chips(250 Gram)',
            'slug' => 'gadung-chips-250-gram',
            'category_id'=> '3',
            'description'=> 'Gadung chips are food made from gadung tubers which are thinly sliced then dried in the sun to dry and then fried. Gadung chips are perfect for you chips lovers because they taste delicious.',
            'stock'=> 100,
            'weight'=> 250,
            'price'=> 13500,
            'image'=>'images/img-pro-07.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Klanceng Honey(500 Gram)',
            'slug' => 'klancng-honey-500-gram',
            'category_id'=> '1',
            'description'=> 'Klanceng honey is produced by dwarf honeybees that used to live wild in Southeast Asia and South Asia. The texture of the resulting honey taste is also more sweet and sour, there is also a little bitter. But this lanceng honey has a distinctive taste, different from ordinary honey.',
            'stock'=> 100,
            'weight'=> 500,
            'price'=> 31500,
            'image'=>'images/img-pro-08.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Jackfruit Chips(250 Gram)',
            'slug' => 'jackfruit-chips-250-gram',
            'category_id'=> '2',
            'description'=> 'Jackfruit chips are chips processed jackfruit that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of jackfruit fruit will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine jackfruit fried with a lower temperature of about 50°-60 °C so as not to damage the jackfruit. In addition, the aroma and color do not change much and last stored for a long period of time even without the use of additional preservatives.',
            'stock'=> 100,
            'weight'=> 250,
            'price'=> 22000,
            'image'=>'images/img-pro-09.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Pia Mangkok(400 Gram)',
            'slug' => 'pia-mangkok-400-gram',
            'category_id'=> '3',
            'description'=> 'If Yogyakarta has pathok bakpia, then Malang has "Pia Mangkok". Not much different from the actual pathok bakpia, it`s just that pia bowl has a drier and crisper skin texture. But when you bite it, you will feel a soft sensation on the inside. The variants of the taste vary, there are chocolate, coffee, durian, cheese, tangwe, and green beans',
            'stock'=> 100,
            'weight'=> 400,
            'price'=> 40000,
            'image'=>'images/img-pro-10.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Banana chips(250 Gram)',
            'slug' => 'banana-chips-250-gram',
            'category_id'=> '3',
            'description'=> 'Banana chips can be processed traditionally or through a regular frying pan and can also be processed through a fruit chip machine. This time we will introduce the type of banana chips that are processed traditionally, the way the processing is not complicated recipes, especially also known to the public because the traditional processing of banana chips is one of the legacies that are hereditary introduced by our predecessor generations.

            The banana we choose must be from the type that can be processed into banana chips, should not be too ripe or that is still close to ripe so that at the time of the process of frying bananas can dry faster and also not easily burned.',
            'stock'=> 100,
            'weight'=> 250,
            'price'=> 18000,
            'image'=>'images/img-pro-11.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Apple Cider Drink SIIPLAH(24 pcs)',
            'slug' => 'apple-cider-drink-siiplah-24-pcs',
            'category_id'=> '1',
            'description'=> 'Apple cider drink is a liquid obtained by squeezing apples by filtering or unfiltered, not fermented and intended for fresh drinks that can be drunk directly. Some of the benefits of apples for health are as follows: help the work of the small intestine, reduce the risk of respiratory disorders, nourish the oral cavity and teeth, good for bone health, control blood sugar, prevent and treat cancer, good for brain health, lower cholesterol and many other benefits. The freshness of this apple extract drink is very suitable to be served when it is cold in the hot air. Of course, without losing the benefits of the content of apples themselves that nourish the body.',
            'stock'=> 100,
            'weight'=> 2500,
            'price'=> 32000,
            'image'=>'images/img-pro-12.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Veggie Chips(200 Gram)',
            'slug' => 'veggie-chips-200-gram',
            'category_id'=> '2',
            'description'=> 'Vegetable chips can be made with slices of vegetables fried, fried soaked, baked, or simply dried. Vegetable chips can be produced from a wide variety of root vegetables and leaf vegetables, such as carrots, radishes, rutabaga, parsnips, parsley roots, cervil root, celery root, beets, radishes, topinambur, taro, malanga, egg taro, sweet potato, butter squash, onion, garlic, sweet potatoes, cassava, kale, spinach, fennel, and bengkuang. Some versions of baked chips use sliced vegetables, smeared with a little oil, and then baked in the oven until crisp. [2] Vegetable chips prepared using this method are often called healthier than fried chips, especially if prepared using olive oil that is "heart-healthy".',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 20000,
            'image'=>'images/img-pro-13.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Soya Bean Chips(100 Gram)',
            'slug' => 'soya-bean-chips-100-gram',
            'category_id'=> '2',
            'description'=> 'Tempeh chips are one type of processed food from soy tempeh ingredients that are thinly fried and mixed with spices and other ingredients. Malang is one of the cities producing tempeh chips that are familiar to people, the results of tempeh chips from the Malang area have their own distinctive taste that is able to create the best taste of processed soybeans.

            From the best soybean ingredients, these tempeh chips are made by Aneka Keripik Malang, ranging from soy base ingredients to spices selected through good Quality Control to get the best quality of tempeh chips.

            Processing of tempeh chips is carried out with semi-tradition where assisted by supporting tools and handled by experts in the field of tempeh chips. Healthy and Hygienic is the commitment of Aneka Keripik Malang products to always provide the best results for consumers.',
            'stock'=> 100,
            'weight'=> 100,
            'price'=> 5500,
            'image'=>'images/img-pro-14.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Carrot Chips(250 Gram)',
            'slug' => 'carrot-chips-250-gram',
            'category_id'=> '2',
            'description'=> 'Carrot chips are processed carrot chips that are fried in a special way, usually using a vacuum frying machine. If you use the usual frying method, namely by using a cauldron / pan of jackfruit fruit will not be chips because the fruit will be damaged by excessive heat. By using a vacuum frying machine carrots fried with a lower temperature of about 50°-60 °C so as not to damage the carrot fruit. In addition, the aroma and color do not change much and last stored for a long period of time even without the use of additional preservatives.',
            'stock'=> 100,
            'weight'=> 250,
            'price'=> 17000,
            'image'=>'images/img-pro-15.jpg',
        ]);
    }
}
