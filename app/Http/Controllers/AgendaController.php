<?php

namespace CodeAgenda\Http\Controllers;


class AgendaController extends Controller
{
    /**
     * List of resource
     * @return Response
     */
    public function index()
    {
        return view('layout');
    }
}