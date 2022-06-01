<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Kota;
use App\Models\Proyek;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Proyek::fasilitas()->where('id',request('proyek'))->firstOrFail();
        $data_kota = Kota::orderBy('nama','ASC')->get();
        $data_fasilitas = Proyek::fasilitas()->orderBy('nama_proyek','ASC')->get();
        return view('pages.feedback.create',[
            'title' => 'Beri masukan mengenai fasilitas ' . $fasilitas->nama_proyek,
            'data_kota' => $data_kota,
            'data_fasilitas' => $data_fasilitas,
            'fasilitas' => $fasilitas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'proyek_id' => ['required'],
            'rating' => ['required']
        ]);

        $data = request()->all();
        $data['user_id'] = auth()->id();
        Feedback::create($data);

        return redirect()->route('fasilitas.show',request('proyek_id'))->with('success','Terimasih telah memberi feedback salah satu fasilitas kami.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedbackRequest  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
