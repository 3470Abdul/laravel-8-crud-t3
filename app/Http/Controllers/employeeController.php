<?php

namespace App\Http\Controllers;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
   public function index()
   {
       return view('employee');
   }

   public function insert(request $request)
   {
    //    echo "form data";

    $name = request('name');
    $age = request('age');
    $designation = request('designation');

    // echo $name . " " . $age . " " . $designation;

    $query = DB::insert('insert into employee (name, age, designation) values (?, ?, ?)', [$name, $age, $designation]);

    if($query)
    {
        return redirect('employee')->with('success','Data Inserted Successfully');
    }
    else{
        return redirect('employee')->with('success', 'Data Not Inserted');
    }
   }

   public function display()
   {
       $data = db::select('select * from employee');

    //    dd($data);
        return view('display', compact('data'));
   }

   public function update($id)
   {
       $id = $id;
    //    echo($id);
       $data = db::select('select * from employee where id = ?',[$id]);
    //    dd($data);
       return view('update',compact('data'));
   }

   public function updateData(Request $request)
   {

       $id = request('id');
       $name = request('name');
       $age = request('age');
       $designation = request('designation');
        // echo $id . " " . $name . " " . $age . " " . $designation;
        $query = db::update('update employee set name = ?, age = ?, designation = ? where id = ?',[$name, $age,$designation, $id]);
        if($query)
        {
            return redirect('display')->with('success', 'Data updated Successfully');
        }
        else
        {
            return redirect('display')->with('danger', 'Similar Data could not updated');
        }

    }

    public function delete($id)
    {
        $id = $id;

        $query = db::delete('delete from employee where id = ?', [$id]);
        if($query)
        {
            return redirect('display')->with('success', 'Data Deleted Successfully');
        }
        else
        {
            return redirect('display')->with('danger', 'Data Deletion Failled');
        }
    }

}

