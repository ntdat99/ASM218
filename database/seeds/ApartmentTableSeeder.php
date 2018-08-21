<?php

use Illuminate\Database\Seeder;

class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 2,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 3,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 4,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 5,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 6,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 7,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 8,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 9,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 10,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 11,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 12,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 13,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 14,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 15,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 16,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 17,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',
                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 18,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',

                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 19,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',
                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            [
                'id' => 20,
                'name' => 'apartment',
                'address'=>'so 1',
                'price'=>'10000',
                'information'=>'1`111',
                'information_detail'=>'1111',
                'image' =>'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/38880568_229109950997120_7007941026979512320_n.jpg?_nc_cat=0&oh=9bacffa638e1c6f5ae2f80139c3fa262&oe=5C0482C1',
            ],
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
