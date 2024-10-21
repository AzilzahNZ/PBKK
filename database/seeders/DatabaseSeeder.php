<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sizin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    $user1 = User::create([
        'nama' => 'HIMATIF',
        'email' => 'Himatif@gmail.com',
        'password' => bcrypt('password'),
    ]);

    $suratizin1 = Sizin::create([
        'NomorSurat' => '001/UN30.KM03/TU/2024',
        'NamaKegiatan' => 'P3H',
        'HariKegiatan' => 'Sabtu',
        'TanggalKegiatan' => '2024-10-19',
        'TempatKegiatan' => 'Ruang 3 PKM',  
        'PJKegiatan' => 'Revo',
        'Semester' => 5,
        'NomorHPPJ' => '082280901111',        
        'Status' => true,  
        'user_id' => $user1->id, 
    ]);

    $suratizin2 = Sizin::create([
        'NomorSurat' => '002/UN30.KM03/TU/2024',
        'NamaKegiatan' => 'CHROME X',
        'HariKegiatan' => 'Senin',
        'TanggalKegiatan' => '2024-09-16',
        'TempatKegiatan' => 'GB V',  
        'PJKegiatan' => 'Ferdi',
        'Semester' => 5,
        'NomorHPPJ' => '082280901111',        
        'Status' => true,  
        'user_id' => $user1->id, 
    ]);

    $user2 = User::create([
        'nama' => 'HIMASIF',
        'email' => 'Himasif@gmail.com',
        'password' => bcrypt('password'),
    ]);

    $suratizin1 = Sizin::create([
        'NomorSurat' => '010/UN30.KM06/TU/2024',
        'NamaKegiatan' => 'ORACLE 2024',
        'HariKegiatan' => 'Sabtu',
        'TanggalKegiatan' => '2024-05-05',
        'TempatKegiatan' => 'GB V',  
        'PJKegiatan' => 'Andini',
        'Semester' => 5,
        'NomorHPPJ' => '082280901111',        
        'Status' => true,  
        'user_id' => $user2->id, 
    ]);

    $suratizin2 = Sizin::create([
        'NomorSurat' => '011/UN30.KM06/TU/2024',
        'NamaKegiatan' => 'Dies Natalis',
        'HariKegiatan' => 'Senin',
        'TanggalKegiatan' => '2024-10-15',
        'TempatKegiatan' => 'GB V',  
        'PJKegiatan' => 'Mahfud',
        'Semester' => 5,
        'NomorHPPJ' => '082280901111',        
        'Status' => true,  
        'user_id' => $user2->id, 
    ]);

    }
}
