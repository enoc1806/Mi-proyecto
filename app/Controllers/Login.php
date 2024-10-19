<?php
namespace App\Controllers;

class Login extends BaseController
{
    public function new()
    {
        return view('Login/new');
    }

    public function create()
    {
        $email = $this->request->getPost('email');

        $password = $this->request->getPost('password');

        $auth = service("auth");  

        if ($auth->login($email, $password)){

            $redirect_url = session("redirect_url") ?? "http://localhost";

            unset($_SESSION["redirect_url"]);

        return redirect()->to($redirect_url)
                             ->with("info", "Inicio sesion correctamente");
        } else {
             return redirect()->to("http://localhost/login")
                             ->withInput()
                             ->with("warning", "login invalido");
        }     
    }
     public function delete()
    {
        service("auth")->logout();
          

         return redirect()->to("http://localhost/showLogoutMessage");
                       
    }
     public function showLogoutMessage()
    {
        
        return redirect()->to("http://localhost")
                        ->with("info", "sesion cerrada correctamente");
    }
}
