<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tasks.index')
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        try {
            $project = new Project;
            $project->name = $validated['name'];
            $project->save();

            return redirect()->route('tasks.index');
        } catch (\Exception $e) {
            return redirect()->route('tasks.index');
        }
    }

}
