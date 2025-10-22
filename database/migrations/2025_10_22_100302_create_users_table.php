<?php

use App\Models\Department;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignUuid('department_id')->nullable()->constrained('departments')->onDelete('set null');
            $table->foreignUuid('section_id')->nullable()->constrained('sections')->onDelete('set null');
            $table->foreignUuid('position_id')->nullable()->constrained('positions')->onDelete('set null');
            $table->foreignUuid('role_id')->nullable()->constrained('roles')->onDelete('set null');
            $table->boolean('is_active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
