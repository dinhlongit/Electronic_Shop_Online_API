<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('user_roles')->truncate();

        $role_users = [
            [1,1,1],
            [2,2,2],
            [3,3,3],
            [4,1,3],
        ];

        foreach ($role_users as $user) {
            App\UserRole::create([
                'user_id'=>$user[1],
                'role_id'=>$user[2],
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
