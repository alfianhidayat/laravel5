<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Kelas;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Eloquent::unguard();

        // call our class and run our seeds
        $this->call('MahasiswaAppSeeder');
        $this->command->info('Mahasiswa seeds selesai.'); 
    }
}

    class MahasiswaAppSeeder extends Seeder {
    
    public function run() {

        // clear our database ------------------------------------------
        DB::table('mahasiswa')->delete();
        DB::table('kelas')->delete();

        $kls01 = Kelas::create(array(
            'kelas'    => 'SI-38-01',
            'dosen_wali'     => 'Murahartawaty'
        ));
        $kls02 = Kelas::create(array(
            'kelas'    => 'SI-39-01',
            'dosen_wali'     => 'M Azani Hasibuan'
        ));

        $this->command->info('Kelas diisi!');

        Mahasiswa::create(array(
            'nim'         => '120214044',
            'nama'         => 'Widyan',
            'email' => 'muhammadwidyan36@gmail.com',
            'kelas_id' => $kls01->id
        ));

        Mahasiswa::create(array(
            'nim'         => '120214076',
            'nama'         => 'Indah',
            'email' => 'indah@gmail.com',
            'kelas_id' => $kls01->id
        ));

        Mahasiswa::create(array(
            'nim'         => '120215504',
            'nama'         => 'Dinda',
            'email' => 'dinda@gmail.com',
            'kelas_id' => $kls02->id
        ));

        $this->command->info('Mahasiswa diisi!');

        

    }

}
