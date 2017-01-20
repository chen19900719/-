<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $addresses = Address::where('customer_id', $request->customer_id)->get();
        foreach ($addresses as &$address) {
            $tel = substr_replace($address->tel, '*****', 3, 4);
            $address['tel'] = $tel;
        }
        return $addresses;
    }

    public function store(Request $request)
    {
        //return 123;
        //return $request->all();
        //return $request->detail;
        $address = new Address();
        $address->customer_id = $request->customer_id;
        $address->name = $request->name;
        $address->province = $request->province;
        $address->city = $request->city;
        $address->area = $request->area;
        $address->tel = $request->tel;
        $address->detail = $request->detail;
        //return 123;
        $address->save();
    }

    public function edit($id)
    {
        $address = Address::find($id);
        return ['address' => $address];
    }

    public function update(Request $request, $id)
    {
        $pca = explode(" ", $request->pca);
        Address::where('id', $id)
            ->update([
                'name' => $request->name,
                'province' => $pca[0],
                'city' => $pca[1],
                'area' => $pca[2],
                'tel' => $request->tel,
                'detail' => $request->detail,
            ]);
    }

    public function manage(Request $request)
    {
        $addresses = Address::where('customer_id', $request->customer_id)->get();
        return ['addresses' => $addresses];
    }

    //设置用户的默认地址
    public function default_address(Request $request)
    {
        Customer::where('id', $request->customer_id)
            ->update(['address_id' => $request->address_id]);
    }

    function destroy($id)
    {
        Address::destroy($id);
    }


}
