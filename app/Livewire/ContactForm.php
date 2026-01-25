<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ];

    public function submit()
    {
        $this->validate();

        $path = 'contacts.csv';

        if (!Storage::exists($path)) {
            Storage::put($path, "日時,名前,メールアドレス,内容\n");
        }

        $line = sprintf(
            "\"%s\",\"%s\",\"%s\",\"%s\"\n",
            now(),
            str_replace('"', '""', $this->name),
            str_replace('"', '""', $this->email),
            str_replace('"', '""', $this->message)
        );

        Storage::append($path, $line);

        // フォームリセット
        $this->reset(['name', 'email', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact-form')
            ->layout('components.layouts.app', [
                'title' => 'お問い合わせ',
                'description' => '計算ラボへのお問い合わせページ',
                'hideTopAd' => true,
                'hideBottomAd' => true,
            ]);
    }

}
