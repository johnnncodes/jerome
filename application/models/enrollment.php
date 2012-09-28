<?php

class Enrollment extends Aware {
	
	public static $table = 'enrollment';

	public static $timestamps = false;

	/**
	 * Aware validation rules
	 */
	public static $rules = array(
		'studentid' => 'required|integer|exists:student,studentid',
		'subjectsectionid' => 'required|integer|exists:subjectsection,subjectsectionid',
	);

	public function student()
	{
	  return $this->belongs_to('Student');
	}


}