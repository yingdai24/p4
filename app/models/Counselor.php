<?php

class Counselor extends Eloquent {

	/**
	* Identify relation between Counselor and School
	*/
	public function school() {
        # Counselor gives advice about many Schools
        # Define a one-to-many relationship.
        return $this->hasMany('School');
    }

    /**
	* When editing or adding a new school, we need a select dropdown of counselors to choose from
	* This method will generate a key=>value pair of counselor id => counselor name
	*
	* @return Array
	*/
    public static function getIdNamePair() {

		$counselors = Array();

		$collection = Counselor::all();

		foreach($collection as $counselor) {
			$counselors[$counselor->id] = $counselor->name;
		}

		return $counselors;
	}


}