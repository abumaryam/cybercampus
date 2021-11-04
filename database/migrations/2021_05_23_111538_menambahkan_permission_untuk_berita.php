<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Permission;

class MenambahkanPermissionUntukBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $index_berita = Permission::create([
            'name' => 'index-berita',
            'display_name' => 'Melihat isi berita di halaman admin/backend',
            'description' => 'Melihat isi berita di halaman admin/backend'
        ]);
        $detail_berita = Permission::create([
            'name' => 'detail-berita',
            'display_name' => 'Melihat detail berita di halaman admin/backend',
            'description' => 'Melihat detail berita di halaman admin/backend'
        ]);

        $hapus_berita = Permission::create([
            'name' => 'hapus-berita',
            'display_name' => 'Menghapus berita di halaman admin/backend',
            'description' => 'Menghapus berita di halaman admin/backend'
        ]);
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
