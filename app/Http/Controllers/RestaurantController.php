<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('q');

        $data = Restaurant::query()
            ->where('name', 'like', '%' . $search . '%')
            ->paginate(8);
        $data->appends(['q' => $search]);


        return view('restaurants.index', [
            'data' => $data,
            'search' => $search,
        ]);
    }


    public function create()
    {
        return view('restaurants.create');
    }


    public function store(StoreRestaurantRequest $request)
    {
//        if($request->file('image') !== null)
//        {
//            $path = Storage::disk('public')->putFile('images', $request->file('image'));
//        }
//        else {
//            $path = null;
//        }
//        $arr = $request->validated();
//        $arr['image'] = $path;
//
//        Restaurant::create($arr);
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $name);

        $arr = $request->validated();
        $arr['image'] = $name;
        Restaurant::create($arr);
        return redirect()->route('restaurants.index');
    }


    public function show(Restaurant $restaurant)
    {
        //
    }


    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', [
            'each' => $restaurant,
        ]);
    }


    public function update(Request $request, Restaurant $restaurant)
    {
        $each = $restaurant->getAttributes();
        $destination = public_path(). '/' . $each['image'];

        if(File::exists($destination))
        {
            File::delete($destination);
            $path = Storage::disk('public')->putFile('images', $request->file('image'));
        }
        else {
            $path = null;
        }

        $arr = $request->except(
            '_token',
                '_method',
        );
        $arr['image'] = $path;
        $restaurant->update($arr);

        return redirect()->route('restaurants.index');
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index');
    }
}
