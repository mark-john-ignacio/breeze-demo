<?php

namespace Modules\Mobiles\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MobileCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
