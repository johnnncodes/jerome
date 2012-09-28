<?php

class Students_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// render the student records
		return View::make('students.manage')
			->with('students', Student::all());
	}

	public function get_add()
	{
		return View::make('students.add');
	}

	public function post_add()
	{
		$student = New Student;
		$student->name = Input::get('name');
		$student->student_number = Input::get('student_number');
		
		//return print_r($student->save());

		if ($student->save()) {
			 return Redirect::back()->with('success', 'Student successfuly added!');	
		} else {
			return Redirect::back()->with_errors($student->errors->all());
		}

	}

	public function get_subjects($student_id)
	{
		// return View::make('students.subjects')
		// 	->with('students', Student::where_studentid($student_id)->get());

		$student = Student::where_studentid($student_id)->get();
		print_r($student);

	}




}