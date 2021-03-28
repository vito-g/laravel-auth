<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reader;

class ReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('public-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('readers.private.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([//Sottopongo i dati provenienti dal form a validazione (la funzione è da usare pure per l'update. quindi potrei metterla esternamente alla store e richiamarla nei var methods all'occorrenza. l'IMPORTANTE E' CHE RESTI NEL CRUD.)
      'name'=> 'required|max:30',
      'lastname'=> 'required',
      'birth_date'=> 'required',
      ]);

      $data = $request->all();//Preparo una variabile dove vado a mettere, sfruttando il metodo all(), tutti le coppie chiave-valore, appunto, dei campi compilati del form
      $reader = new Reader();//Creazione oggetto di Classe Reader
      $reader->fill($data); //Cerca di creare una mappatura dei parametri della form e di quelli del Model e fa un'assegnazione di massa per tutti gli attributi dell'oggetto del mio Database qualora ci sia corrispondenza di parametri. Per utilizzare questa istruzione ho inserito una var protected, fillable, nel Model.
      $reader->save();
      $readerStored = Reader::orderBy('id', 'desc')->first();//Prende l'ultimo oggetto di Classe Reader storato (quello con l'id più grande)
      return redirect()->route('public-show', $readerStored);//Fa la redirect verso l'ultimo storato. Sto inviando, a mezzo rotta public-show,  allo show() methods l'oggetto 'reader' che è $readerStored.
    }

    /**
     * Display the specified resource.
     *
     * @param  Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function show(Reader $reader)
    {
        return redirect()->route('public-show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function edit(Reader $reader)
    {
        return view('readers.private.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reader $reader)
    {
      //Anche qui andrebbe la validazione
      // dd($reader);
      $data = $request->all();
      //validation
      $reader ->update($data);
      //mostriamo il lettore aggiornato:
      return redirect()->route('public-index', compact('reader'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
