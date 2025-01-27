<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use App\Models\Wjob;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void {
            Schema::create('workers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('worker_code', 3)->unique();
                $table->string('worker_name');
                $table->date('birthday');
                $table->char('phone_number', 12)->unique();
                $table->decimal('salary', 10, 2);
                $table->foreignIdFor(Wjob::class);
                $table->timestamps();
            });
        }
        /**
         * Reverse the migrations.
         */
        public function down(): void {
            Schema::dropIfExists('workers');
        }
    };