<?php

class Comment extends Eloquent {
	
	public function book() {
		return $this->belongsTo('Book');
	}
	
}