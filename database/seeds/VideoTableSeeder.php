<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
    		'title' => 'Proin eu massa odio?',
    		'text'  => 'Maecenas faucibus elementum ipsum nec rhoncus. Integer a tortor vitae felis lobortis rutrum. Donec convallis turpis et tincidunt pretium. Integer placerat luctus euismod. Nunc congue magna vel elementum.',
    		'embed' => '_sI_Ps7JSEk'
        ]);
    }
}
