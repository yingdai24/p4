<?php

class School extends Eloquent {

    protected $guarded = array('id', 'created_at', 'updated_at');

    /**
    * School is in charged by Counselor
    * Define an inverse one-to-many relationship.
    */
	public function counselor() {

        return $this->belongsTo('Counselor');

    }

    
    /**
    * Search among schools and counselors
    * @return Collection
    */
    public static function search($query) {

        # If there is a query, search the library with that query
        if($query) {

            # Eager load counselor
            $schools = School::with('counselor')
            ->whereHas('counselor', function($q) use($query) {
                $q->where('counselor_name', 'LIKE', "%$query%");
            })
            ->orWhere('school_name', 'LIKE', "%$query%")
            ->orWhere('built_year', 'LIKE', "%$query%")
            ->get();       

        }
        # Otherwise, just fetch all schools
        else {
            # Eager load counselor
            $schools = School::with('counselor')->get();
        }

        return $schools;
    }

}