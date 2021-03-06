<?php


namespace Iyngaran\Advertiser\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Iyngaran\Location\Models\Location;

class Post extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'for' => $this->for,
            'condition' => $this->condition,
            'short_description' => $this->short_description,
            'detail_description' => $this->detail_description,
            'price' => $this->price,
            'currency' => $this->currency,
            'negotiable' => $this->negotiable,
            'address' => $this->address,
            'city' => Location::find($this->city),
            'state' => Location::find($this->state),
            'country' => Location::find($this->country),
            'geo_location' => $this->geo_location,
            'contact_name' => $this->contact_name,
            'contact_numbers' => $this->contact_numbers,
            'contact_emails' => $this->contact_emails,
            'contact_note' => $this->contact_note,
            'category' => $this->category,
            'sub_category' => $this->subCategory,
            'default_image' => $this->defaultImage,
            'images' => $this->images,
            'belongs_to' => getUserModel()::find($this->belongs_to),
            'posted_by' => $this->posted_by,
            'posted_at' => $this->posted_at,
            'marked_as_featured' => $this->marked_as_featured,
            'status' => $this->status,
            'published_by' => $this->published_by,
            'published_at' => $this->published_at,
            'review_status' => $this->review_status,
            'is_verified' => $this->review_status == 'Reviewed',
            'reviewed_by' => $this->reviewed_by,
            'reviewed_at' => $this->reviewed_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'updated_at_diff_for_humans' => $this->updated_at ? $this->updated_at->diffForHumans() : null,
            'posted_at_diff_for_humans' => $this->posted_at ? $this->posted_at->diffForHumans() : null,
            'published_at_diff_for_humans' => $this->published_at ? $this->published_at->diffForHumans() : null,
            'reviewed_at_diff_for_humans' => $this->reviewed_at ? $this->reviewed_at->diffForHumans() : null,
            'created_at_diff_for_humans' => $this->created_at ? $this->created_at->diffForHumans() : null,
        ];
    }
}
