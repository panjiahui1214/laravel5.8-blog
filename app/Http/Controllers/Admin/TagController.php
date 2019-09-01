<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index() {
        return view('admin.tag', ['tags' => Tag::all()]);
    }

    public function addView() {
        return view('admin.tag_post');
    }
    public function addPost(Request $request) {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('admin_tag');
    }

    public function editView($id) {
        $tag = Tag::find($id);
        return view('admin.tag_post', ['tag'  => $tag]);
    }
    public function editPost(Request $request, $id) {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route('admin_tag');
    }

    public function delete($id) {
        Tag::destroy($id);
        return redirect()->route('admin_tag');
    }
}
