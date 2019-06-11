<?php

use Illuminate\Database\Seeder;

class coursestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\course::class)->create();
    }
}
