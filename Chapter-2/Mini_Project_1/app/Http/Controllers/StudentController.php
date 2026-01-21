<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Alice',  'age' => 20],
            ['name' => 'Bob',    'age' => 22],
            ['name' => 'Charlie','age' => 19],
        ];

        // Pass data to a view: resources/views/students/index.blade.php
        return view('students', ['students' => $students]);
    }
}
?>