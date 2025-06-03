<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{	
    use HasFactory;
	protected $fillable = ['title', 'start', 'end'];
    /* Schema::create('events', function (Blueprint $table) {
		$table->id();
		$table->string('title');
		$table->dateTime('start');
		$table->dateTime('end')->nullable();
		$table->timestamps();
	}); */
}
