<section class="cuerpo">
    <form class="datos" (ngSubmit)="onSubmit()" #form="ngForm">
    
    
    <legend class="leyenda">Iniciar sesion</legend>
    
    <div class="input">
        <span><i class="fas fa-users"></i></i></span>
    	<input type="text" placeholder="Ingrese su usuario" required  name="user"/>
     
    </div>
    
    <div class="input">
        <span><i class="fa fa-lock"></i></span>
    	<input type="password" placeholder="Ingrese su contraseña" required name="password" />
    </div>

    <p class="text2">¿Todavian no tienes una cuanta ? 
    </p>
    <p class="text2" >vamos a <a href="index.php?rutas=registro">Registro</a></p><br>


    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
    
    
</form>
</section>

    