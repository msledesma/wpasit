<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Guapas</title>
        <link rel="stylesheet" href="guapas_estilos.css">
    </head>
    <body>
        <section>      
            <nav>        
                <ul>           
                    <li> 
                       <a href="#in">Inicio</a>               
                        <a href="#serv">Servicios</a>           
                        <a href="#cont">Contacto</a>            
                    </li>       
                </ul>
                <img src="assets/logo.png" alt="logowapas">  
            </nav>
        </section>   
        <header>        
            <section>        
                <h1>                         
                    Somos <strong>wwwapas</strong>            
                </h1>            
                <h2 id="in" >                       
                    Social media managers | Creadoras de contenido                                   
                </h2>             
                <p>                            
                    Nos encargamos de construir, gestionar y administrar la comunidad online de tu marca, empresa o negocio.               
                    <strong>                    
                        ¡Creamos relaciones estables y duraderas con tus clientes!                
                    </strong>            
                </p>
            </section>
        </header>


        <main>
            <div>
                <section>                    
                    <h3> <img src="assets/foto.png" alt="imagen-wapas">           
                       ¡Hola! Somos SOFI & JULIA, 
                    </h3>        
                    <p>           
                        las social media managers, las creadoras de contenido, las copywriters, las generadoras de leads, las diseñadoras, las estrategas en marketing digital, las potenciadoras de ventas, el posicionamiento de tu marca.                       <strong>
                            ¡Somos el complemento que necesitás para hacer crecer tu marca! ¡Somos wwwapas!
                        </strong>     
                    </p>
                </section>
                <section>
                    <h3>          
                        GESTIONAMOS TUS REDES SOCIALES       
                    </h3>       
                    <p>            
                        La transformación digital no es solo para grandes compañías, todas las empresas deben emprenderla cuanto antes y aquí es donde podemos asistirte. Armamos estrategias a medida para tu empresa, marca o producto. 
                        <strong>
                            ¡Aumentá tu presencia digital y generá nuevas ventas y contactos!
                            <br><img src="assets/img-servicios.png" alt="imagen-servicios">
                        </strong>       
                    </p>
                </section>
            </div>
        
            <div id="serv"><br>
                <section>
                    <h2>
                        Servicios
                    </h2>       
                    <ol>        
                        <li>Análisis de perfil (Benchmarking)</li>          
                        <li>Revisión y activación de canales</li>         
                        <li>Gestión, creación y diseño de contenido</li>         
                        <li>Repuestas a mensajes y consultas</li>         
                        <li>Segmentación de promociones según el público objetivo de la pauta publicitaria</li>         
                        <li>Diagramamos un calendario que se ajuste a los objetivos de la empresa</li>          
                        <li>¡Empezamos a comunicar!</li>        
                    </ol>
                </section>
            </div>
        
            <div id="cont">            
                <section><br>                       
                    <h4>                               
                        ¿Quéres que nos <br>contactemos con vos?                       
                    </h4>                        
                    <p>     <?php
        $to="lsmariasol03@gmail.com";
        $email_subject="Mail desde web guapas"
        $email_body="Te escribio: " .$nombre "Con email: " .$email "Consulta: " .$texto
        echo='Pronto nos comunicaremos con usted!'?>
                    </p>            
                </section>        
            </div>   
        </main>
    
        <aside> 
            <a href="mailto:wwwwapas_sm@gmail.com">wwwwapas_sm@gmail.com<br></a>
            <a href="http://www.instagram.com">
                <img src="assets/instagram-icon.png" alt="instagram">
            </a>
            <a href="http://www.facebook.com">
                <img src="assets/facebook-icon.png" alt="facebook">
            </a>
            <a href="http://www.linkedin.com">
                <img src="assets/linkedin-icon.png" alt="linkedin">
            </a>
        </aside>
    
        <footer>       
            <h1>wwwwpas</h1> 
        </footer>

    </body>
</html>
