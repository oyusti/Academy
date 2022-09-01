<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [    
            'id'                    =>  $this->id,
            'name'                  =>  $this->name,
            'Horas teoricas'        =>  $this->hour_theo,
            'Profesor'              =>  $this->teacher->name,
            'Escuela'               =>  $this->school->name,
            'Resumen'               =>  $this->description,
            ];
    }
}
