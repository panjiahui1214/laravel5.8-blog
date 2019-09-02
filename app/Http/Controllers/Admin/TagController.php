<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    private $route_tag = 'admin.tag';

    public function index() {
        return view('admin.tag', ['tags' => Tag::paginate(7)]);
    }

    public function addView() {
        return view('admin.tag_post');
    }
    public function addPost(Request $request) {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route($this->route_tag);
    }

    public function editView($id) {
        $tag = Tag::find($id);
        return view('admin.tag_post', ['tag'  => $tag]);
    }
    public function editPost(Request $request, $id) {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();

        return redirect()->route($this->route_tag);
    }

    public function delete($id) {
        Tag::destroy($id);
        return redirect()->route($this->route_tag);
    }
}
