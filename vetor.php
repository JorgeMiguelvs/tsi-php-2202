<?php 
//vetores 
/*


$diaSemana = [ 0=> 'domingo' , 1=>'segunda', 2=>'terça' , 3=>'quarta' , 4=>'quinta' , 5=>'sexta' , 6=>'sábado'];

echo "<pre>";

var_dump($diaSemana);

$hoje = date("w");

echo "Hoje é {$diaSemana[$hoje]}";



$aluno = ['matricula' =>84686, 'aluno' =>'Jorge','semestre'=>2];

echo "<pre>";

var_dump($aluno);

*/

$aluno = [  0 => [  'matricula' => 634545, 

                    'nome' => 'João',

                    'semestre' => 2],

            1 => [  'matricula' => 8548, 

                    'nome' => 'Paulo',

                    'semestre' => 3],

            2 => [  'matricula' => 65422, 

                    'nome' => 'Maria',

                    'semestre' => 1],

            3=>[ 'matricula' => 87365,
                'nome' => 'Jorge',
                'semestre' => 5],

                4 =>[ 'matricula' => 87365,
                'nome' => 'Jorge',
                'semestre' => 5]];


                   echo '<table border ="1">
                   <tr>
                    <td>Matricula</td>
                    <td>Nome</td>
                    <td>Semestre</td>
                   </tr>';

                   
                   $matricula = $aluno[1];
 
                    for ($i = 0; $i < count($aluno); $i++)
                    {
                       echo "<tr>
                        <td>{$aluno [$i]['matricula']}</td>
                        <td>{$aluno [$i]['nome']}</td>
                        <td>{$aluno [$i]['semestre']}</td>
                        
                        </tr>";

                        
                    }

                    echo '</table>';

                    




