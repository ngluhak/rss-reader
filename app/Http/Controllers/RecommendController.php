<?php

namespace App\Http\Controllers;

use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommends = Recommend::with(['user'])->get();
        return view ('recommends.index', compact('recommends'));
    }

    public function feed()
    {
        $posts = Post::where('status', 'published')->
        orderBy('created_at', 'desc')->
        limit(50)->get();
        return response()->view('rss.feed', compact('posts'))->header('Content-Type', 'application/xml');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function show(Recommend $recommend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function edit(Recommend $recommend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecommendRequest $request, Recommend $recommend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommend  $recommend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recommend $recommend)
    {
        // Gate::authorize('delete-recommend', $recommend);
        /*    
        if (! Gate::allows('delete-recommend', $recommend)) {
            abort(403);
        }

        */



        /*

        OVO SE VRATI NAZAD UKOLIKO SE ŽELI KORISTITI POLICY, koji ne radi lol

        $user = Auth::user();
        dd($user);
        if ($user->can('delete-recommend', $recommend)) {
            dd($recommend);
          } else {
            abort(403);
          }

        */

        $recommend->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }

}
