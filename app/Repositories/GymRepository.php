<?php
namespace App\Repositories;

use App\Models\Gym;
use App\Repositories\Contracts\GymRepositoryInterface;

class GymRepository implements GymRepositoryInterface
{
    public function getPopularGyms($limit)
    {
        return Gym::where('is_popular', true)->take($limit)->get();
    }

    public function getAllNewGyms()
    {
        return Gym::latest()->get();
    }

    public function find($id)
    {
        return Gym::find($id);
    }

    public function getPrice($gymId)
    {
        $gym = $this->find($gymId);
        return $gym ? $gym->price : 0;
    }
}