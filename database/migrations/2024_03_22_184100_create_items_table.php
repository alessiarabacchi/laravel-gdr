<?php

Schema::create('items', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description')->nullable();
    $table->string('slug');
    $table->string('category');
    $table->string('type');
    $table->string('weight');
    $table->string('cost');
    $table->timestamps();
});