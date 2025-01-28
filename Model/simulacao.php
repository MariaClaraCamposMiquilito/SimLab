<?php
    include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");
    include_once("/xampp/htdocs/Projeto2025/SimLab/Controller/simulacao.php");
    
    $errorsim = false;
    
    if(isset($_POST['simulacao']))
    {
        $simulador = new simulacao($_POST['nome'],  $_POST['pi_v'], $_POST['c_v1'], $_POST['c_v2'], $_POST['k_v1'], $_POST['k_v2'], $_POST['alpha_ap'], 
        $_POST['beta_ap'], $_POST['k_ap1'], $_POST['k_ap2'], $_POST['delta_apm'], $_POST['alpha_tn'], $_POST['c11'], $_POST['c12'], $_POST['c13'], 
        $_POST['c14'], $_POST['pi_t'], $_POST['k_te1'], $_POST['delta_te'], $_POST['alpha_b'], $_POST['pi_b1'], $_POST['pi_b2'], $_POST['beta_s'], 
        $_POST['beta_l'], $_POST['beta_bm'], $_POST['delta_s'], $_POST['delta_l'], $_POST['gamma_m'], $_POST['k_bm1'], $_POST['k_bm2'], $_POST['pi_as'], 
        $_POST['pi_al'], $_POST['delta_a'], $_POST['v0'], $_POST['ap0'], $_POST['apm0'], $_POST['thn0'], $_POST['the0'], $_POST['tkn0'], $_POST['tke0'], 
        $_POST['b0'], $_POST['ps0'], $_POST['pl0'], $_POST['bm0'], $_POST['a0'], $_POST['t']);

        $errorsim = $simulador->getErrorsim();

        if(!$errorsim)
        {
            $sql = $pdo->prepare("SELECT id_usu from usuario WHERE email = ?;");
            $sql->execute([$_SESSION['email']]);
            $id = $sql->fetchColumn();

            $parametros= [$simulador->getPiAS(), $simulador->getC14(), $simulador->getPs0(), $simulador->getPl0(), $simulador->getDeltaL(), $simulador->getPiT(), 
            $simulador->getAlphaAP(), $simulador->getBetaAP(), $simulador->getKBM2(), $simulador->getV0(), $simulador->getBetaBM(), $simulador->getThn0(), 
            $simulador->getDeltaTE(), $simulador->getPiV(), $simulador->getKBM1(), $simulador->getTKE0(), $simulador->getB0(), $simulador->getGammaM(), 
            $simulador->getCV1(), $simulador->getC11(), $simulador->getC12(), $simulador->getTKN0(), $simulador->getC13(), $simulador->getPiB2(), 
            $simulador->getKV1(), $simulador->getAP0(), $simulador->getAPM0(), $simulador->getPiB1(), $simulador->getT(), $simulador->getAlphaB(), 
            $simulador->getDeltaS(), $simulador->getBM0(), $simulador->getCV2(), $simulador->getKV2(), $simulador->getTHE0(), $simulador->getBetaL(), 
            $simulador->getKTE1(), $simulador->getKAP2(), $simulador->getPiAL(), $simulador->getAlphaTN(), $simulador->getKAP1(), $simulador->getDeltaA(), 
            $simulador->getA0(), $simulador->getBetaS(), $id, $simulador->getNome(), $simulador->getDeltaApm()
            ];

            $sql = $pdo->prepare("insert into simulacao value(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
                                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?);");
            $sql->execute($parametros);
    
            $comando = "C:/Users/kauan/AppData/Local/Programs/Python/Python312/python.exe c:/xampp/htdocs/Projeto2025/SimLab/Model/modelo.py 2>&1";

            exec($comando, $output, $status);

            $sql = $pdo->prepare("SELECT MAX(id_sim) from simulacao WHERE fk_usuario_id_usu = ?;");
            $sql->execute([$id]);
            $idsim = $sql->fetchColumn();

            $sql = $pdo->prepare("SELECT nomesim from simulacao WHERE id_sim = ?;");
            $sql->execute([$idsim]);
            $nomesim = $sql->fetchColumn();

            date_default_timezone_set("America/Sao_Paulo");
            $dataAtual = new DateTime();

            $sql = $pdo->prepare("INSERT INTO resultado VALUE (null, ?, ?, ?, ?, ?)");
            $sql->execute([$nomesim, $dataAtual->format("Y-m-d H:i:s"), $nomesim, $idsim, $id]);

            echo '<script>window.location.href = window.location.href;</script>';
            
            
            $passarid =  $id;
            file_put_contents('id.json', json_encode($passarid));

            $passaridsim = $idsim;
            file_put_contents('idsim.json', json_encode($passaridsim));

            $passarnome = $nomesim;
            file_put_contents('nome.json', json_encode($passarnome));
        }
    }
?>