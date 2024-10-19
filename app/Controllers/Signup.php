<?php
namespace App\Controllers;

class Signup extends BaseController
{
    public function new()
    {
        if (session()->has('user_id')) {
            return redirect()->to("http://localhost");
        }
        return view("Signup/new");
    }

    public function create()
    {
        $user = new \App\Entities\User($this->request->getPost());
        $model = new \App\Models\UserModel;

        if ($model->insert($user)) {
            return redirect()->to("http://localhost/signup/success");
        } else {
            return redirect()->to('http://localhost/signup/new')
                             ->with('errors', $model->errors())
                             ->with('warning', 'Datos inválidos')
                             ->withInput();
        }
    }

    public function success()
    {
        return view('Signup/success');
    }
}
