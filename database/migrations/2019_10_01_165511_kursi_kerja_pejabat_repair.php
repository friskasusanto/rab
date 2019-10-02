<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KursiKerjaPejabatRepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengadaan_meja_dan_kursi_kerja_pejabats', function (Blueprint $table) {
            $table->string('status')->default(0)->comment('1. kasi/kasubag, 2. kabid/kabag, 3. direktur, 4. supplier, 5. wherehouse, 6. admin, 7. kembali_wherehouse, 8. kembali_kabid/kabag, 9. kembali_kasi/kasubag, 10. kembali_admin');
            $table->UnsignedBiginteger('supplier'); 
            
            $table->foreign('supplier')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengadaan_meja_dan_kursi_kerja_pejabats', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('supplier');

        });
    }
}
