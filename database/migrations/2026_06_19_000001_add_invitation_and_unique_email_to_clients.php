<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $duplicates = DB::table('clients')
            ->select('email')
            ->groupBy('email')
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($duplicates as $dup) {
            $keep = DB::table('clients')
                ->where('email', $dup->email)
                ->orderBy('id')
                ->first();

            DB::table('clients')
                ->where('email', $dup->email)
                ->where('id', '!=', $keep->id)
                ->update([
                    'email' => DB::raw("CONCAT(email, '--removed--', id)"),
                ]);
        }

        Schema::table('clients', function (Blueprint $table) {
            $table->string('email')->unique()->change();
            $table->string('invitation_token', 64)->nullable()->after('remember_token');
            $table->timestamp('invitation_expires_at')->nullable()->after('invitation_token');
            $table->string('referral', 255)->nullable()->after('whatsapp');
        });
    }

    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn(['invitation_token', 'invitation_expires_at', 'referral']);
            $table->dropUnique(['email']);
        });
    }
};
