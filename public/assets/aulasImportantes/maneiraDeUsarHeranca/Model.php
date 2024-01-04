<?php

namespace app\models;

class Model
{
        //como uma classe pai, aqui vão as funções uteis que serviram para User e product
        /*Para definir o que pode e não pode ser uma classe filha, devemos ver se a classe pai tem métodos o sufuciente para ser uma classe pai
          assim como no exemplo e sempre devemos fazer o questinamento 'A classe .....ex:User é um ..... ex:model'*/
        public function all()
        {
            return "Retornando os dados da tabela {$this->table}";
        }
    
        public function findBy()
        {
            
        }
        
        public function delete()
        {
            return "Deletando os dados da tabela {$this->table}";
        }
    
        public function update()
        {
            return "Atualizando os dados da tabela {$this->table}";
        }
}