<?php
switch($action)
{
    case'reponse':
        {
          //var_dump($_REQUEST);
            $liste=$_REQUEST['liste'];
            echo $signe[$liste];
                break;
        }
        case 'connexion' :
           {
             $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            if ($connexion[$username]==$password)
            {
              include 'views/choix.php';

            }else {include 'views/connexion.php';}

        

        
            break;
            }
        case 'modifier' : 
          {
            include 'views/admin.php';
            break;

        }

            default:
    {include 'views/connexion.php';}
          }

