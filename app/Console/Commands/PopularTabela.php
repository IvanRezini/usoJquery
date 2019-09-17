<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PopularTabela extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $arrayCategoria [] = 'Eletronicos';
        $arrayCategoria [] = 'Linha Branca';
        $arrayCategoria [] = 'Cama e messa';
        $arrayCategoria [] = 'Ferramentas';
        $arrayCategoria [] = 'Laticinios';
        $arrayCategoria [] = 'Horte Frute';
        $arrayCategoria [] = 'Frios';
        for ($i = 0; $i < 7; $i ++) {
            $categoria = new \App\Categoria();
            $categoria->nomcat = $arrayCategoria [$i];
            $categoria->save();
        }
        $arrayNome [] = 'João dos Reis';
        $arrayNome [] = 'Maria das Graças';
        $arrayNome [] = 'Juliano Manuel da Silva';
        $arrayNome [] = 'Zulmira de Souza';
        $arrayNome [] = 'Renata Telma';
        $arrayNome [] = 'Franciele Dias';
        $arrayNome [] = 'José de Almeida';

        $arrayTelefone [] = '9996541235';
        $arrayTelefone [] = '8855412315';
        $arrayTelefone [] = '9634587219';
        $arrayTelefone [] = '9763258964';
        $arrayTelefone [] = '8865412365';
        $arrayTelefone [] = '9993654235';
        $arrayTelefone [] = '8415411254';

        $arrayCidade [] = 'Brusque';
        $arrayCidade [] = 'Botuvera';
        $arrayCidade [] = 'Curitiba';
        $arrayCidade [] = 'Brusque';
        $arrayCidade [] = 'Guabiruba';
        $arrayCidade [] = 'Ponta Grossa';
        $arrayCidade [] = 'Brusque';

        $arrayCpf [] = '45412541365';
        $arrayCpf [] = '78623587415';
        $arrayCpf [] = '96385247845';
        $arrayCpf [] = '75821458978';
        $arrayCpf [] = '96325896374';
        $arrayCpf [] = '74125874125';
        $arrayCpf [] = '52369852147';

        $arrayEnd [] = 'Bairro lageado';
        $arrayEnd [] = 'Rua sem saida';
        $arrayEnd [] = 'Lagoa azul';
        $arrayEnd [] = 'Trez Eme';
        $arrayEnd [] = 'Final de tudo';
        $arrayEnd [] = 'Lugar Nem um';
        $arrayEnd [] = 'Lagoas bar';

        $arrayNum [] = 10;
        $arrayNum [] = 444;
        $arrayNum [] = 85;
        $arrayNum [] = 136;
        $arrayNum [] = 150;
        $arrayNum [] = 222;
        $arrayNum [] = 987;

        $arrayBai [] = 'Pedras Grande';
        $arrayBai [] = 'Vargem Pequena';
        $arrayBai [] = 'Nova Venessa';
        $arrayBai [] = 'Teles Pires';
        $arrayBai [] = 'Trinta reis';
        $arrayBai [] = 'Pedras Grande';
        $arrayBai [] = 'Centro 2';

        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';
        $arrayUF [] = 'Brasil';

        for ($i = 0; $i < 7; $i ++) {
            $cliente = new \App\Cliente();
            $cliente->nomcli = $arrayNome [$i];
            $cliente->cpfcli = $arrayCpf [$i];
            $cliente->endcli = $arrayEnd [$i];
            $cliente->numcli = $arrayNum [$i];
            $cliente->baicli = $arrayBai [$i];
            $cliente->ufcli = $arrayUF [$i];
            $cliente->telcli = $arrayTelefone [$i];
            $cliente->cidcli = $arrayCidade [$i];
            $cliente->save();
        }

        $arraynomeProduto [] = 'batatas';
        $arraynomeProduto [] = 'Telemovel';
        $arraynomeProduto [] = 'Bananas';
        $arraynomeProduto [] = 'Geladeira';
        $arraynomeProduto [] = 'frigideira';
        $arraynomeProduto [] = 'maça';
        $arraynomeProduto [] = 'copos';
        $arrayDesc [] = 'Comida';
        $arrayDesc [] = 'Eletronico';
        $arrayDesc [] = 'Comida';
        $arrayDesc [] = 'Gela';
        $arrayDesc [] = 'Frita';
        $arrayDesc [] = 'Comida';
        $arrayDesc [] = 'Beber';
        $arrayValor [] = 5.21;
        $arrayValor [] = 855.21;
        $arrayValor [] = 12.53;
        $arrayValor [] = 1236.02;
        $arrayValor [] = 57.00;
        $arrayValor [] = 2.33;
        $arrayValor [] = 10.25;
        $arrayForen [] = 1;
        $arrayForen [] = 3;
        $arrayForen [] = 2;
        $arrayForen [] = 5;
        $arrayForen [] = 4;
        $arrayForen [] = 3;
        $arrayForen [] = 6;
        
         for ($i = 0; $i < 7; $i ++) {
           $produto = new \App\Produto();
           $produto->nompro = $arraynomeProduto [$i];
           $produto->despro = $arrayDesc [$i];
           $produto->vlrpro = $arrayValor [$i];
           $produto->codcat = $arrayForen [$i];
           $produto->save();
         }
    }

}

