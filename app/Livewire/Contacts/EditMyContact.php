<?php

namespace App\Livewire\Contacts;

use App\Livewire\Forms\ContactForm;
use App\Models\Soul;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]

class EditMyContact extends Component
{
    public ContactForm $contactForm;
    public $contactId;
    public function mount($contactId)
    {
        $contact = Soul::findOrFail($contactId);
        $this->contactForm->setContact($contact);
    }
    public function update()
    {
        $this->contactForm->update();
        $this->redirect('/my_contact');
    }
    public function render()
    {
        return view('livewire.contacts.edit-my-contact');
    }
}
