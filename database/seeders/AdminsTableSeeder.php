<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id'=>1, 'name'=>'Super Admin', 'type'=>'admin', 'vendorId'=>0, 'email'=>'admin@gmail.com', 
            'password'=>'$2a$12$fVmO/fG5auHsP6VYr1EZ1eCz3raGfb.A2RhzIWEBeBBqERbT/xFNO', 'status'=>1, 'confirm'=>'No'],

            //food
            ['id'=>2, 'name'=>'Bimyeons', 'type'=>'vendor', 'vendorId'=>1, 'email'=>'bimyeons@gmail.com', 
            'password'=>'$2a$12$k4sT0FWda.be9C8wgwEw0ewUFCIoDoalsyUJEtWADZmKWFF3R7gTG', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>3, 'name'=>'Kopiku', 'type'=>'vendor', 'vendorId'=>2, 'email'=>'kopiku@gmail.com', 
            'password'=>'$2a$12$XojwjE9Qvh2sOiheku7TPOrX/7I9mFWqAM5Ok3YwTOBGlKWq50naS', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>4, 'name'=>'Nasi Goreng 86', 'type'=>'vendor', 'vendorId'=>3, 'email'=>'nasigoreng@gmail.com', 
            'password'=>'$2a$12$s98DkVM4ELCTic9bST0mBu5IMxRAEAnCyB98KlqmbjdtMgiwdsgy2', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>5, 'name'=>'Roti Bakar', 'type'=>'vendor', 'vendorId'=>4, 'email'=>'rotibakar@gmail.com', 
            'password'=>'$2a$12$Zqla./RTvE.rVtiyOV6H2uXcWHyyv8mUO7EEmyVF4HWRPys9Qhtgi', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>6, 'name'=>'Seblakyu', 'type'=>'vendor', 'vendorId'=>5, 'email'=>'seblakyu@gmail.com', 
            'password'=>'$2a$12$zR4WOqsw9TpWIwyerfDRVuJZeOG6TlrdtaNf1vSqu2Tn4z/kLpU9S', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>7, 'name'=>'True Boba', 'type'=>'vendor', 'vendorId'=>6, 'email'=>'trueboba@gmail.com', 
            'password'=>'$2a$12$RDpIvTIIEdrSueD8M4TrFu1yjriUmBIfUBcRaMk2T/KuVzq0Ppm/u', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>8, 'name'=>'Waffleuzi', 'type'=>'vendor', 'vendorId'=>7, 'email'=>'waffleuzi@gmail.com', 
            'password'=>'$2a$12$qtVnpLo0QWEmpiCXJpgHDeoMaTwSXrOTWleSxCBcJ9c/.sviLw9IK', 'status'=>0, 'confirm'=>'Yes'],

            //art
            ['id'=>9, 'name'=>'The Art', 'type'=>'vendor', 'vendorId'=>8, 'email'=>'theart@gmail.com', 
            'password'=>'$2a$12$3ST2XtzcrEHBlmbA1qcQTOlhBAbzwVAbx7L/pQ.RJ8wd2dhHB5qAe', 'status'=>0, 'confirm'=>'Yes'],
            ['id'=>10, 'name'=>'Bobby Gallery', 'type'=>'vendor', 'vendorId'=>9, 'email'=>'bobbygallery@gmail.com', 
            'password'=>'$2a$12$myLV83obG/l5reGqh3UWzO6UMX.BiYxzhLXcu4S5CAulig7qqv7hi', 'status'=>0, 'confirm'=>'Yes'],
            ];
        User::insert($adminRecords);
    }
}
