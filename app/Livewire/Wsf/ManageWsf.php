<?php

namespace App\Livewire\Wsf;

use App\Livewire\Forms\DistrictForm;
use App\Livewire\Forms\HomecellForm;
use App\Livewire\Forms\ProvinceForm;
use App\Models\District;
use App\Models\Homecell;
use App\Models\Province;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class ManageWsf extends Component
{
    use WithPagination;
    public ProvinceForm $provinceForm;
    public DistrictForm $districtForm;
    public HomecellForm $homecellForm;
    public $provinceModal = false;
    public $districtModal = false;
    public $homecellModal = false;
    public $district_id = "";
    public $province_id = "";
    public $homecell_id = "";

    public  $districts = [];
    public  $homecells = [];

    public $editMode = false;
    public function saveProvince()
    {
        if ($this->editMode) {
            $this->provinceForm->update();
            $this->provinceForm->reset();
            $this->resetPage();
            $this->editMode = false;
        } else {
            // $this->validate();
            $this->provinceForm->store();

            $this->provinceForm->reset();

            session()->flash('status', 'Post successfully updated.');
            $this->resetPage();
        }
        //return $this->redirect('/my_contact');
    }
    public function saveDistrict()
    {
        if ($this->editMode) {
            $this->districtForm->update();
            $this->districtForm->title = '';
            $this->districtForm->address = '';
            $this->districtForm->phone = '';
            $this->districtForm->about = '';
            $this->resetPage();
            $this->editMode = false;
        } else {
            // $this->validate();
            $this->districtForm->store();

            $this->districtForm->title = '';
            $this->districtForm->address = '';
            $this->districtForm->phone = '';
            $this->districtForm->about = '';

            session()->flash('status', 'Post successfully updated.');
            $this->districts = District::where('province_id', $this->districtForm->province_id)->get();
        }
        //return $this->redirect('/my_contact');
    }
    public function saveHomecell()
    {
        if ($this->editMode) {
            $this->homecellForm->update();
            $this->homecellForm->reset();
            $this->resetPage();
            $this->editMode = false;
        } else {
            // $this->validate();
            $this->homecellForm->store();

            $this->homecellForm->title = '';
            $this->homecellForm->address = '';
            $this->homecellForm->phone = '';
            $this->homecellForm->about = '';

            session()->flash('status', 'Post successfully updated.');
            $this->homecells = Homecell::where('district_id', $this->homecellForm->district_id)->get();
        }
        //return $this->redirect('/my_contact');
    }


    public function delProvince(Province $province)
    {
        $province->delete();
        $this->resetPage();
    }
    public function delDistrict(District $district)
    {
        $district->delete();
        $this->resetPage();
    }
    public function delHomcell(Homecell $homecell)
    {
        $homecell->delete();
        $this->resetPage();
    }

    public function updateProvince()
    {
        $this->provinceForm->update();
        $this->resetPage();
    }
    public function updateDistrict()
    {
        $this->districtForm->update();
        $this->resetPage();
    }
    public function updateHomecell()
    {
        $this->homecellForm->update();
        $this->resetPage();
    }
    public function editProvince(Province $province)
    {
        $this->editMode = true;
        $this->provinceForm->setContact($province);
        $this->provinceModal = true;
    }
    public function editDistrict(District $district)
    {
        $this->editMode = true;
        $this->districtForm->setContact($district);
        $this->districtModal = true;
    }
    public function editHomecell(Homecell $homecell)
    {
        $this->editMode = true;
        $this->homecellForm->setContact($homecell);
        $this->homecellModal = true;
    }
    public function openAddProvinceModal()
    {
        $this->provinceModal = true;
    }
    public function openAddDistrictModal(Province $province)
    {
        $this->province_id = $province->id;
        $this->districtForm->province_id = $province->id;
        $this->districtModal = true;
        $this->viewDistrict($province);
    }
    public function openAddHomecellModal(District $district)
    {
        $this->district_id = $district->id;
        $this->homecellForm->district_id = $district->id;
        $this->homecellForm->province_id = $district->province_id;
        $this->homecellModal = true;
        $this->viewHomecell($district);
    }
    public function viewDistrict(Province $province)
    {
        $this->districts = District::where('province_id', $province->id)->get();
    }
    public function viewHomecell(District $district)
    {
        $this->homecells = Homecell::where('district_id', $district->id)->get();
    }
    public function render()
    {
        $provinces = Province::where('station_id', auth()->user()->station_id)->get();
        return view('livewire.wsf.manage-wsf', [
            'provinces' => $provinces
        ]);
    }
}
