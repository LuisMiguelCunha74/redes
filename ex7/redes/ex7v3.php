<?php
    $diasemana = 5;
    switch ($diasemana){
            case 1:
                print('domingo');
                break;
            case 2:
                print ('segunda-feira');
                break;
            case 3:
                print ('terça-feira');
                break;
            case 4:
                print ('quarta-feira');
                break;
            case 5:
                print ('quinta-feira');
                break;
            case 6:
                print ('sexta-feira');
                break;
            case 7:
                print ('sabado');
                break;
            default:
            echo 'erro ao avaliar o dia da semana';
    }