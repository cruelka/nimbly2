<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class FacebookPostResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $rawOutput = new Collection();

        foreach ($this->collection['data'] as $item) {
            preg_match_all('/#([\w]+)/', $item['caption'] ?? false, $hashTags);
            $rawOutput->push($hashTags[1]);
        }
        $output = collect(
            $rawOutput->flatten()->reduce(
                function ($carry, $item) {
                    $key = array_search($item, array_column($carry, 'hashtag'));
                    ;
                    if (!$key) {
                        $carry[] = ['hashtag' => $item, 'q' => 1];

                        return $carry;
                    }
                    $carry[$key]['q'] += 1;
                    return $carry;
                },
                []
            )
        )->sortByDesc(
            function ($hashtag) {
                return $hashtag['q'];
            }
        )->values()->take(10);

        return $output;
    }
}
