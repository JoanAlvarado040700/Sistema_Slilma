<section class="cuerpo">
    <form class="datos" (ngSubmit)="onSubmit()" #form="ngForm">
    
    
    <legend class="leyenda">Bienvenido a registro</legend>
    
    <div class="input">
        <span><i class="fas fa-envelope-square"></i></span>
    	<input type="text" placeholder="Ingrese su correo" required name="correo"/>
     
    </div>
    <div class="input">
        <span><i class="fas fa-user"></i></span>
    	<input type="text" placeholder="nombre y apellido" required  name="datos" />
     
    </div>
    <div class="input">
        <span><i class="fas fa-users"></i></i></span>
    	<input type="text" placeholder="Ingrese un nombre de usuario" required name="user" />
     
    </div>
    
    <div class="input">
        <span><i class="fa fa-lock"></i></span>
    	<input type="password" placeholder="Ingrese su contraseña" required  name="password"/>
    </div>

    <p class="text2">¿Todavia no tienes una cuenta ? 
    </p>
    <p class="text2" >vamos a <a href="index.php?rutas=login">login</a></p><br>


    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
    
    
</form>

</section>

