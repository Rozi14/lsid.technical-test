<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
	public function index()
	{
		$todolist = todolist::get();

		return view('todolist.index', ['data' => $todolist]);
	}

	public function tambah()
	{
		return view('todolist.form');
	}

	public function simpan(Request $request)
	{
		$data = [
			'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
			'status' => $request->status,
		];

		todolist::create($data);

		return redirect()->route('todolist');
	}

	public function edit($id)
	{
		$todolist = todolist::find($id);

		return view('todolist.form', ['todolist' => $todolist, 'id' => $id]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
			'status' => $request->status,
		];

		todolist::find($id)->update($data);

		return redirect()->route('todolist');
	}

	public function hapus($id)
	{
		todolist::find($id)->delete();

		return redirect()->route('todolist');
	}
}
