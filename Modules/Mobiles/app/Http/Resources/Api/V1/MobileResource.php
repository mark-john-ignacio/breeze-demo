<?php

namespace Modules\Mobiles\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class MobileResource extends JsonResource
{
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
