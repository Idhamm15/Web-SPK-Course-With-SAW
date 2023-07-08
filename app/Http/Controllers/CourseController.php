<?php

namespace App\Http\Controllers;

use id;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

    public function index() {
        return view('dashboard/course/index', [
            'users' => Course::all(),
            'title' => 'Data Course'
        ]);
    }
    public function add() {
        return view('dashboard/course/add',[
            // 'title' => 'Tambah Data Course'
        ]);
    }
    public function edit($id){

        $course = Course::where('id', $id)->first();

        return view('dashboard/course/edit', [
            'course' => $course,
            'title' => 'Edit Data Course'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_course      = $request->input('nama_course');
        $harga       = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');

        $course = Course::where('id', $id)->first();
        $course->nama_course    = $nama_course;
        $course->harga     = $harga;
        $course->status = $status;
        $course->deskripsi = $deskripsi;

        $course->save();

        return redirect()->to('/course');
    }


    public function dashboard(){
        $course= Course::count();

        return view('dashboard/course/index', compact('course'));

    }

    public function store(Request $request) {
        $nama_course      = $request->input('nama_course');
        $harga       = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');

        $course           = new Course;
        $course->nama_course    = $nama_course;
        $course->harga     = $harga;
        $course->status = $status;
        $course->deskripsi = $deskripsi;

        $course->save();

        return redirect()->to('/course');
    }
    public function delete($id) {
        $course = Course::where('id', $id)->first();
        $course->delete();
        return redirect()->back();
    }
}
