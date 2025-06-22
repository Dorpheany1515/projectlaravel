<?php

namespace App\Http\Controllers\Backendcontroller;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function addLogo()
    {
        return view('backend.addlogo');
    }
    public function addLogoSubmit(Request $request)
    {
    

    $btn = $request->input('btn');

    if ($btn == 'Add Logo') {
        // Validate image file
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = date('ymdhis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $logoUrl = url('images/' . $filename);

            // Check if the logo already exists
            $exists = logo::where('logo', $logoUrl)->exists();
            if ($exists) {
                return redirect('/admin/add-logo')->with('error', 'Logo already exists!');
            }

            // Insert logo
            $insert = logo::create([
                'logo' => $logoUrl,
            ]);

            if ($insert) {
                return redirect('/admin/add-logo')->with('message', 'Add logo Success!');
            } else {
                return redirect('/admin/add-logo')->with('error', 'Add logo failed!');
            }
        } else {
            return redirect('/admin/add-logo')->with('error', 'Logo file is required!');
        }

    } else {
        // Update section
        $request->validate([
            'id' => 'required|exists:logo,id',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $id = $request->input('id');

        // Process new file upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = date('ymdhis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $logoUrl = url('images/' . $filename);
        } else {
            $logoUrl = $request->input('old_image'); // must be full URL from hidden input
        }

        // Update logo record
        $update = logo::where('id', $id)->update([
            'logo' => $logoUrl,
        ]);

        if ($update) {
            return redirect('/admin/list-logo')->with('message', 'Update logo Success!');
        } else {
            return redirect('/admin/list-logo')->with('error', 'Update failed!');
        }
    }
}

    public function listlogo()
{
    $logos=logo::query()
                ->orderBy('id','DESC')
                ->get();
        return view('backend.listlogo',compact('logos'));
}
 public function editLogo(Logo $logo){
        $logos=logo::query()

                ->where('id',$logo->id)
                ->first();
        return view('backend.addlogo',compact('logos'));
    }
    public function deleteLogo(Request $request){
        $input=$request->all();
        $delete=logo::query()->where('id',$input['remove-id'])->delete();
        if($delete){
            return redirect('/admin/list-logo')->with('message','Delete Category Success!');
        }
    
    }
}
