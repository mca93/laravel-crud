<?php

use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Documentos petty cash (Agencias)
           $this->petty_cash_docs();
        // Documentos empresa nacional
           $this->empresa_nacional_docs(); 
        //Documentos empresa em nome individual
            $this->empresa_em_nome_individual_docs();
        //Documentos empresa estrangeira
            $this->empresa_estrangeira_docs();
        //Documentos instituicoes de estado
            $this->insttuicoes_do_estado_docs();
        //Documentos assoiacoes
            $this->associacoes_docs();
        //Documentos  Atm-agencias
            $this->atm_agencias_docs();
    }


    private function petty_cash_docs(){
        DB::table('petty_cash_docs')->insert([
            'designacao' =>'Dados Bancários da Agencia',
            'grau_de_obrigatoriedade' =>1
            ]);
    }

    private function empresa_nacional_docs(){
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Cópia de Alvará ou Licença da firma',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Certidão de registo da firma',
            'grau_de_obrigatoriedade' =>1
            ]); 
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Publicação no Boletim da República',
            'grau_de_obrigatoriedade' =>1

            ]);          
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Certidão de quitação das Finanças',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Certidão de quitação do INSS',
            'grau_de_obrigatoriedade' =>1

            ]); 
        DB::table('empresa_nacional_docs')->insert([
            'designacao' =>'Documento de Atribuição de NUIT ou Copia do Cartão do NUIT',
            'grau_de_obrigatoriedade' =>1

            ]);      
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Amostra do Modelo de Factura e Recibo anulado',
                'grau_de_obrigatoriedade' =>1

                ]);
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores',
                'grau_de_obrigatoriedade' =>1

                ]); 
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco',
                'grau_de_obrigatoriedade' =>1

                ]);          
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Declaração de Existencia de Plano de Contingencia na Empresa',
                'grau_de_obrigatoriedade' =>0
                ]);
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Codico de Conduta',
                'grau_de_obrigatoriedade' =>1

                ]); 
            DB::table('empresa_nacional_docs')->insert([
                'designacao' =>'Declaração de Confidencialidade',
                'grau_de_obrigatoriedade' =>1

                ]);                             
    }

    private function empresa_em_nome_individual_docs(){
        DB::table('empresa_em_nome_individual_docs')->insert([
            'designacao' =>'Cópia de Alvará ou Licença da firma',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('empresa_em_nome_individual_docs')->insert([
            'designacao' =>'Certidão de registo da firma',
            'grau_de_obrigatoriedade' =>1
            ]); 
        DB::table('empresa_em_nome_individual_docs')->insert([
            'designacao' =>'Publicação no Boletim da República',
            'grau_de_obrigatoriedade' =>0

            ]);  
        DB::table('empresa_em_nome_individual_docs')->insert([
            'designacao' =>'Documento de Atribuição de NUIT ou Copia do Cartão do NUIT',
            'grau_de_obrigatoriedade' =>1

            ]);      
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Amostra do Modelo de Factura e Recibo anulado',
                'grau_de_obrigatoriedade' =>1

                ]);
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores',
                'grau_de_obrigatoriedade' =>1

                ]); 
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco',
                'grau_de_obrigatoriedade' =>1

                ]);          
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Identificação do Gestor ou Proprietario (BI)',
                'grau_de_obrigatoriedade' =>1
                ]);
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Codico de Conduta',
                'grau_de_obrigatoriedade' =>1

                ]); 
            DB::table('empresa_em_nome_individual_docs')->insert([
                'designacao' =>'Declaração de Confidencialidade',
                'grau_de_obrigatoriedade' =>1

                ]);                         
    }


    private function empresa_estrangeira_docs(){
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>'Business Registration Certificate',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>'Value Added Tax (VAT) Registration Certificate',
            'grau_de_obrigatoriedade' =>1
            ]); 
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>' Current Income Tax Clearance Certificate',
            'grau_de_obrigatoriedade' =>1

            ]);          
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>'List of Business References with contact persons and numbers for which similar projects have been carried out',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>' Letter of good standing – Labour',
            'grau_de_obrigatoriedade' =>1

            ]); 
        DB::table('empresa_estrangeira_docs')->insert([
            'designacao' =>' Declaration of interest',
            'grau_de_obrigatoriedade' =>1

            ]);      
            DB::table('empresa_estrangeira_docs')->insert([
                'designacao' =>'Contigence Plan',
                'grau_de_obrigatoriedade' =>0

                ]);
            DB::table('empresa_estrangeira_docs')->insert([
                'designacao' =>'Code of Conduct',
                'grau_de_obrigatoriedade' =>1

                ]); 
            DB::table('empresa_estrangeira_docs')->insert([
                'designacao' =>'Banks Detalis confirmed by your Bank',
                'grau_de_obrigatoriedade' =>1

                ]);          
            DB::table('empresa_estrangeira_docs')->insert([
                'designacao' =>'Declaration of confidentiality',
                'grau_de_obrigatoriedade' =>1
                ]);
                                             
    }

    
    private function atm_agencias_docs(){
        DB::table('atm_agencias_docs')->insert([
            'designacao' =>'Contrato de Aluguer',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('atm_agencias_docs')->insert([
            'designacao' =>'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato',
            'grau_de_obrigatoriedade' =>1
            ]);                      
    }

    
    private function associacoes_docs(){
        DB::table('associacoes_docs')->insert([
            'designacao' =>'Publicação no Boletim da República',
            'grau_de_obrigatoriedade' =>1

            ]);
        DB::table('associacoes_docs')->insert([
            'designacao' =>'Amostra do Modelo de Factura e Recibo anulado',
            'grau_de_obrigatoriedade' =>1
    
            ]);
        DB::table('associacoes_docs')->insert([
            'designacao' =>'Documento de Atribuicao de NUIT ou Copia do Cartao do NUIT',
            'grau_de_obrigatoriedade' =>1
            ]);
        DB::table('associacoes_docs')->insert([
            'designacao' =>'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores',
            'grau_de_obrigatoriedade' =>1
            ]);
        DB::table('associacoes_docs')->insert([
            'designacao' =>'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato',
            'grau_de_obrigatoriedade' =>1
            ]);                      
    }

    private function insttuicoes_do_estado_docs(){
        
        DB::table('instituicos_do_estado_docs')->insert([
            'designacao' =>'Documento de Atribuicao de NUIT ou Copia do Cartao do NUIT',
            'grau_de_obrigatoriedade' =>1
            ]);
      
        DB::table('instituicos_do_estado_docs')->insert([
            'designacao' =>'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato',
            'grau_de_obrigatoriedade' =>1
            ]);                      
    }
}
