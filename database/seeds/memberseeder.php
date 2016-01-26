<?php

use Illuminate\Database\Seeder;
use App\member;

class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        member::create([
            'MID'=>'M'.rand(),
            'Fname'=>'sfdgds',
            'Lname'=>'sadf',
            'Clothing'=>'dfg'
        ]);
    }
}
