<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;


class Student extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $course;
    public $student_id;
    public $search;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email',
        'course' => 'required|min:4',
    ];
    
    
    public function delete($id){
   
    }
    
    
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function test()
    {
        dd("aici in test");
    }
    public function saveStudent()
    {
        $data = $this->validate();
        //dd($data);

        //dd($data);
        \App\Models\Student::create($data);
        $this->dispatch('close-modal');
        session()->flash("message", "Am adaugat un student");
        // return route('student');
    }

    public function editUser($id)
    {
        $student = \App\Models\Student::find($id);

        $this->name =  $student->name;
        $this->email = $student->email;
        $this->course = $student->course;
        $this->student_id = $id;
    }
    function saveEditedStudent()
    {
       // dd($this->student_id);
        $student = \App\Models\Student::findOrFail($this->student_id);
        $student->name = $this->name;
        $student->email = $this->email;
        $student->course = $this->course;

        $student->save();

        $this->closeModal();
    }
    function closeModal()
    {
        $this->resetFields();
        $this->dispatch('close-modal');
    }
    function resetFields()
    {
        $this->name = "";
        $this->email = "";
        $this->course = "";
        $this->student_id = "";
    }
    public function render()
    {
        
        if($this->search==""){
            $students = \App\Models\Student::paginate(2); //->get();//::all();
        }else{
            dd($this->search);
            $students = \App\Models\Student::where("name","like","%".$this->name."%")->orderBy("id","desc")->paginate(2);
            //dd($students);
        }
    
        //dd($students);
        // $this->students = $students;
        return view('livewire.student', ['students' => $students])->extends('student.index');
    }
}
