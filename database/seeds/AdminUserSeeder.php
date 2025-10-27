<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Verificar se o usuário admin já existe
        if (!User::where('email', 'admin@mataverde.com')->exists()) {
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@mataverde.com',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]);
            
            $this->command->info('Usuário administrador criado com sucesso!');
            $this->command->info('Email: admin@mataverde.com');
            $this->command->info('Senha: admin123');
        } else {
            $this->command->info('Usuário administrador já existe.');
        }
    }
}
