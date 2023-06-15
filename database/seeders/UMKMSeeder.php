<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $umkmRecords = [
            //food
            ['id'=>1, 'name'=>'Bimyeons', 'email'=>'bimyeons@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>2, 'name'=>'Kopiku', 'email'=>'kopiku@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>3, 'name'=>'Nasi Goreng 86', 'email'=>'nasigoreng@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>4, 'name'=>'Roti Bakar', 'email'=>'rotibakar@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>5, 'name'=>'Seblakyu', 'email'=>'seblakyu@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>6, 'name'=>'True Boba', 'email'=>'trueboba@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>7, 'name'=>'Waffleuzi', 'email'=>'waffleuzi@gmail.com', 'status'=>0, 'confirm'=>'Yes'],

            //art
            ['id'=>8, 'name'=>'The Art', 'email'=>'theart@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>9, 'name'=>'Bobby Gallery', 'email'=>'bobbygallery@gmail.com', 'status'=>0, 'confirm'=>'Yes'],
        ];
        Vendor::insert($umkmRecords);
    }

}
