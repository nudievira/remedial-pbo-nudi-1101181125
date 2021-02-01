<?php

use App\sysuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
            'uname' => 'Sykes',
            'namalengkap' => 'Olisam',
            'email' => 'olisamsykes@gmail.com',
            'upass' => sha1('suckmen123')
        ]);
    }
}
