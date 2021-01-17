<?php

namespace App\Http\Controllers;

use App\Attribution;
use App\Client;
use App\Http\Resources\AttributionsResource;
use App\Http\Resources\OrdinateursResource;
use App\Ordinateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdinateursController extends Controller
{
    public function getOrdinateurs(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'date' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $ordinateursAttributions = Ordinateur::with(['attributions' => function ($query) use ($validator) {
            $query->where('date', '=', $validator['date'])->with(['client']);
        }])->paginate(3);

        return OrdinateursResource::collection($ordinateursAttributions);
    }

    public function addOrdinateur(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $ordinateur = new Ordinateur;
        $ordinateur->name = $validator['name'];
        $ordinateur->save();

        return new OrdinateursResource($ordinateur);
    }

    public function getAttributions($id)
    {
        $attributions = Attribution::where('id_ordinateur', '=', $id)->get();
        return AttributionsResource::collection($attributions);
    }

    public function addAttribution(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id_client' => 'required',
                'id_ordinateur' => 'required',
                'horaire' => 'required',
                'date' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $client = Client::where('name', '=', $validator['id_client'])->first();
        $ordinateur = Ordinateur::where('id', '=', $validator['id_ordinateur'])->first();

        $attribution = new Attribution;
        $attribution->horaire = $validator['horaire'];
        $attribution->date = $validator['date'];
        $attribution->client()->associate($client);
        $attribution->ordinateur()->associate($ordinateur);
        $attribution->save();
        return new AttributionsResource($attribution);

    }

    public function deleteOrdinateur($id)
    {
        $ordinateur = Ordinateur::where('id', $id)->delete();
        return $ordinateur;
    }
    function deleteAttribution($id)
    {
        $attribution = Attribution::where('id', $id)->delete();
        return ['status' => $attribution];
    }

}
