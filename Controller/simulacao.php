<?php
    class simulacao
    {
        private $nome;
        private $pi_v;
        private $c_v1;
        private $c_v2;
        private $k_v1;
        private $k_v2;
        private $alpha_Ap;
        private $beta_Ap;
        private $k_ap1;
        private $k_ap2;
        private $delta_Apm;
        private $alpha_Tn;
        private $c11;
        private $c12;
        private $c13;
        private $c14;
        private $pi_T;
        private $k_te1;
        private $delta_te;
        private $alpha_B;
        private $pi_B1;
        private $pi_B2;
        private $beta_S;
        private $beta_L;
        private $beta_Bm;
        private $delta_S;
        private $delta_L;
        private $gamma_M;
        private $k_bm1;
        private $k_bm2;
        private $pi_AS;
        private $pi_AL;
        private $delta_A;
    
        // Condições iniciais
        private $V0;
        private $Ap0;
        private $Apm0;
        private $Thn0;
        private $The0;
        private $Tkn0;
        private $Tke0;
        private $B0;
        private $Ps0;
        private $Pl0;
        private $Bm0;
        private $A0;
        private $t;

        // error
        private $errorsim = false;

        public function __construct(
            $nome,$pi_v, $c_v1, $c_v2, $k_v1, $k_v2, $alpha_Ap, $beta_Ap, $k_ap1, $k_ap2, $delta_Apm,
            $alpha_Tn, $c11, $c12, $c13, $c14, $pi_T, $k_te1, $delta_te, $alpha_B, $pi_B1,
            $pi_B2, $beta_S, $beta_L, $beta_Bm, $delta_S, $delta_L, $gamma_M, $k_bm1, $k_bm2,
            $pi_AS, $pi_AL, $delta_A, $V0, $Ap0, $Apm0, $Thn0, $The0, $Tkn0, $Tke0, $B0,
            $Ps0, $Pl0, $Bm0, $A0, $t
        ) {
            $this->setNome($nome);
            $this->setPiV($pi_v);
            $this->setCV1($c_v1);
            $this->setCV2($c_v2);
            $this->setKV1($k_v1);
            $this->setKV2($k_v2);
            $this->setAlphaAp($alpha_Ap);
            $this->setBetaAp($beta_Ap);
            $this->setKAp1($k_ap1);
            $this->setKAp2($k_ap2);
            $this->setDeltaApm($delta_Apm);
            $this->setAlphaTn($alpha_Tn);
            $this->setC11($c11);
            $this->setC12($c12);
            $this->setC13($c13);
            $this->setC14($c14);
            $this->setPiT($pi_T);
            $this->setKTe1($k_te1);
            $this->setDeltaTe($delta_te);
            $this->setAlphaB($alpha_B);
            $this->setPiB1($pi_B1);
            $this->setPiB2($pi_B2);
            $this->setBetaS($beta_S);
            $this->setBetaL($beta_L);
            $this->setBetaBm($beta_Bm);
            $this->setDeltaS($delta_S);
            $this->setDeltaL($delta_L);
            $this->setGammaM($gamma_M);
            $this->setKBm1($k_bm1);
            $this->setKBm2($k_bm2);
            $this->setPiAS($pi_AS);
            $this->setPiAL($pi_AL);
            $this->setDeltaA($delta_A);
            $this->setV0($V0);
            $this->setAp0($Ap0);
            $this->setApm0($Apm0);
            $this->setThn0($Thn0);
            $this->setThe0($The0);
            $this->setTkn0($Tkn0);
            $this->setTke0($Tke0);
            $this->setB0($B0);
            $this->setPs0($Ps0);
            $this->setPl0($Pl0);
            $this->setBm0($Bm0);
            $this->setA0($A0);
            $this->setT($t);

        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            if(strlen($nome)>=0)
                $this->nome = $nome;
            else 
                $this->errorsim = true;

        }

        public function getPiV()
        {
            return $this->pi_v;
        }

        public function setPiV($pi_v)
        {
            if($pi_v >= 0)
                $this->pi_v = $pi_v;
            else
                $this->errorsim = true;
        }

        public function getCV1()
        {
            return $this->c_v1;
        }

        public function setCV1($c_v1)
        {
           if($c_v1 >= 0)
                $this->c_v1 = $c_v1;
            else
                $this->errorsim = true;
        }

        public function getCV2()
        {
            return $this->c_v2;
        }

        public function setCV2($c_v2)
        {
            if($c_v2 >= 0)
                $this->c_v2 = $c_v2;
            else
                $this->errorsim = true;
        }

        public function getKV1()
        {
            return $this->k_v1;
        }

        public function setKV1($k_v1)
        {
            if($k_v1 >= 0)
                $this->k_v1 = $k_v1;
            else
                $this->errorsim = true;
        }

        public function getKV2()
        {
            return $this->k_v2;
        }

        public function setKV2($k_v2)
        {
            if($k_v2 >= 0)
                $this->k_v2 = $k_v2;
            else
                $this->errorsim = true;
        }

        public function getAlphaAp()
        {
            return $this->alpha_Ap;
        }

        public function setAlphaAp($alpha_Ap)
        {
            if($alpha_Ap >= 0)
                $this->alpha_Ap = $alpha_Ap;
            else
                $this->errorsim = true;
        }

        public function getBetaAp()
        {
            return $this->beta_Ap;
        }

        public function setBetaAp($beta_Ap)
        {
            if($beta_Ap >= 0)
                $this->beta_Ap = $beta_Ap;
            else
                $this->errorsim = true;
        }

        public function getKAp1()
        {
            return $this->k_ap1;
        }

        public function setKAp1($k_ap1)
        {
            if($k_ap1 >= 0)
                $this->k_ap1 = $k_ap1;
            else
                $this->errorsim = true;
        }

        public function getKAp2()
        {
            return $this->k_ap2;
        }

        public function setKAp2($k_ap2)
        {
            if($k_ap2 >= 0)
                $this->k_ap2 = $k_ap2;
            else
                $this->errorsim = true;
        }

        public function getDeltaApm()
        {
            return $this->delta_Apm;
        }

        public function setDeltaApm($delta_Apm)
        {
            if($delta_Apm >= 0)
                $this->delta_Apm = $delta_Apm;
            else
                $this->errorsim = true;
        }

        public function getAlphaTn()
        {
            return $this->alpha_Tn;
        }

        public function setAlphaTn($alpha_Tn)
        {
            if($alpha_Tn >= 0)
                $this->alpha_Tn = $alpha_Tn;
            else
                $this->errorsim = true;
        }

        public function getC11()
        {
            return $this->c11;
        }

        public function setC11($c11)
        {
            if($c11 >= 0)
                $this->c11 = $c11;
            else
                $this->errorsim = true;
        }

        public function getC12()
        {
            return $this->c12;
        }

        public function setC12($c12)
        {
            if($c12 >= 0)
                $this->c12 = $c12;
            else
                $this->errorsim = true;
        }

        public function getC13()
        {
            return $this->c13;
        }

        public function setC13($c13)
        {
            if($c13 >= 0)
                $this->c13 = $c13;
            else
                $this->errorsim = true;
        }

        public function getC14()
        {
            return $this->c14;
        }

        public function setC14($c14)
        {
            if($c14 >= 0)
                $this->c14 = $c14;
            else
                $this->errorsim = true;
        }

        public function getPiT()
        {
            return $this->pi_T;
        }

        public function setPiT($pi_T)
        {
            if($pi_T >= 0)
                $this->pi_T = $pi_T;
            else
                $this->errorsim = true;
        }

        public function getKTe1()
        {
            return $this->k_te1;
        }

        public function setKTe1($k_te1)
        {
            if($k_te1 >= 0)
                $this->k_te1 = $k_te1;
            else
                $this->errorsim = true;
        }

        public function getDeltaTe()
        {
            return $this->delta_te;
        }

        public function setDeltaTe($delta_te)
        {
            if($delta_te >= 0)
                $this->delta_te = $delta_te;
            else
                $this->errorsim = true;
        }

        public function getAlphaB()
        {
            return $this->alpha_B;
        }

        public function setAlphaB($alpha_B)
        {
            if($alpha_B >= 0)
                $this->alpha_B = $alpha_B;
            else
                $this->errorsim = true;
        }

        public function getPiB1()
        {
            return $this->pi_B1;
        }

        public function setPiB1($pi_B1)
        {
            if($pi_B1 >= 0)
                $this->pi_B1 = $pi_B1;
            else
                $this->errorsim = true;
        }

        public function getPiB2()
        {
            return $this->pi_B2;
        }

        public function setPiB2($pi_B2)
        {
            if($pi_B2 >= 0)
                $this->pi_B2 = $pi_B2;
            else
                $this->errorsim = true;
        }

        public function getBetaS()
        {
            return $this->beta_S;
        }

        public function setBetaS($beta_S)
        {
            if($beta_S >= 0)
                $this->beta_S = $beta_S;
            else
                $this->errorsim = true;
        }

        public function getBetaL()
        {
            return $this->beta_L;
        }

        public function setBetaL($beta_L)
        {
            if($beta_L >= 0)
                $this->beta_L = $beta_L;
            else
                $this->errorsim = true;
        }

        public function getBetaBm()
        {
            return $this->beta_Bm;
        }

        public function setBetaBm($beta_Bm)
        {
            if($beta_Bm >= 0)
                $this->beta_Bm = $beta_Bm;
            else
                $this->errorsim = true;
        }

        public function getDeltaS()
        {
            return $this->delta_S;
        }

        public function setDeltaS($delta_S)
        {
            if($delta_S >= 0)
                $this->delta_S = $delta_S;
            else
                $this->errorsim = true;
        }

        public function getDeltaL()
        {
            return $this->delta_L;
        }

        public function setDeltaL($delta_L)
        {
            if($delta_L >= 0)
                $this->delta_L = $delta_L;
            else
                $this->errorsim = true;
        }

        public function getGammaM()
        {
            return $this->gamma_M;
        }

        public function setGammaM($gamma_M)
        {
            if($gamma_M >= 0)
                $this->gamma_M = $gamma_M;
            else
                $this->errorsim = true;
        }

        public function getKBm1()
        {
            return $this->k_bm1;
        }

        public function setKBm1($k_bm1)
        {
            if($k_bm1 >= 0)
                $this->k_bm1 = $k_bm1;
            else
                $this->errorsim = true;
        }

        public function getKBm2()
        {
            return $this->k_bm2;
        }

        public function setKBm2($k_bm2)
        {
            if($k_bm2 >= 0)
                $this->k_bm2 = $k_bm2;
            else
                $this->errorsim = true;
        }

        public function getPiAS()
        {
            return $this->pi_AS;
        }

        public function setPiAS($pi_AS)
        {
            if($pi_AS >= 0)
                $this->pi_AS = $pi_AS;
            else
                $this->errorsim = true;
        }

        public function getPiAL()
        {
            return $this->pi_AL;
        }

        public function setPiAL($pi_AL)
        {
            if($pi_AL >= 0)
                $this->pi_AL = $pi_AL;
            else
                $this->errorsim = true;
        }

        public function getDeltaA()
        {
            return $this->delta_A;
        }

        public function setDeltaA($delta_A)
        {
            if($delta_A >= 0)
                $this->delta_A = $delta_A;
            else
                $this->errorsim = true;
        }

        public function getV0()
        {
            return $this->V0;
        }

        public function setV0($V0)
        {
            if($V0 >= 0)
                $this->V0 = $V0;
            else
                $this->errorsim = true;
        }

        public function getAp0()
        {
            return $this->Ap0;
        }

        public function setAp0($Ap0)
        {
            if($Ap0 >= 0)
                $this->Ap0 = $Ap0;
            else
                $this->errorsim = true;
        }

        public function getApm0()
        {
            return $this->Apm0;
        }

        public function setApm0($Apm0)
        {
            if($Apm0 >= 0)
                $this->Apm0 = $Apm0;
            else
                $this->errorsim = true;
        }

        public function getThn0()
        {
            return $this->Thn0;
        }

        public function setThn0($Thn0)
        {
            if($Thn0 >= 0)
                $this->Thn0 = $Thn0;
            else
                $this->errorsim = true;
        }

        public function getThe0()
        {
            return $this->The0;
        }

        public function setThe0($The0)
        {
            if($The0 >= 0)
                $this->The0 = $The0;
            else
                $this->errorsim = true;
        }

        public function getTkn0()
        {
            return $this->Tkn0;
        }

        public function setTkn0($Tkn0)
        {
            if($Tkn0 >= 0)
                $this->Tkn0 = $Tkn0;
            else
                $this->errorsim = true;
        }

        public function getTke0()
        {
            return $this->Tke0;
        }

        public function setTke0($Tke0)
        {
            if($Tke0 >= 0)
                $this->Tke0 = $Tke0;
            else
                $this->errorsim = true;
        }

        public function getB0()
        {
            return $this->B0;
        }

        public function setB0($B0)
        {
            if($B0 >= 0)
                $this->B0 = $B0;
            else
                $this->errorsim = true;
        }

        public function getPs0()
        {
            return $this->Ps0;
        }

        public function setPs0($Ps0)
        {
            if($Ps0 >= 0)
                $this->Ps0 = $Ps0;
            else
                $this->errorsim = true;
        }

        public function getPl0()
        {
            return $this->Pl0;
        }

        public function setPl0($Pl0)
        {
            if($Pl0 >= 0)
                $this->Pl0 = $Pl0;
            else
                $this->errorsim = true;
        }

        public function getBm0()
        {
            return $this->Bm0;
        }

        public function setBm0($Bm0)
        {
            if($Bm0 >= 0)
                $this->Bm0 = $Bm0;
            else
                $this->errorsim = true;
        }

        public function getA0()
        {
            return $this->A0;
        }

        public function setA0($A0)
        {
            if($A0 >= 0)
            $this->A0 = $A0;
        else
            $this->errorsim = true;
        }

        public function getT()
        {
            return $this->t;
        }

        public function setT($t)
        {
            if($t >= 0)
                $this->t = $t;
            else
                $this->errorsim = true;
        }

        public function getErrorsim()
        {
            return $this->errorsim;
        }
    }
?>