<?php

    include_once("/xampp/htdocs/Projeto2025/SimLab/Model/banco.php");
    
    function apagarDiretorio($diretorio) 
    {
    
        $itens = new DirectoryIterator($diretorio);
        foreach ($itens as $item) 
        {
            if ($item->isDot()) continue;
            if ($item->isDir()) 
                apagarDiretorio($item->getPathname());
            else 
                unlink($item->getPathname());
        }
        return rmdir($diretorio);
    }

    $nome = "";
    $pi_v = 0.5894130044000001;
    $c_v1 = 3.1725213443999998;
    $c_v2 = 0.16465561799999998;
    $k_v1 = 4.9705608283697025e-05;
    $k_v2 = 1.36807339724e-06;
    $alpha_ap = 0.0005470648;
    $beta_ap = 0.627620917;
    $k_ap1 = 0.11237786400000001;
    $k_ap2 = 31.5854772;
    $delta_apm = 0.63599397772;
    $alpha_tn = 0.00039682793037999997;
    $c11 = 0.00028303251193;
    $c12 = 1.24899198e-07;
    $c13 = 1.49979067e-08;
    $c14 = 1.1892874839999998;
    $pi_t = 2.8668488e-06;
    $k_te1 = 1.1630939e-08;
    $delta_te = 0.00017118782400000001;
    $alpha_b = 1.27041438;
    $pi_b1 = 6.74389178016e-06;
    $pi_b2 = 1.0168952484e-08;
    $beta_s = 0.00029115733247999997;
    $beta_l = 4.5106591266e-06;
    $beta_bm = 1.39313932e-06;
    $delta_s = 2.22602422;
    $delta_l = 0.0001028287938744;
    $gamma_m = 0.0014926994745;
    $k_bm1 = 7.9803588e-06;
    $k_bm2 = 3443.721775;
    $pi_as = 0.0001457194;
    $pi_al = 9.32716084e-05;
    $delta_a = 0.07479923720000001;

    // Condições iniciais
    $v0 = 726.12;
    $ap0 = 1000000.0;
    $apm0 = 0.0;
    $thn0 = 1000000.0;
    $the0 = 0.0;
    $tkn0 = 500000.0;
    $tke0 = 0.0;
    $b0 = 187500.0;
    $ps0 = 0.0;
    $pl0 = 0.0;
    $bm0 = 0.0;
    $a0 = 106.4;
    $t = 180;

    $sql = $pdo->prepare("SELECT id_usu from usuario WHERE email = ?;");
    $sql->execute([$_SESSION['email']]);
    $id = $sql->fetchColumn();

    $sql = $pdo->prepare("SELECT id_sim,nomesim from simulacao WHERE fk_usuario_id_usu = ? ORDER BY id_sim DESC;");
    $sql->execute([$id]);
    $idsim = $sql->fetchAll();

    $simulacaomenu = [];

    foreach ($idsim as $sim) 
        $simulacaomenu[$sim['id_sim']] = $sim['nomesim'];

    if(isset($_POST['simular']))
    {
        $id_sim = intval($_POST['id_sim']); 

        $stmt = $pdo->prepare("SELECT COUNT(*) FROM simulacao WHERE id_sim = ? AND fk_usuario_id_usu = ?");
        $stmt->execute([$id_sim, $id]);
        $isOwner = $stmt->fetchColumn() > 0;

        if ($isOwner) 
        {
            $simularStmt = $pdo->prepare("SELECT * FROM simulacao WHERE id_sim = ?");
            $simularStmt->execute([$id_sim]);

            $simulacao = $simularStmt->fetch(PDO::FETCH_ASSOC);

            $passarid = $id;
            file_put_contents('id.json', json_encode($passarid));

            $passaridsim = $id_sim;
            file_put_contents('idsim.json', json_encode($passaridsim));

            $passarnome = $simulacao['nomesim'];
            file_put_contents('nome.json', json_encode($passarnome));

            if ($simulacao) 
            {
                $nome = $simulacao['nomesim'];
                $pi_v = $simulacao['pi_v'];
                $c_v1 = $simulacao['c_v1'];
                $c_v2 = $simulacao['c_v2'];
                $k_v1 = $simulacao['k_v1'];
                $k_v2 = $simulacao['k_v2'];
                $alpha_ap = $simulacao['alpha_ap'];
                $beta_ap = $simulacao['beta_ap'];
                $k_ap1 = $simulacao['k_ap1'];
                $k_ap2 = $simulacao['k_ap2'];
                $delta_apm = $simulacao['delta_apm'];
                $alpha_tn = $simulacao['alpha_tn'];
                $c11 = $simulacao['c11'];
                $c12 = $simulacao['c12'];
                $c13 = $simulacao['c13'];
                $c14 = $simulacao['c14'];
                $pi_t = $simulacao['pi_t'];
                $k_te1 = $simulacao['k_te1'];
                $delta_te = $simulacao['delta_te'];
                $alpha_b = $simulacao['alpha_b'];
                $pi_b1 = $simulacao['pi_b1'];
                $pi_b2 = $simulacao['pi_b2'];
                $beta_s = $simulacao['beta_s'];
                $beta_l = $simulacao['beta_l'];
                $beta_bm = $simulacao['beta_bm'];
                $delta_s = $simulacao['delta_s'];
                $delta_l = $simulacao['delta_l'];
                $gamma_m = $simulacao['gamma_m'];
                $k_bm1 = $simulacao['k_bm1'];
                $k_bm2 = $simulacao['k_bm2'];
                $pi_as = $simulacao['pi_as'];
                $pi_al = $simulacao['pi_al'];
                $delta_a = $simulacao['delta_a'];
                $v0 = $simulacao['v0'];
                $ap0 = $simulacao['ap0'];
                $apm0 = $simulacao['apm0'];
                $thn0 = $simulacao['thn0'];
                $the0 = $simulacao['the0'];
                $tkn0 = $simulacao['tkn0'];
                $tke0 = $simulacao['tke0'];
                $b0 = $simulacao['b0'];
                $ps0 = $simulacao['ps0'];
                $pl0 = $simulacao['pl0'];
                $bm0 = $simulacao['bm0'];
                $a0 = $simulacao['a0'];
                $t = $simulacao['tempo'];
            }
        }
    }      
?>