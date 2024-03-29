<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Eliminar Producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                    <div id="eliminar_er" class="alert alert-danger fade in" style="display:none" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error</strong> Error Al Eliminar
                    </div>
                    <div id="eliminar_ex" class="alert alert-success fade in" style="display:none" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Sucess</strong> Eliminado Correctamente
                    </div>
                <div class="container-fluid">
                <label id='idee' name='idee'></label>
                    ESTA SEGURO QUE DESEA ELIMINAR ESTE PRODUCTO
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id='eliminar_producto'type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="iniciar_seccion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">INICIAR SESSION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <div id="erro" class="alert alert-danger fade in" style="display:none" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error</strong> Credenciales Incorrectos
                    </div>
                    <div id="exit" class="alert alert-success fade in" style="display:none" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Sucess</strong> se Recargara la Pagina
                </div>
                    <div class="form-group " id="us"class="has-success" >
                        <label class="control-label" for="title">Usuario</label>
                        <input  type="text" class="form-control round-input" name="nom" id="nom" maxlength="15" pattern="[0-9]{14,30}">  
                        <label id="msj_agregar_11" style="display:none;color:red">Campo vacio</label>
                            
                    </div>
          
                    <div class="form-group " id="pas" class="has-success" >
                        <label class="control-label" for="title">Contraseña</label>
                        <input  type="password" class="form-control round-input" name="contr" id="contr" maxlength="20" pattern="[0-9]{14,30}">  
                        <label id="msj_agregar_12" style="display:none;color:red">Campo vacio</label>
                            
                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
                <button type="button" id='iniciar' class="btn btn-success">Iniciar Seccion</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRARSE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div id="err" class="alert alert-danger fade in" style="display:none" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error</strong> no se han guardaron los datos
                    </div>
                    <div id="exi" class="alert alert-success fade in" style="display:none" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Gardado</strong> se han guardaron los datos
                </div>
                    <div class="form-group " id="nombree"class="has-success" >
                        <label class="control-label" for="title">Nombre Completo</label>
                        <input  type="text" class="form-control round-input" name="nombre" id="nombre" title="Solamente letras" maxlength="30" pattern="[0-9]{14,30}">  
                        <label id="msj_agregar_1" style="display:none;color:red">Campo vacio</label>
                            
                    </div>
          
                    <div class="form-group " id="edadd" class="has-success" >
                        <label class="control-label" for="title">edad</label>
                        <input  type="number" class="form-control round-input" name="edad" id="edad">  
                        <label id="msj_agregar_2" style="display:none;color:red">Campo vacio</label>
                            
                    </div>
                    <div class="form-group " id="correoo"class="has-success" >
                        <label class="control-label" for="title">correo</label>
                        <input  type="email" class="form-control round-input" name="correo" id="correo">  
                        <label id="msj_agregar_3" style="display:none;color:red">Campo vacio/correo invalido</label>
                            
                    </div>
          
                    <div class="form-group " id="userr" class="has-success" >
                        <label class="control-label" for="title">usuario</label>
                        <input  type="text" class="form-control round-input" name="user" id="user" maxlength="15" pattern="[0-9]{14,30}">  
                        <label id="msj_agregar_4" style="display:none;color:red">Campo vacio</label>   
                    </div>
                    <div class="form-group " id="passs" class="has-success" >
                        <label class="control-label" for="title">Contraseña</label>
                        <input  type="password" class="form-control round-input" name="pass" id="pass" maxlength="20" pattern="[0-9]{14,30}">  
                        <label id="msj_agregar_5" style="display:none;color:red">Campo vacio</label>   
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
                <button type="button" id='guardar' class="btn btn-success">Guardar Datos</button>
            </div>
        </div>
    </div>
</div>

<script>

