<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cms_pages', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->string('slug')->unique()->after('title');
            $table->longText('content')->nullable()->after('slug');

            $table->enum('status', [
                'draft',
                'published',
                'unpublished',
            ])->default('draft')->after('content');

            $table->enum('visibility', [
                'public',
                'authenticated',
            ])->default('public')->after('status');

            $table->foreignId('created_by')
                ->nullable()
                ->after('visibility')
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('updated_by')
                ->nullable()
                ->after('created_by')
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('published_by')
                ->nullable()
                ->after('updated_by')
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('published_at')
                ->nullable()
                ->after('published_by');
        });
    }

    public function down(): void
    {
        Schema::table('cms_pages', function (Blueprint $table) {
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['published_by']);

            $table->dropColumn([
                'title',
                'slug',
                'content',
                'status',
                'visibility',
                'created_by',
                'updated_by',
                'published_by',
                'published_at',
            ]);
        });
    }
};