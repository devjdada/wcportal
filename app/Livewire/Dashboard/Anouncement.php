<?php

namespace App\Livewire\Dashboard;

use App\Models\Anouncement as ModelsAnouncement;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Form;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;

class Anouncement extends Component
{

    public AnounForm $anForm;
    public ?ModelsAnouncement $anouncement;

    use WithFileUploads;
    public $image;
    public $fileDoc;
    public $anImageFileUploadDialog = false;


    public function openImageFileUploadDialog()
    {
        $this->anImageFileUploadDialog = true;
    }


    public function downloadFile($file)
    {
        // // dd($file['fileDoc']);

        // $fileContent = Storage::get($file['fileDoc']);

        // // Create a response to download the file
        // return Response::make($fileContent, 200, [
        //     'Content-Type' => Storage::mimeType($file['fileDoc']),
        //     'Content-Disposition' => 'attachment; filename="' . basename($file['fileDoc']) . '"',
        // ]);
        // $partToRemove = "http://wcportal.test/static/";

        // $updatedUrl = str_replace($partToRemove, '', $file['fileDoc']);
        // // dd($updatedUrl);
        // $file =  Storage::get($file['fileDoc']);
        // dd($file['fileDoc']);
        $fileUrl = $file['fileDoc'];
        $response = Http::get($fileUrl);

        // Check if the request was successful
        if ($response->successful()) {

            // Extract the file name from the URL
            $fileName = basename($fileUrl);

            // Create a response to download the file
            return Response::make($response->body(), 200, [
                'Content-Type' => $response->header('Content-Type'),
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ]);
        }

        // Return an error response if the file could not be downloaded
        return redirect()->back()->with('error', 'File could not be downloaded.');
    }

    public function checkOrientation()
    {
        if ($this->image) {

            $imagePath = $this->image->getRealPath();
            $image = Image::read($imagePath);

            $width = $image->width();
            $height = $image->height();

            if ($width > $height) {
                $this->anForm->orientation = 'L';
            } elseif ($width < $height) {
                $this->anForm->orientation = 'P';
            } else {
                $this->anForm->orientation = 'S';
            }
            $image = Storage::disk('goro')->put('anouncement', $this->image);
            $this->anForm->image = url('static/' . $image);
        }
        if ($this->fileDoc) {
            $fileSize = $this->fileDoc->getSize();
            $fileSizeMB = number_format($fileSize / 1024 / 1024, 2);
            $this->anForm->fileType = $fileSizeMB . 'MB ,' . $this->fileDoc->extension();
            $file = Storage::disk('goro')->put('files', $this->fileDoc);
            $this->anForm->fileDoc = url('static/' . $file);
        }

        $this->anImageFileUploadDialog = false;
    }

    public function save()
    {
        $this->anForm->store();
    }
    public function delete(ModelsAnouncement $anouncement)
    {
        $anouncement->delete();
        $this->resetPage();
    }
    public function render()
    {
        $anouncements = ModelsAnouncement::where('station_id', auth()->user()->station_id)
            ->where('status', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.dashboard.anouncement', [
            'ans' => $anouncements,
        ]);
    }
}


class AnounForm extends Form
{
    public ?ModelsAnouncement $anouncements;
    #[Validate('required')]
    public $text;
    public $title;
    public $fileDoc;
    public $fileType;
    public $fileName;
    public $image;
    public $orientation;
    public $station_id;
    public $user_id;

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->user_id = auth()->user()->id;
        $this->validate();

        ModelsAnouncement::create($this->all());
        $this->reset(['text', 'title', 'fileDoc', 'fileType', 'fileName', 'image']);
    }

    public function update()
    {
        $this->validate();
        $this->anouncements->update($this->all());
        $this->reset(['surname', 'title', 'firstname', 'phone', 'prayer_point', 'location']);
    }
}
