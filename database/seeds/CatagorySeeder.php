<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;



class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                \App\Models\Catagory::factory()->create([
                   
                    'Model'=>'required',
                    'Color'=>'required',
                    'Glass'=>'required',
                    'Wheel_Size'=>'required',
                    'Body'=>'required'
                    
                ]);
            }
        }
        
    
