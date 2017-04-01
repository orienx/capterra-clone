<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Redirect;
use App\Vendor;
use App\User;
use App\Http\Requests\Vendors\StoreVendorRequest;
use App\Http\Requests\Vendors\DeleteVendorRequest;
use App\Http\Requests\Vendors\UpdateVendorRequest;
use App\Http\Requests\Vendors\AddUserToVendorRequest;

class VendorsController extends Controller
{
    public function index()
    {
      $vendors = Vendor::all();

      return view('vendors/index', compact('vendors'));
    }

    public function show($id)
    {
      $vendor = Vendor::findOrFail($id);

      $hasUsers = count($vendor->users);

      return view('vendors/show', compact('vendor', 'hasUsers'));
    }

    public function create()
    {
      return view('vendors/create');
    }

    public function store(StoreVendorRequest $request)
    {
      $vendor = Vendor::create([
        'name' => Input::get('name')
      ]);

      $user = User::whereId($this->user->id)->first();

      $user->vendors()->attach($vendor->id);

      return Redirect::action('VendorsController@show', [
        'id' => $vendor->id
      ]);
    }

    public function destroy(DeleteVendorRequest $request, $id)
    {
      $vendor = Vendor::whereId($id)->first();
      $vendor->delete();

      return Redirect::action('VendorsController@index');
    }

    public function edit($id)
    {
      $vendor = Vendor::whereId($id)->first();

      return view('vendors/edit', compact('vendor'));
    }

    public function update(UpdateVendorRequest $request, $id)
    {
      $vendor = Vendor::whereId($id)->first();

      $vendor->update([
        'name' => Input::get('name')
      ]);

      $vendor->save();

      return Redirect::action('VendorsController@index');
    }

    public function getAddUserToVendor($id)
    {
      $vendor = Vendor::whereId($id)->first();

      $vendorId = $vendor->id;

      $users = User::whereDoesntHave('vendors', function($q) use ($vendorId) {
        $q->where('vendor_id', $vendorId);
      })->get();

      $hasUsers = count($users);

      return view('vendors/adduser', compact('vendor', 'users', 'hasUsers'));
    }

    public function postAddUserToVendor(AddUserToVendorRequest $request, $id)
    {
      $vendor = Vendor::whereId($id)->first();

      $user = User::whereId(Input::get('id'))->first();

      $user->vendors()->syncWithoutDetaching([$vendor->id]);

      return Redirect::action('VendorsController@show', $vendor->id);
    }

    public function removeUserFromVendor($id)
    {
      $vendor = Vendor::whereId($id)->first();

      $user = User::whereId(Input::get('id'))->first();

      $user->vendors()->detach();

      return Redirect::action('VendorsController@show', 24);
    }
}
