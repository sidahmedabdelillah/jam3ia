<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentProfile($id){
        $student = Student::findOrFail($id);
        
        $skills = preg_split("/\r\n|\n|\r/", $student->skills);
        $hobies = preg_split("/\r\n|\n|\r/", $student->hobies);




        return view('student/student' , [
            "student" => $student,
            "skills" => $skills,
            "hobies" => $hobies
        ]);
    }

    public function studentEditProfile($id){
        $student = Student::findOrFail($id);

        return view('student/student_edit' , [
            "student" => $student
        ]);
    }

    public function studentPutProfile(Request $request , $id){

        $validated = $request->validate([
            "family_name" => "required",
            "first_name" => "required",
            "address" => "string",
            "email" => "string",
            "parent" => "string",
            "num_parent" => "string",
            "parent_email" => "string",
            "scolaire" => "string",
            "birth_day" => "string",
            "commune_id" => "nullable|numeric",
            "quran" => "numeric",
            "sonna" => "numeric",
            "hobies" => "nullable|string",
            "skills" => "nullable|string",
            "health" => "nullable|string",
            "discription" => "nullable|string"
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);

        return redirect('student_profile' , ["id" => $id]);
    }
}
