<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            ['name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin'],
            ['name' => 'youke',
                'email' => 'youke@admin.com',
                'password' => 'youke'],
        ]);

        DB::table('menus')->insert([
            ['name'=>'skill','url'=>'/admin'],
            ['name'=>'portfolio','url'=>'/admin'],
            ['name'=>'education','url'=>'/admin'],
            ['name'=>'work','url'=>'/admin'],
            ['name'=>'菜单列表','url'=>'/admin/menu/index'],
        ]);
    }
}
