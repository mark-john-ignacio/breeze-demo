<?php

namespace Modules\Mobiles\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Modules\Mobiles\Http\Requests\Api\V1\MobileRequest;
use Modules\Mobiles\Http\Resources\Api\V1\MobileCollection;
use Modules\Mobiles\Http\Resources\Api\V1\MobileResource;
use Modules\Mobiles\Models\Mobile;
use Symfony\Component\HttpFoundation\Response;

class MobilesController extends Controller
{
    public function index(): MobileCollection
    {
        $mobiles = Mobile::paginate();

        return new MobileCollection($mobiles);
    }

    public function store(MobileRequest $request): MobileResource
    {
        $mobile = Mobile::create($request->validated());

        return new MobileResource($mobile);
    }

    public function show(Mobile $Mobile): MobileResource
    {
        return new MobileResource($Mobile);
    }

    public function update(MobileRequest $request, Mobile $mobile): MobileResource
    {
        $mobile->update($request->validated());

        return new MobileResource($mobile);
    }

    public function destroy(Mobile $mobile): Response
    {
        $mobile->delete();

        return response()->noContent();
    }
}
