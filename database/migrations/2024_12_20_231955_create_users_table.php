<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom primary key auto-increment
            $table->string('name'); // Kolom nama pengguna
            $table->string('email')->unique(); // Kolom email pengguna yang unik
            $table->timestamp('email_verified_at')->nullable(); // Kolom verifikasi email
            $table->string('password'); // Kolom password yang terenkripsi
            $table->rememberToken(); // Kolom untuk mengingat sesi pengguna
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
