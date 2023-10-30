<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FeatureResource;
use App\Models\Feature;

class BettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        
       return [
        
        'id' => $this->id,
        'country_id' => $this->country_id,
        'betting_id' => $this->betting_id,
        'country_name' => $this->country_id ? $this->country->name:"",
        'country_slug' => $this->country_id ? $this->country->slug: "",
        'name' => $this->betting->name,
        'logo' => url('/') . '/public/storage/'.$this->betting->logo,
        'description' => $this->betting->description,
        'bonus' => $this->betting->bonus,
        'turnover' => $this->betting->turnover,
        'min_odds' => $this->betting->min_odds,
        'slug' => $this->betting->slug,
        'website_url' => $this->betting->website_url,
        'referral_url'=> $this->betting->referral_url,
        'review' => $this->betting->review,
        'status' => $this->betting->status,
        
        ];
    }
}
