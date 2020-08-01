<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels1 = \App\Channel::create([
           'name' => 'Laravel 7',
           'slug' => str_slug('Laravel 7')
        ]);

        $channel2 = \App\Channel::create([
            'name' => 'VueJS 3',
            'slug' => str_slug('VueJS 3')
        ]);

        $channel3 = \App\Channel::create([
            'name' => 'Angular 8',
            'slug' => str_slug('Angular 8')
        ]);

        $channel3 = \App\Channel::create([
            'name' => 'NodeJS',
            'slug' => str_slug('Node JS')
        ]);
    }
}
