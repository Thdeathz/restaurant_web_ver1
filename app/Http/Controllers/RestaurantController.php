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
        if($request->file('image') !== null)
        {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $name);
        }else {
            $name = null;
        }
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
        $destination = 'storage/images/' . $each['image'];

        if($request->file('image') !== null)
        {
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $name);
        }else {
            $name = $destination;
        }

        $arr = $request->except(
            '_token',
                '_method',
        );
        $arr['image'] = $name;
        $restaurant->update($arr);

        return redirect()->route('restaurants.index');
    }


    public function destroy(Restaurant $restaurant)
    {
        $each = $restaurant->getAttributes();
        $destination = 'storage/images/' . $each['image'];
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $restaurant->delete();

        return redirect()->back();
    }
}
