<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;  //aca esta request, significa solicitud.
use Illuminate\Support\Facades\Auth;   //siempre poner esto
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){          //Vamos a realizar una validacion
        
        
        $data=request()->validate([    //es validate

            'name'=>'required',   //es required
            'password'=>'required'      //no va COOOOOOMA
        
        ],
        [
            'name.required'=>'Ingrese Usuario',
            'password.required'=>'Ingrese Contraseña',

        ]);

        if(Auth::attempt($data)){  //   Vamos a tener diferentes paginas

            $con='OK';
        }

        $name=$request->get('name');
        $query=User::where('name','=',$name)->get();
        if($query->count() !=0){    //count significa que no es igual a 0 , cuenta, encontro al usuario

            $hashp=$query[0]->password;
            $password=$request->get('password');
            $role_id=$request->get('role_id');

            if (password_verify($password,$hashp)) {   //si son iguales
               if(Auth::user()->role_id=='1'){
                return redirect('/admin');
               }
               elseif(Auth::user()->role_id=='2'){
                return redirect('/profesor2');
               }
               elseif(Auth::user()->role_id=='3'){
                return redirect('/alumno2');
               }
               else                
               return route('logout') ;
                

            }else{
                return back()->withErrors(['password'=>'Contraseña no válida '])->withInput([request('password')]);
            }

        }else{

            return back()->withErrors(['name'=>'Usuario no válido'])->withInput([request('usuario')]);

        }
    }
    public function create()
    {
        return view('cuenta');
    }
    public function RegistrarUser()
    {
        return view('cuenta');
    }
    public function integrantes()
    {
        return view('integrantes');
    }

    public function store(Request $request)
    {   
        $data=request()->validate([
            'name'=>'required|max:30',
            'email'=>'required',
            'role_id'=>'required',
            'password'=>'required|max:30'
        ],[
            'name.required'=>'Ingrese un nombre de usuario',
            'name.max'=>'maximo de 30 caracteres para nombre',
            'password.required'=>'Ingrese una contraseña  ',
            'password.max'=>'maximo de 30 caracteres para contraseña',
        ]);


        if(Auth::attempt($data))
        {
          $con='OK'  ;
        }
        
        $codigo=$request->get('codigo');
      
        //if($query->count() !=0)
        //{
            $users= new User();
            $users->name=$request->name;
            $users->email=$request->email;
            $users->password=Hash::make($request->password) ;
            $users->role_id=$request->role_id;
            $users->save();
           // return view('index');
           return redirect()->route('RegistrarUser')->with('datos','Registro Guardado Correctamente...!');
       // }
      //  else{//RegistrarUser
       //     return redirect()->route('RegistrarUser')->with('datos','Registro Erroneo...!');
            //return back()->withErrors(['codigo'=>'Codigo de Docente no Valido'])->withImput([request('codigo')]);
       // }

       
       //return redirect()->route('RegistrarUser');
    }

}


   




