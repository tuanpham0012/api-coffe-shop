<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\WardResource;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $countryModel;
    protected $cityModel;
    protected $districtModel;
    protected $wardModel;
    public function __construct(
        Country $countryModel, 
        City $cityModel,
        District $districtModel,
        Ward $wardModel
        )
    {
        $this->countryModel = $countryModel;
        $this->cityModel = $cityModel;
        $this->districtModel = $districtModel;
        $this->wardModel = $wardModel;
    }

    public function getCountries()
    {
        $countries = $this->countryModel->get();
        return CountryResource::collection($countries);
    }

    public function getCities($country_id)
    {
        $cities = $this->cityModel->where('country_id', $country_id)->get();
        return DistrictResource::collection($cities);
    }

    public function getDistricts($city_id)
    {
        $districts = $this->districtModel->where('city_id', $city_id)->get();
        return DistrictResource::collection($districts);
    }

    public function getWards($district_id)
    {
        $wards = $this->wardModel->where('district_id', $district_id)->get();
        return WardResource::collection($wards);
    }
}
