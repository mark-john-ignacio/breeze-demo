<?php

namespace Modules\Mobiles\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Modules\Mobiles\Http\Requests\MobileRequest;
use Modules\Mobiles\Models\Mobile;

class MobilesController extends Controller
{
    public function index(): View
    {
        $mobiles = Mobile::paginate();

        return view('mobiles::index', compact('mobiles'));
    }

    public function create(): View
    {
        return view('mobiles::create');
    }

    public function store(MobileRequest $request): RedirectResponse
    {
        Mobile::create($request->validated());

        return to_route('mobiles.index');
    }

    public function show(Mobile $mobile): View
    {
        return view('mobiles::show', compact('mobile'));
    }

    public function edit(Mobile $mobile): View
    {
        return view('mobiles::edit', compact('mobile'));
    }

    public function update(MobileRequest $request, Mobile $mobile): RedirectResponse
    {
        $mobile->update($request->validated());

        return to_route('mobiles.index');
    }

    public function destroy(Mobile $mobile): RedirectResponse
    {
        $mobile->delete();

        return to_route('mobiles.index');
    }
}
