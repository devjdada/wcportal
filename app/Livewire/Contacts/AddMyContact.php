<?php

namespace App\Livewire\Contacts;

use App\Livewire\Forms\ContactForm;
use App\Models\Soul;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

// #[Layout('layouts.admin')]
class AddMyContact extends Component
{


    public ContactForm $contactForm;
    public $contactId;

    public function save()
    {
        // $this->validate();
        $this->contactForm->store();

        $this->contactForm->reset();

        session()->flash('status', 'Post successfully updated.');

        //return $this->redirect('/my_contact');
    }


    public function render()
    {

        return view('livewire.contacts.add-my-contact');
    }
}
