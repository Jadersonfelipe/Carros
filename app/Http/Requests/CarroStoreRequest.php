<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CarroStoreRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {

        // <!-- 'modelo', 'placa', 'cor', 'marcas_id' -->
        return [
            'modelo' => ['required', 'min:2', 'max:50'],
            'placa' => ['required', 'unique:carro,placa,'.$this->route('id')],
            'cor' => ['required'],
            'marca_id' => ['required'],
        ];
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute é obrigatório!',
        ];
    }
}