$('#eliminar').on('show.bs.modal', function (event) {
     let button=$(event.relatedTarget);
     let modal=$(this);
     modal.find('#idee').val(button.data('id'));  
     console.log($("#idee").val());
 });
 $('#eliminar_producto').click(function () {
    $.ajax({
            url:'controlador/eliminar_producto.php',
            type:'POST',
            data:{
                ide:$("#idee").val()
            },
            success:function (msj) {
                console.log(msj);
                switch (msj) {
                    case '1':
                        $("#eliminar_ex").show();
                        $("#eliminar_er").hide();
                        setTimeout(() => {
                            $("#eliminar_ex").hide();
                        }, 2000);
                        
                        break;
                    default:
                    $("#eliminar_ex").hide();
                    $("#eliminar_er").show();
                    break;
                }
               
            }
      });
 })
$("#guardar").click(function () {
    exr=new RegExp("^[A-Z a-z \_]{1}[A-Z a-z 0-9 \_ \.]+@[A-Z a-z 0-9 \_ \.]+[\.]{1}[A-Z a-z 0-9 \_ \.]+$");

    console.log('guardar');
    band=true;
   if ($('#nombre').val()=='') {
        $('#msj_agregar_1').show();
        band=false;
    }else{
        $('#msj_agregar_1').hide();
    }
    if ($('#edad').val()=='') {
        $('#msj_agregar_2').show();
        band=false;
    }else{
        $('#msj_agregar_2').hide();
    }
    if (!exr.test($('#correo').val())) {
        $('#msj_agregar_3').show();
        band=false;
    }
    else{
        $('#msj_agregar_3').hide();
    }
    if ($('#user').val()=='') {
        $('#msj_agregar_4').show();
        band=false;
    }else{
        $('#msj_agregar_4').hide();
    }
    if ($('#pass').val()=='') {
        console.log('hola');
        $('#msj_agregar_5').show();
        band=false;
    }else{
        $('#msj_agregar_5').hide();
    }
    if (band) {
        $.ajax({
            url:'controlador/registrarse.php',
            type:'POST',
            data:{
                nombre:$("#nombre").val(),
                edad:$("#edad").val(),
                correo:$("#correo").val(),
                usuario:$("#user").val(),
                pass:$("#pass").val(),
            },
            success:function (msj) {
                switch (msj) {
                    case '1':
                        $("#exi").show();
                        $("#err").hide();
                        setTimeout(() => {
                            $("#registrarse").modal('hide');
                        }, 1000);
                        break;
                    default:
                    document.getElementById("err").innerHTML=msj;
                    $("#exi").hide();
                    $("#err").show();
                    break;
                }
               
            }
      });
    }
});

$("#iniciar").click(function () {
    console.log('guardar');
    band=true;
   if ($('#nom').val()=='') {
        $('#msj_agregar_11').show();
        band=false;
    }
    if ($('#contr').val()=='') {
        $('#msj_agregar_12').show();
        band=false;
    }

    if (band) {
        $.ajax({
            url:'controlador/logeo.php',
            type:'POST',
            data:{
                usuario:$("#nom").val(),
                pass:$("#contr").val(),
            },
            success:function (msj) {
                switch (msj) {
                    case 'index.php':
                        $("#exit").show();
                        $("#erro").hide();
                        setTimeout(() => {
                            window.location=msj;
                        }, 2000);
                        
                        break;
                    default:
                    $("#exit").hide();
                    $("#erro").show();
                    break;
                }
               
            }
      });
    }
});
$('#registrarse').on('hidden.bs.modal',function (event) {
        $("#err").hide();
        $("#exi").hide();
        $("#msj_agregar_1").hide();
        $("#msj_agregar_2").hide();
        $("#msj_agregar_3").hide();
        $("#msj_agregar_4").hide();
        $("#msj_agregar_5").hide();
        $(this).find('input').each(function () {
            this.value=this.defaultValue;
        });
    });
$('#iniciar_seccion').on('hidden.bs.modal',function (event) {
        $("#erro").hide();
        $("#exit").hide();
        $("#msj_agregar_11").hide();
        $("#msj_agregar_12").hide();
        $(this).find('input').each(function () {
            this.value=this.defaultValue;
        });
      
    });
    $('#eliminar').on('hidden.bs.modal',function (event) {
        $("#eliminar_ex").hide();
        $("#eliminar_er").hide();
    });
</script>