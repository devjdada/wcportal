<?php

namespace App\Http\Controllers;

use App\Models\Soul;
use Illuminate\Http\Request;
use App\Http\Resources\Soul as SoulResources;

use App\Models\Assigned;
use App\Models\SoulReport;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SoulController extends Controller
{

    use Traits\TextMessageTraits;
    use Traits\ShareCodeTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $soul = Soul::get()->SortByDesc('id');
        return SoulResources::collection($soul);
    }


    public function find_soul_phone($phone)
    {
        $soul = Soul::where('phone', $phone);

        $soul = $soul->get();
        $n = count($soul);
        $response = '';



        if ($n == 0) {
            $response = [
                "id" => 0,
                "soul_winner" => 0,
                "surname" => "",
                "firstname" => "",
                "location" => "",
                "phone" => "",
                "marital" => "",
                "gender" => "",
                "ocupation" => "",
                "address" => "",
                "email" => "",
                "bus_stop" => "",
                "born_again" => 0,
                "born_again_on" => "",
                "prayer_point" => "",
                "type" => "",
                "fc" => 0,
                "wb" => 0,
                "exblish" => 0,
                "created_at" => "",
                "updated_at" => ""
            ];
            json_encode($response);
        } else {
            $response =  $soul[0];
        }

        return $response;
    }

    public function view_my_contact()
    {
        $soul = Soul::where('soul_winner', Auth::user()->id);
        $souls = $soul->orderBy('id', 'desc')->get();
        // return response()->json($soul);
        //$souls = SoulResources::collection($soul);
        return view('ad.my_contact')->with("souls", $souls);
    }

    public function viewMyContactDetail(Request $request)
    {
        $soul = Soul::findOrfail($request->id);
        $users = User::all();
        $soul_winner = User::where("id", $soul->soul_winner)->get();
        $followUp = Assigned::where("contact_id", $soul->id)->get();
        $report = SoulReport::where("soul_id", $soul->id)->get();

        return view('ad.my_contact_details')->with("users", $users)->with("soul", $soul)->with("soul_winner", $soul_winner)->with("followUp", $followUp)->with("report", $report);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');


        $name = explode(' ', $name);
        if (count($name) > 1) {
            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
            $n = $name[1];
        } else {
            $request['firstname'] = $request->input('name');
            $request['surname'] = "";
        }
        if ($soul = Soul::create($request->all())) {
            $this->sendTextContent($this->phoneCode($request->phone));
            return response($soul, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soul  $soul
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $soul = Soul::findOrfail($id);
        return  new SoulResources($soul);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soul  $soul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $name = $request->input('name');
        $name = explode(' ', trim($name));
        if (count($name) == 0) {
            $request['firstname'] = $request->input('name');
        } else {

            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
        }



        $soul = Soul::find($id);
        $soul->update($request->all());

        return response()->json($soul);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soul  $soul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soul = Soul::findOrfail($id);
        if ($soul->delete()) {
            return new SoulResources($soul);
        }
    }

    public function my_soul($id)
    {
        $soul = Soul::where('soul_winner', $id);
        $soul = $soul->orderBy('id', 'desc')->get();
        // return response()->json($soul);
        return SoulResources::collection($soul);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_web(Request $request)
    {
        $request['station_id'] = Auth::user()->station_id;
        if ($request->input('winner') == 'me') {
            $request['soul_winner'] = Auth::user()->id;
        } else {
            $request['soul_winner'] = 1;
        }
        $name = $request->name;
        $name = explode(' ', $name);

        if (count($name) > 1) {
            $request['firstname'] = $name[1];
            $request['surname'] = $name[0];
            $n = $name[1];
        } else {
            $request['firstname'] = $request->name;
            $n = $request->name;
        }
        $check = Soul::wherePhone($request->phone)->first();
        // return Auth::user()->id;
        if ($check) {
            $checkAssign = Assigned::whereAssigned_to(Auth::user()->id)->whereContact_id($check->id)->first();
            if ($checkAssign) {
                return "checkAssign" . $checkAssign;
            } else {
                if ($check->soul_winner != Auth::user()->id) {

                    $assign = new Assigned();
                    $assign->assigned_to = Auth::user()->id;
                    $assign->contact_id = $check->id;
                    return back()
                        ->with('success', 'This phone number is already a contact in our system it has be assigned to you for follow up');
                } else {
                    return back()
                        ->with('error', 'This phone is already in your contact list');
                }
            }
        } else {

            if ($soul = Soul::create($request->all())) {

                $msg =   $this->sendTextContent($this->phoneCode($request->phone));
                return back()
                    ->with('success', 'Your Contact has been created successfully' . $msg);
            }
        }
    }
}
