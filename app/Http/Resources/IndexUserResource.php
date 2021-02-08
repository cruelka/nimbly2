<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class IndexUserResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $output = [];
        foreach ($this->collection['data'] as $item) {
            $output[$item['id']] = [
                'photo'     => $item['photo'],
                'age'       => $item['age'],
                'sex'       => $item['sex'],
                'location'  => $item['location'],
            ];
        }
        $output['paginate'] = [
            'current_page'   => $this->collection['current_page'],
            'first_page_url' => $this->collection['first_page_url'],
            'from'           => $this->collection['from'],
            'last_page'      => $this->collection['last_page'],
            'last_page_url'  => $this->collection['last_page_url'],
            'next_page_url'  => $this->collection['next_page_url'],
            'per_page'       => $this->collection['per_page'],
            'prev_page_url'  => $this->collection['prev_page_url'],
            'to'             => $this->collection['to'],
            'total'          => $this->collection['total'],
        ];

        return $output;
    }
}
