<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Cliente;

?>

<!-- ******** -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>

    <!-- <link rel="stylesheet" href="{{url('css/style.css')}}"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            background-color:hsl(0, 0%, 2%) ;
        }
        header{
            background-color: orange;
            padding-top: 15px;
        }
        h1{
            font-weight: 600;
            font-family: Verdana;
            color:white;
            margin-left: 500px;
        }
        nav{
            background-color: black;
            height: 50px;
        }
        a{
            color: rgb(197, 92, 11);
        }
        a a:hover{
            color:white;
                
        }
        .tab{
            width: 40%;
            height: 80%;
            padding: 10px;
            align-items: center;
            justify-content: center;
            margin-left: 30%;
            border-radius: 10px;

        }
        table{
            width: 100%;
            margin-top: 150px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1 >Movie Thirller</h1>
    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link" href="/" >Home</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#">Adms</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="/x">Consultas</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="/x">Sair</a> <!-- mudaR depois -->
    </nav>
    </header>

<!-- HEADER AQUI ^^^ -->


<?php

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "teste index";

    echo '
        <div class="tab">
        <table class="table table-hover table-dark" 
        
        >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>

                </tr>
            </thead>
            <tbody>';


            $cliente = Cliente::all();

            foreach($cliente as $c){

               
                echo' <tr>';
                echo "<th scope='row'>$c->idCliente</th>";
                    echo "<td>$c->nomeCliente</td>";
                    echo "<td>$c->UserCliente</td>";
                    echo "<td>$c->emailCliente</td>";
                    echo "<td>$c->senhaCliente</td>";
                echo' </tr>';
                    
                   
            }
            echo'
                    </tbody>
                </table>
            </div>';

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// include('Includes.footer');
echo "</body>";
echo "</hmtl>";
