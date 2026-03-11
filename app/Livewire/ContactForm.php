<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $contactMessage = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'contactMessage' => ['required', 'string', 'max:2000'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Informe seu nome.',
            'name.max' => 'Nome muito longo (máx. 100 caracteres).',
            'email.required' => 'Informe seu email.',
            'email.email' => 'Email inválido.',
            'contactMessage.required' => 'Escreva uma mensagem.',
            'contactMessage.max' => 'Mensagem muito longa (máx. 2000 caracteres).',
        ];
    }

    public function submit(): void
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'contactMessage' => $this->contactMessage,
        ];

        Mail::to(config('mail.to'))
            ->send(new ContactMail($data));

        $this->reset(['name', 'email', 'contactMessage']);

        $this->dispatch('contact-sent');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
