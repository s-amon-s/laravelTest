<?php

use Illuminate\Database\Seeder;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('objects')->insert([
         array('oid' => 1,'objcolor' => 'blue','width' => 2,'height' => 3,'depth' => 4,'shape' => 'rectangle','shapeicon' => 'images/arecblue.png','uid' => 1),
		array('oid' => 2,'objcolor' => 'green','width' => 3,'height' => 4,'depth' => 3,'shape' => 'triangle','shapeicon' => 'images/atrigreen.png','uid' => 2),
		array('oid' => 3,'objcolor' => 'orange','width' => 4,'height' => 2,'depth' => 2,'shape' => 'rectangle','shapeicon' => 'images/arecorange.png','uid' => 3),
      ]
    );
    }
}
