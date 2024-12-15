<?php

namespace App\Repositories\repository;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface {
    public function getAllCustomers() {
        return Customer::all();
    }

    public function getCustomerById($id) {
        return Customer::findOrFail($id);
    }

    public function createCustomer(array $data) {
        return Customer::create($data);
    }

    public function updateCustomer($id, array $data) {
        $customer = Customer::findOrFail($id);
        $customer->update($data);
        return $customer;
    }

    public function deleteCustomer($id) {
        Customer::destroy($id);
    }
}