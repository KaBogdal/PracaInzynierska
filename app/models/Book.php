<?php

class Book extends Eloquent {
	
	public function comments() {
		return $this->hasMany('Comment');
	}
	
}