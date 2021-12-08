<?php
/*******************************************
    Objetivo: Arquivo para fazer upload de imagens 
    Data: 03/11/2021
    Autor: Richard
********************************************/


//Função para fazer upload de arquivos 
function uploadFile($arrayFile)
{
  
    $fotoFile = $arrayFile;

    $tamanhoOriginal = (int) 0;
    $tamanhoKB = (int) 0;
    $extensao = (string) null;
    $tipoArquivo = (string) null;
    $nomeArquivo = (string) null;
    $nomeArquivoCript = (string) null;

    $foto = (string) null;
    $arquivoTemp = (string) null;

    //Valida se o arquivo existe no array
    if ($fotoFile['size'] > 0 && $fotoFile['type'] != "" )
    {
        //Recebe o tamanho original do arquivo em byte 
        $tamanhoOriginal = $fotoFile['size'];

        //Converte o tamanho original em KBytes
        $tamanhoKB = $tamanhoOriginal/1024;

        //Recebe o tipo original do arquivo
        $tipoArquivo = $fotoFile['type'];

        //Valida se o tamanho do arquivo é menor do que o permitido 
        if($tamanhoKB <= TAMANHO_FILE)
        {
            //Validação para percorrer o array de extensões permitidas buscando a extensao do arquivo atual, se encontrar retorna true
            if(in_array($tipoArquivo, EXTENSOES_PERMITIDAS))
            {

                //Permite extrair apenas o nome de um arquivo sem a extensão 
                $nomeArquivo = pathinfo($fotoFile['name'], PATHINFO_FILENAME);
                //Permite extrair apenas a extensão de um arquivo sem o nome  
                $extensao = pathinfo($fotoFile['name'], PATHINFO_EXTENSION);

               /*
                    Algoritimos de Criptografia no PHP
                    hash('sha256', 'variavel')
                    sha1('variavel')
                    md5('variavel')
               */ 

            //uniqid() = gera uma sequencia numerica com base nas configurações de hardware na maquina
            //time() = pega a hora:minuto:segunto atual
            $nomeArquivoCript = md5($nomeArquivo.uniqid(time()));
            //Monta o novo nome do arquivo com a extensão 
            $foto = $nomeArquivoCript.".".$extensao;

            //Recebe o nome do arquivo temporario que foi gerado quando o apache recebeu o arquivo do form 
            $arquivoTemp = $fotoFile['tmp_name'];

            // echo(SRC.NOME_DIRETORIO_FILE.$foto);
            // die;

            //move_iploaded_file = move o arquivo da pasta temporaria do apache para a pasta do servidor que foi criada 
            if(move_uploaded_file($arquivoTemp, SRC.NOME_DIRETORIO_FILE.$foto))
                return $foto;

            else
                echo('Erro no upload do arquivo');

            }else 
             echo('Erro tipo de arquivo');
        }else 
        echo('Erro Tamanho do arquivo');
    }
}


?>