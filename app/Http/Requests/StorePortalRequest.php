<?php

namespace App\Http\Requests;

use App\Models\Portal;
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
            ]
        ];
    }
}
