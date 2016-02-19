<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Desabilitar verificação de chaves estrangeiras na inserção de dados.
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
         $nome = str_random(10);
         $email = str_random(10);
         DB::table('users')->insert([
             'name'     => $nome,
             'email'    => $email.'@gmail.com',
             'password' => bcrypt('123'),
         ]);
         $this->command->info('User '.$nome.' was created success');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
