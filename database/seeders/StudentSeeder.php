<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $nim = '1801'. str_pad($i + 1 ,5, '0', STR_PAD_LEFT);
            $nama = ['Gilang','Fulan','Sasuki'];
            $nama_acak = $nama[array_rand($nama)];
            $email = "$nama_acak.$nim@students.polibatam.ac.id";

            Student::create([
                'nim' => $nim,
                'nama' => $nama_acak,
                'email' => $email,
                'Prodi' => 'D4 Teknologi Rekayasa Perangkat Lunak',
            ]);
        }
    
        //
    }
}
