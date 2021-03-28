<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reader;

class PublicController extends Controller
{
  public function index() {
    $readers = Reader::all();//Preparo una variabile dove vado a mettere tutti i lettori registrati nelle righe del mio database 'readers', creato in MySQL ATTRAVERSO phpMyAdmin, ottenendo un array
    return view('readers.public.index', compact('readers')); //Gli ritorno una view che ho chiamato index.blade interna alla cartella public del folder delle views "readers" a cui passo l'array salvato nella variabile $readers.
  }

  public function show(Reader $reader) {

    return view('readers.public.show', compact('reader')); //Gli ritorno una view che ho chiamato show.blade interna alla cartella public del folder delle views "readers" a cui passo l'univoco lettore associato al suo id.
  }
}
