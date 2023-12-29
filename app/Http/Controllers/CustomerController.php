<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
 public function index(Request $request) {

    $customers = Customer::paginate(10);

        $company = $request->input('company');
        $name = $request->input('name');
        $address = $request->input('address');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $remarks = $request->input('remarks');
        $user = Auth::user();

        $query = Customer::query();

        if (!empty($company)) {
            $query = $query->where('company', 'like', '%' . $company . '%');
        }

        if (!empty($name)) {
            $query = $query->where('name', 'like', '%' . $name . '%');
        }

        if (!empty($address)) {
            $query = $query->where('address', 'like', '%' . $address . '%');
        }

        if (!empty($email)) {
            $query = $query->where('email', 'like', '%' . $email . '%');
        }

        if (!empty($phone)) {
            $query = $query->orwhere('telephone', 'like', '%' . $phone . '%')
                           ->orwhere('cellphone', 'like', '%' . $phone . '%');
        }

        if (!empty($remarks)) {
            $query = $query->orwhere('company', 'like', '%' . $remarks . '%')
                            ->orwhere('name', 'like', '%' . $remarks . '%')
                            ->orwhere('address', 'like', '%' . $remarks . '%')
                            ->orwhere('cellphone', 'like', '%' . $remarks . '%')
                            ->orwhere('telephone', 'like', '%' . $remarks . '%')
                            ->orwhere('remarks', 'like', '%' . $remarks . '%');
        }

        $customers = $query->paginate(10);

        $allcustomers = [
            'customers' => $customers,
            'company' => $company,
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'remarks' => $remarks
        ];

        return view('customer.index')->with($allcustomers);
 }

public function showcreate() {

    $users = new User;

    $users = $users->get();

    return view('customer.create', compact('users'));

}

public function executecreate(CustomerRequest $request) {

    $validated = $request->validated();

        $customers = new Customer;

        $customer = $customers->createCustomer($validated);

        if ($customer === false) {
            return redirect('sales-system/customer/create')->withInput();
        }
        return redirect('sales-system/customer');

}

public function edit($id)
{   
    $customer = Customer::find($id);

    return view('customer.edit', compact('customer'));
}
}
