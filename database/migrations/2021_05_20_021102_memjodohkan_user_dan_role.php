<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemjodohkanUserDanRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // membuat user
        for ($i=0; $i < 100; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@emailku.com',
                'password' => Hash::make('password'),
            ]);
        }

        $user = User::find(3);
        $editor = Role::where('name', 'editor')->first();
        $user->attachRole($editor);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
