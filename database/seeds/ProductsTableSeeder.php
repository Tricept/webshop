<?php


use App\Product;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Article 1',
            'slug' => 'Article-1',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 2',
            'slug' => 'Article-2',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 3',
            'slug' => 'Article-3',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 4',
            'slug' => 'Article-4',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 5',
            'slug' => 'Article-5',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 6',
            'slug' => 'Article-6',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 7',
            'slug' => 'Article-7',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);

        Product::create([
            'name' => 'Article 8',
            'slug' => 'Laptop-8',
            'details' => '15 inch, 1TB SSD, 16BG RAM',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
             sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
             erat, sed diam voluptua. At vero eos et accusam et',

        ]);
    }
}
