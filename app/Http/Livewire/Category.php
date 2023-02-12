<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Categorymodel;
use Livewire\WithFileUploads;
class Category extends Component
{
    use WithFileUploads;
    public $show_table = true;
    public $categories;
    //atributes
    public $name ="", $description="" , $logo ;
     //show table of categories 0 , add category 1



    public function render()
    {
        $this->categories = Categorymodel::all();
        return view('livewire.category');
    }
    public function addCategoy(){
        $this->show_table = false;
    }
    public function showTable()
    {
        $this->reset();
        $this->show_table = true;
    }
    public function submit()
    {

        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required',
        ]);

        Categorymodel::create([
            "name" => $this->name,
            "description" => $this->description,
            "logo" => $this->logo->getClientOriginalName(),

        ]);
        $this->logo->storeAs("categories/logos",$this->logo->getClientOriginalName(),"upload_categories_logos");

        return $this->showTable();
    }



}
