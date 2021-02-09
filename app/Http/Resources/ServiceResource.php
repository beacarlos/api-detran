<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\AnswerResource;

class ServiceResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'questions_id' => $this->questions_id,
            'description' => $this->description,
            'categories_id' => $this->categories_id,
            'answer' => AnswerResource::collection($this->question)
        ];
    }
}
