from scipy import integrate
import numpy as np
import pymysql
import json
import os

with open('/xampp/htdocs/Projeto2025/SimLab/View/email.json', 'r') as file:
    valor = json.load(file)

email=valor;

try:
    # Estabelecendo a conexão
    conexao = pymysql.connect(
        host="simlab.linceonline.com.br",
        user="simlab_user",
        password="U5H?^9D!e4.F",
        database="simlab_banco"
    )
  
    with conexao.cursor() as cursor:

        sql = "SELECT id_usu FROM usuario where email= %s"  
        cursor.execute(sql, (email))
        idusu = cursor.fetchone()[0]
        idusu=int(idusu)

        sql = "SELECT MAX(id_sim) FROM simulacao where fk_usuario_id_usu= %s"  
        cursor.execute(sql, (idusu))
        idsim = cursor.fetchone()[0]

        sql = "SELECT nomesim FROM simulacao where id_sim = %s"  
        cursor.execute(sql, (idsim))
        nomesim = cursor.fetchone()[0]

        sql = "SELECT pi_v, c_v1, c_v2, k_v1, k_v2, alpha_ap, beta_ap, k_ap1, k_ap2, delta_apm, alpha_tn, c11, c12, c13, c14, pi_t, k_te1, delta_te, alpha_b, pi_b1, pi_b2, beta_s, beta_l, beta_bm, delta_s, delta_l, gamma_m, k_bm1, k_bm2, pi_as, pi_al, delta_a, v0,ap0,apm0,thn0,the0,tkn0,tke0,b0,ps0,pl0,bm0,a0,tempo FROM simulacao where fk_usuario_id_usu= %s and id_sim=%s"  
        cursor.execute(sql, (idusu, idsim))
        resultados = cursor.fetchone()

        pi_v = resultados[0]  
        c_v1 = resultados[1]  
        c_v2 = resultados[2]  
        k_v1 = resultados[3]  
        k_v2 = resultados[4]  

        alpha_Ap = resultados[5]  
        beta_Ap = resultados[6]  
        k_ap1 = resultados[7]  
        k_ap2 = resultados[8]  

        delta_Apm = resultados[9]  

        alpha_Tn = resultados[10]  
        c11 = resultados[11]  
        c12 = resultados[12]  
        c13 = resultados[13]  
        c14 = resultados[14]  

        pi_T = resultados[15]  

        k_te1 = resultados[16]  
        delta_te = resultados[17]  

        alpha_B = resultados[18]  
        pi_B1 = resultados[19]  
        pi_B2 = resultados[20]  
        beta_S = resultados[21]  
        beta_L = resultados[22]  
        beta_Bm = resultados[23]  

        delta_S = resultados[24]  
        delta_L = resultados[25]  
        gamma_M = resultados[26]  

        k_bm1 = resultados[27]  
        k_bm2 = resultados[28]  

        pi_AS = resultados[29]  
        pi_AL = resultados[30]  
        delta_A = resultados[31]  

        V0 = resultados[32]
        Ap0 = resultados[33]
        Apm0 = resultados[34]
        Thn0 = resultados[35]
        The0 = resultados[36]
        Tkn0 = resultados[37]
        Tke0 = resultados[38]
        B0 =  resultados[39]
        Ps0 = resultados[40]
        Pl0 = resultados[41]
        Bm0 = resultados[42]
        A0 = resultados[43]
        tempo = resultados[44]

        t = np.linspace(0, int(tempo), int(tempo) + 1)
        
        ####################################################################################
        #Equações
        ####################################################################################
        #y[0]
        def V(y, t): 
            return  pi_v*y[0] - (c_v1*y[0])/(c_v2+y[0]) - k_v1*y[0]*y[11] - k_v2*y[0]*y[6]
            
        #y[1]    
        def Ap(y,t): 

            return alpha_Ap*(Ap0 - y[1]) - beta_Ap*y[1]*(k_ap1*(y[0])/(k_ap2 + y[0]))
        
        #y[2]
        def Apm(y,t): 
            return beta_Ap*y[1]*(k_ap1*(y[0])/(k_ap2 + y[0])) - delta_Apm*y[2] 

        #y[3]
        def Thn(y,t):
            return  c11*(Thn0 - y[3]) - c12*y[2]*y[3]
            
        #y[4]
        def The(y,t):
            return  c12*y[2]*y[3] + c13*y[2]*y[4] - c14*y[4] 
        
        #y[5]    
        def Tkn(y,t):
            return  alpha_Tn*(Tkn0 - y[5]) - pi_T*y[2]*y[5] 
                            
        #y[6]
        def Tke(y,t):
            return  pi_T*y[2]*y[5] + k_te1*y[2]*y[6] - delta_te*y[6]

        #y[7]  
        def B(y,t):
            return alpha_B*(B0 - y[7]) + pi_B1*y[0]*y[7] + pi_B2*y[4]*y[7] - beta_S*y[2]*y[7] - beta_L*y[4]*y[7] - beta_Bm*y[4]*y[7]
                            
        #y[8]   
        def Ps(y,t):
            return beta_S*y[2]*y[7] - delta_S*y[8] 
            
        #y[9]    
        def Pl(y,t):
            return beta_L*y[4]*y[7] - delta_L*y[9] + gamma_M*y[10] 
        
        #y[10]
        def Bm(y,t):
            return beta_Bm*y[4]*y[7] + k_bm1*y[10]*(1 - y[10]/(k_bm2)) - gamma_M*y[10]
            
        #y[11]    
        def A(y,t):
            return pi_AS*y[8] + pi_AL*y[9] - delta_A*y[11]

        ####################################################################################
        #Resolvendo o sistema de EDOs
        ####################################################################################    
        def f(y,t):
            return V(y,t),Ap(y,t),Apm(y,t),Thn(y,t),The(y,t),Tkn(y,t),Tke(y,t),B(y,t),Ps(y,t),Pl(y,t),Bm(y,t),A(y,t) 

        def rodaModeloCompleto(Npi_v,Nc_v1,Nc_v2,Nk_v1,Nk_v2,Nalpha_Ap,Nbeta_Ap,Nk_ap1,Nk_ap2,Ndelta_Apm,Nalpha_Tn,Npi_T,Nk_te1,Ndelta_te,Nalpha_B,Npi_B1,Npi_B2,Nbeta_S,Nbeta_L,Nbeta_Bm,Ndelta_S,Ndelta_L,Ngamma_M,Nk_bm1,Nk_bm2,Npi_AS,Npi_AL,Ndelta_A,Nc11,Nc12,Nc13,Nc14,NV0,NAp0,NApm0,NThn0,NThe0,NTkn0,NTke0,NB0,NPs0,NPl0,NBm0,NA0,Nt3):
            global pi_v  	
            global c_v1       
            global c_v2       
            global k_v1  	
            global k_v2  	
            global alpha_Ap  	
            global beta_Ap  	
            global k_ap1      
            global k_ap2      
            global delta_Apm  	
            global alpha_Tn  	
            global pi_T  	
            global k_te1      
            global delta_te   
            global alpha_B  	
            global pi_B1  	
            global pi_B2  	
            global beta_S  	
            global beta_L  	
            global beta_Bm  	
            global delta_S  	
            global delta_L  	
            global gamma_M  	
            global k_bm1      
            global k_bm2      
            global pi_AS  	
            global pi_AL  	
            global delta_A    
            global c11 
            global c12 
            global c13 
            global c14 
                
            pi_v = Npi_v
            c_v1 =  Nc_v1    
            c_v2  =  Nc_v2   
            k_v1  	= Nk_v1
            k_v2  	= Nk_v2
            alpha_Ap= Nalpha_Ap 	
            beta_Ap  =	Nbeta_Ap
            k_ap1     = Nk_ap1
            k_ap2      = Nk_ap2
            delta_Apm  	= Ndelta_Apm
            alpha_Tn  	= Nalpha_Tn
            pi_T  	= Npi_T
            k_te1 = Nk_te1
            delta_te =  Ndelta_te
            alpha_B  =	Nalpha_B
            pi_B1  	= Npi_B1
            pi_B2  	= Npi_B2
            beta_S  = Nbeta_S	
            beta_L  = Nbeta_L	
            beta_Bm  =	Nbeta_Bm
            delta_S  =	Ndelta_S
            delta_L  =	Ndelta_L
            gamma_M  =	Ngamma_M
            k_bm1     = Nk_bm1
            k_bm2      = Nk_bm2
            pi_AS  	= Npi_AS
            pi_AL  	= Npi_AL
            delta_A =   Ndelta_A 
            c11 = Nc11
            c12 = Nc12
            c13 = Nc13
            c14 = Nc14

            global V0 
            global Ap0 
            global Apm0 
            global Thn0 
            global The0 
            global Tkn0 
            global Tke0 
            global B0 
            global Ps0 
            global Pl0
            global Bm0 
            global A0 
            
            V0 =  NV0
            Ap0 = NAp0
            Apm0 = NApm0
            Thn0 = NThn0
            The0 =NThe0
            Tkn0 = NTkn0
            Tke0 = NTke0
            B0 = NB0
            Ps0 = NPs0
            Pl0 = NPl0
            Bm0 = NBm0
            A0 = NA0

            y,d=integrate.odeint(f, [V0,Ap0,Apm0,Thn0,The0,Tkn0,Tke0,B0,Ps0,Pl0,Bm0,A0], Nt3, full_output=True, printmessg=True)
            return y 

        os.makedirs("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/" + str(idusu) +"/"+ str(idsim) + "/virus/", exist_ok=True)
        os.makedirs("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/"+ str(idusu)+ "/"+ str(idsim) +"/anticorpos/", exist_ok=True)

        with open("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/"+ str(idusu)+ "/"+ str(idsim) +"/virus/"+ str(nomesim)+".txt", 'w') as arq:
            arq.write("")

        with open("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/"+ str(idusu)+ "/"+ str(idsim) +"/anticorpos/"+ str(nomesim)+".txt", 'w') as arq:
            arq.write("")

        with open("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/"+ str(idusu)+ "/"+ str(idsim) +"/virus/" + str(nomesim)+".txt", 'a') as arq:
                y,d=integrate.odeint(f, [V0,Ap0,Apm0,Thn0,The0,Tkn0,Tke0,B0,Ps0,Pl0,Bm0,A0], t, full_output=True)
                for y1 in y: 
                    arq.write(str(y1[0])+ "\n")

        with open("c:/xampp/htdocs/Projeto2025/SimLab/Resultados/"+ str(idusu)+ "/"+ str(idsim) +"/anticorpos/" + str(nomesim)+".txt" , 'a') as arq:
                y,d=integrate.odeint(f, [V0,Ap0,Apm0,Thn0,The0,Tkn0,Tke0,B0,Ps0,Pl0,Bm0,A0], t, full_output=True)
                for y1 in y: 
                    arq.write(str(y1[11])+ "\n")
finally:
    if 'conexao' in locals() and conexao.open:
        conexao.close()
