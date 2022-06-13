<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestion;
use App\Models\Classroom; 
use App\Models\Grade; 
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Response
     */
    public function index()
    {

        $questions = Question::all();
        return view('pages.questions', compact('questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreQuestion $request)
    {

        $List_questions = $request->List_questions;

        try {

            $validated = $request->validated();
            foreach ($List_questions as $List_questions) {

                $questions = new Question();

                $questions->question = ['en' => $List_questions['question_en'], 'ar' => $List_questions['question_ar'],'fr' => $List_questions['question_fr']];
                $questions->reply = ['en' => $List_questions['reply_en'], 'ar' => $List_questions['reply_ar'],'fr' => $List_questions['reply_fr']];

                

                $questions->save();

            }

            toastr()->success(trans('messages.success'));
            return redirect()->route('questions.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    /*


    */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update(Request $request)
    {

        try {

            $questions = Question::findOrFail($request->id);

            $questions->update([

                $questions->question = ['ar' => $request->question_ar, 'en' => $request->question_en, 'fr' => $request->question_fr],
                $questions->reply = ['ar' => $request->reply_ar, 'en' => $request->reply_en, 'fr' => $request->reply_fr],
                
            ]);
            toastr()->success(trans('messages.Update'));
            return redirect()->route('questions.index');
        }

        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        $questions = Question::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('questions.index');

    }
}
