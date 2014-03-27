<?php
/**
 * 	User meta model
 */
class UserMeta extends Eloquent{
	protected $table = 'user_meta';
	
	protected $fillable = array('user_id', 'meta_key');
	
	const TYPE_SEEN_ANNOTATION_THANKS = "seen_annotation_thanks";
	
	public function user(){
		return $this->belongsTo('User');
	}
	
}
