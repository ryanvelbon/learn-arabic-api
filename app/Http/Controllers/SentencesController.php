<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sentence;
use Validator;

class SentencesController extends Controller
{
    public function index()
    {
        $sentences = Sentence::all();
        return response()->json($sentences);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sentence_ar' =>
                array(
                    'required',
                    'regex:/('.config('constants.regex.sentence_ar').')/u'
                ),

            'sentence_en' =>
                array(
                    'required',
                )
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            $sentence = new Sentence;
            $sentence->sentence_ar = $request->input('sentence_ar');
            $sentence->sentence_en = $request->input('sentence_en');
            $sentence->save();

            return response()->json($sentence);
        }
    }

    public function show($id)
    {
        $sentence = Sentence::find($id);
        return response()->json($sentence);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sentence_ar' => 'required',
            'sentence_en' => 'required'
        ]);

        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            $sentence = Sentence::find($id);
            $sentence->sentence_ar = $request->input('sentence_ar');
            $sentence->sentence_en = $request->input('sentence_en');
            $sentence->save();

            return response()->json($sentence);
        }
    }

    public function destroy($id)
    {
        $sentence = Sentence::find($id);
        $sentence->delete();

        $response = array('response' => 'Sentence deleted', 'success' => true);
        return $response;
    }
}
