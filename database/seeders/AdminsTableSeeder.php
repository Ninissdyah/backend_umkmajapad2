<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

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
        ];
        Admin::insert($adminRecords);
    }
}
