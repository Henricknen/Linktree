<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {       // tabela 'users'
            $table-> id();
            $table-> string('email');
            $table-> string('senha');
            // $table->timestamps();
        });
        
        Schema::create('pages', function (Blueprint $table) {       // tabela 'pages'
            $table-> id();
            $table-> integer('id_user');
            $table-> string('slug');
            $table-> string('op_font_color')-> default('#000000');      // 'op' se refere a campos opçionais
            $table-> string('op_bg_type')-> default('color');
            $table-> string('op_bg_value')-> default('#FFFFFF');
            $table-> string('op_profile_image')-> default('default.png');
            $table-> string('op_title')-> nullable;
            $table-> string('op_description')-> nullable;
            $table-> string('op_fb_pixel')-> nullable;
        });
        
        Schema::create('links', function (Blueprint $table) {       // tabela 'links'
            $table-> id();
            $table-> integer('id_page');
            $table-> integer('status')-> default(0);
            $table-> integer('order');
            $table-> string('title');
            $table-> string('href');
            $table-> string('op_bg_color')-> nullable();
            $table-> string('op_text_color')-> nullable();
            $table-> string('op_border_type')-> nullable();
        });
        
        Schema::create('views', function (Blueprint $table) {       // tabela 'views'
            $table-> id();
            $table-> integer('id_page');
            $table-> date('view_date');
            $table-> integer('total')-> default(0);
            
        });
        
        Schema::create('clicks', function (Blueprint $table) {       // tabela 'clicks'
            $table-> id();
            $table-> integer('id_link');
            $table-> date('click_date');
            $table-> integer('total')-> default(0);
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('users');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('links');
        Schema::dropIfExists('views');
        Schema::dropIfExists('clicks');
    }
};
