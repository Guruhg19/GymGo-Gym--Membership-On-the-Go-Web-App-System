<?php
namespace App\Services;

use App\Repositories\Contracts\CityRepositoryInterface;
use App\Repositories\Contracts\GymRepositoryInterface;
use App\Repositories\Contracts\SubscribePackageRepositoryInterface;

class FrontService
{
    protected $gymRepository;
    protected $cityRepository;
    protected $subscribePackageRepository;

    public function __construct(CityRepositoryInterface $cityRepository, GymRepositoryInterface $gymRepository, SubscribePackageRepositoryInterface $subscribePackageRepository)
    {
        $this->gymRepository = $gymRepository;
        $this->cityRepository = $cityRepository;
        $this->subscribePackageRepository = $subscribePackageRepository;
    }

    public function getFrontPageData()
    {
        $cities = $this->cityRepository->getAllCities();
        $popularGym = $this->gymRepository->getPopularGyms(6);
        $newGym = $this->gymRepository->getAllNewGyms();
        return compact('cities', 'popularGym', 'newGym');
    }

    public function getSubscriptionsData(){
        $subscribePackage = $this->subscribePackageRepository->getAllSubscribePackages();
        return compact('subscribePackage');
    }


}