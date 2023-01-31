<?php

namespace App\Http\Requests;

use App\Helpers\BaseHelper;
use App\Models\City;
use App\Models\District;
use App\Models\Portal;
use App\Models\Ward;
use Illuminate\Foundation\Http\FormRequest;

class StorePortalRequest extends FormRequest
{
    protected $model;
    public function __construct(Portal $model)
    {
        $this->model = $model;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $data = $this->all();
        return [
            'name' => [
                'required',
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 50){
                        return $fail('Tên cơ sở tối đa 50 kí tự!');
                    }
                    $checkName = $this->model->where('name', 'like', $value)->first();
                    if($checkName){
                        return $fail('Tên cơ sở đã tồn tại!');
                    }
                }
            ],
            'code' => [
                'required',
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 15){
                        return $fail('Mã tối đa 15 kí tự!');
                    }
                    $checkCode = $this->model->where('code', 'like', $value)->first();
                    if($checkCode){
                        return $fail('Mã đã tồn tại!');
                    }
                }
            ],
            'tax_code' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 15){
                        return $fail('Mã số thuế tối đa 15 kí tự!');
                    }
                    // $checkCode = $this->model->where('code', 'like', $value)->first();
                    // if($checkCode){
                    //     return $fail('Mã đã tồn tại!');
                    // }
                }
            ],
            'city_id' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(!is_numeric($value)){
                        return $fail('Không tồn tại id Tỉnh/Thành phố.');
                    }
                    $city = City::find($value);
                    if(!$city){
                        return $fail('Không tồn tại id Tỉnh/Thành phố.');
                    }
                }
            ],
            'district_id' => [
                function($attribute, $value, $fail) use($data){
                    if($value === null || !isset($data['city_id'])){
                        return;
                    }
                    if(!is_numeric($value)){
                        return $fail('Không tồn tại id Quận/Huyện.');
                    }
                    $district = District::find($value);
                    if(!$district){
                        return $fail('Không tồn tại id Quận/Huyện.');
                    }
                    if($district['city_id'] != $data['city_id']){
                        return $fail('Id Quận/Huyện không thuộc Tỉnh/Thành phố.');
                    }
                }
            ],
            'ward_id' => [
                function($attribute, $value, $fail) use($data){
                    if($value === null || !isset($data['district_id'])){
                        return;
                    }
                    if(!is_numeric($value)){
                        return $fail('Không tồn tại id Phừờng/Xã.');
                    }
                    $ward = Ward::find($value);
                    if(!$ward){
                        return $fail('Không tồn tại id Phừờng/Xã.');
                    }
                    if($ward['city_id'] != $data['city_id']){
                        return $fail('Id Phừờng/Xã không thuộc Quận/Huyện.');
                    }
                }
            ],
            'address' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 150){
                        return $fail('Địa chỉ tối đa 150 kí tự!');
                    }
                }
            ],
            'hotline' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 12){
                        return $fail('Số điện thoại tối đa 12 kí tự!');
                    }
                }
            ],
            'website' => [
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(strlen($value) > 50){
                        return $fail('Link website tối đa 50 kí tự!');
                    }
                }
            ],
            'start_time' => [
                'required',
                function($attribute, $value, $fail){
                    if($value === null){
                        return;
                    }
                    if(BaseHelper::validationDateTime($value, 'H:i') === false){
                        return $fail('Thời gian không đúng định dạng.');
                    }
                }
            ]
        ];
    }
}
