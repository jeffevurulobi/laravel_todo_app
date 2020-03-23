<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function todos()
    {
      return view("todos/todos")->with('todos',Todo::all());
    }

    // creating a dynamic routing controller
    public function show($todoid)
    {
      return view('todos.show')->with('todoid',Todo::find($todoid)); //find() method is used to get the actual id of the item
    }
    //ending a dynamic routing controller

    public function create()
    {
      return view('todos.create');
    }

  //getting input form  details and pushing it to the database started()
    public function store()
    {
  //this checks if the input feilds are empty and validates the data goten from the input feilds
      $this->validate(request(), [
        'name' => 'required|min:6 | max:8',
        'description' => 'required',
      ]);

      $data = request()->all();

      $todo = new Todo();

      $todo->name = $data['name'];

      $todo->description = $data['description'];

      $todo->completed = false;

      $todo->save();

      return redirect('/todos');
      session()->flash('sucess', 'Todo Created Successfully');
    }

    public function edit($todosid)
    {

        return view('todos.edit')->with('todosid', Todo::find($todosid));
    }

    public function update($todosid)
    {
        $this->validate(request(),[
        'name' => 'required|min:6 | max:14',
        'description' => 'required',
      ]);
        $data = request()->all();
        $todo = Todo::find($todosid);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/todos');
        session()->flash('sucess', 'Todo Updated Successfully');
    }

    public function destroy($todosid)
    {
      $data = request()->all();
      $todo = Todo::find($todosid);
      $todo->delete();
      return redirect('/todos');
      session()->flash('sucess', 'Todo Deleted Successfully');
    }
//getting input form  details and pushing it to the database ended()
  public function complete($todosid)
  {
    $data = request()->all();
    $todo = Todo::find($todosid);
    $todo->completed = true;
    $todo->save();
    session()->flash('sucess', 'Todo Completed Successfully');
    return redirect('/todos');
  }
}
