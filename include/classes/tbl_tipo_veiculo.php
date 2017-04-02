<?php
    namespace Tabela {
        
        class TipoVeiculo extends \DB\DatabaseUtils {
            public static $nome_tabela = "tbl_tipoveiculo";
            public static $primary_key = "id";
            public $id;
            public $titulo;
            
            public function getTipos($registros_por_pagina = null, $pagina_atual = null, $where = null) {
                $sql = "SELECT id, titulo ";
                $sql .= "FROM {$this::$nome_tabela} ";
                
                if( !empty($where) ) {
                    $sql .= " WHERE " . $where;
                }
                
                if( !empty($registros_por_pagina) && !empty($pagina_atual) ) {
                    $registros_a_ignorar = $registros_por_pagina * ( $pagina_atual - 1 );
                    
                    $sql .= " LIMIT " . $registros_por_pagina . " ";
                    $sql .= "OFFSET " . $registros_a_ignorar;
                }                                
                
                $resultado = $this->executarQuery( $sql );
                $resultado = $this->get_array_from_resultado( $resultado );
                
                $total_veiculos = $this->executarQuery("SELECT COUNT(*) AS total FROM {$this::$nome_tabela}");
                
                $info_paginacao = [];
                $info_paginacao["totalRegistros"] = (int) mysqli_fetch_array( $total_veiculos )[0];
                $info_paginacao["paginaAtual"] = (int) $pagina_atual;
                $info_paginacao["registrosPorPagina"] = (int) $registros_por_pagina;
                
                $resultado[] = $info_paginacao;
                
                return $resultado;
            }
        }
    }
?>