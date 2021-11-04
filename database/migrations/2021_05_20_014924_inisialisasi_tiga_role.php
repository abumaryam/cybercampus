<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use App\Models\Permission;

class InisialisasiTigaRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $editor = Role::create([
            'name' => 'editor',
            'display_name' => 'Editor', // optional
            'description' => 'Bertugas mengedit dan memvalidasi berita yang ditulis oleh kontributor', // optional
        ]);

        $kontributor = Role::create([
            'name' => 'kontributor',
            'display_name' => 'Kontributor', // optional
            'description' => 'Orang yang menulis berita', // optional
        ]);

        $member = Role::create([
            'name' => 'member',
            'display_name' => 'Member', // optional
            'description' => 'Pembaca yang dapat memberikan komentar pada berita', // optional
        ]);

        $menambahkanBerita = Permission::create([
            'name' => 'menambahkan-berita',
            'display_name' => 'Menambahkan Berita', // optional
            'description' => 'menambahkan berita baru', // optional
        ]);

        $editBerita = Permission::create([
            'name' => 'edit-berita',
            'display_name' => 'Edit Berita', // optional
            'description' => 'mengedit berita dari kontributor', // optional
        ]);

        $menambahkanKomentar = Permission::create([
            'name' => 'menambahkan-komentar',
            'display_name' => 'Menambahkan Komentar', // optional
            'description' => 'menambahkan komentar pada suatu berita', // optional
        ]);

        $kontributor->attachPermission($menambahkanBerita);
        $member->attachPermission($menambahkanKomentar);
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
