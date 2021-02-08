<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FacebookPageResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $output = [];
        foreach ($this->collection['data'] as $item) {
            if (isset($item['instagram_business_account'])) {
                $output[] = [
                    'category'   => $item['category_list'] ?? [],
                    'name'       => $item['name'],
                    'page_id'    => $item['id'],
                    'ig_account' => $item['instagram_business_account'],
                ];
            }
        }
        return $output;
    }
}
