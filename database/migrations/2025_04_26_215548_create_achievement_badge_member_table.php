<?php


use App\Models\AchievementBadge;
use App\Models\Member;
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
        Schema::create('achievement_badge_member', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AchievementBadge::class);
            $table->foreignIdFor(Member::class);
            $table->date('date_of_acceptance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_badge_member');
    }
};
