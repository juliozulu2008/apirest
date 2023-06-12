<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome_completo' => 'required|string|min:7|max:255',
            'data_nascimento'=> 'required|date',
            'tipo_pessoa'=> 'required',
            'cpf_ou_cnpj'=> 'required|[regex:/(^\d{3}\.\d{3}\.\d{3}\-\d{2}$)|(^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$)/]',
            'e-mail'=> 'required|email:rfc,dns',
            'endereco' => 'required|max:255',
            'localizacao' => 'required'
        ];
    }

    public function messages() {
        return [
            'nome_completo.required' => 'O Campo nome Completo é Obrigatorio',
            'nome_completo.string' => 'O campo nome completo precisa ser um Texto',
            'nome_completo.min' => 'O campo nome completo precisa ter no minimo 7 caracteres',
            'nome_completo.max' => 'O campo nome Completo precisa ter no maximo 255 caracteres',
            'data_nascimento.required' => 'O campo data de nascimento é obrigatório',
            'data_nascimento.date' => 'O campo data de nascimento precisa ser uma data',
            'tipo_pessoa.required' => 'O campo tipo pessoa é obrigatório',
            'cpf_ou_cnpj.required' => 'O campo cpf ou cnpj é obrigatório',
            'cpf_ou_cnpj.regex' => 'O campo cpf ou cnpj precisa ser um cpf ou cnpj válido',
            'e-mail.required' => 'O campo e-mail é obrigatório',
            'e-mail.email' => 'O campo e-mail precisa ser um e-mail válido',
            'endereco.required' => 'O campo endereço é obrigatório',
            'endereco.max' => 'O campo endereço precisa ter no maximo 255 caracteres',
            'localizacao.required' => 'O campo localização é obrigatório'

        ];
    }
}
