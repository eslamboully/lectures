<?php

namespace Modules\Levels\Http\Controllers;

use App\DataTables\LevelSixDatatable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Levels\Entities\LevelSix;

class LevelSixController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(LevelSixDatatable $levelSixDatatable)
    {
        if ( auth()->guard('admin')->user()->can('read_levelSix')) {
            $title = trans('levels::level.level_six');
            return $levelSixDatatable->render('levels::level_six.index', compact('title'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        if ( auth()->guard('admin')->user()->can('add_levelSix')) {
            $title = trans('levels::level.add_new');

            return view('levels::level_six.create', compact('title'));
        }else{
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        LevelSix::create($data);
        return redirect()->route('level_sixs.create')->with('success', trans('adminpanel::adminpanel.created'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('levels::level_six.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        if ( auth()->guard('admin')->user()->can('edit_levelSix')) {
            $title = trans('adminpanel::adminpanel.edit');
            $row = LevelSix::find($id);

            return view('levels::level_six.edit', compact('row', 'title'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        LevelSix::find($id)->update($data);
        return redirect()->route('level_sixs.index')->with('success', trans('adminpanel::adminpanel.updated'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        if ( auth()->guard('admin')->user()->can('delete_levelSix')) {
            $levelone = LevelSix::find($id);
            $levelone->destroy($levelone->id);

            return back()->with('success', trans('adminpanel::adminpanel.deleted'));
        }else{
            abort(404);
        }
    }

    public function delete_all(Request $request)
    {
        //dd($request->all());
        if ( auth()->guard('admin')->user()->can('delete_levelSix')) {
            if (!$request->has('check_this')) {
                return back()->with('warning', trans('adminpanel::adminpanel.choose_first'));
            } else {
                if (is_array($request->check_this)) {
                    foreach ($request->check_this as $id) {
                        $user = LevelSix::find($id);
                        $user->destroy($user->id);
                    }
                    return back()->with('success', trans('adminpanel::adminpanel.deleted'));
                } else {
                    $user = LevelSix::find($request->check_this);
                    $user->destroy($user->id);

                    return back()->with('success', trans('adminpanel::adminpanel.deleted'));
                }
            }
        }else{
            abort(404);
        }
    }
}
