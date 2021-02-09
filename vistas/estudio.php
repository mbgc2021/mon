<?php 
session_start();
if(isset($_SESSION['usuario'])){
  //echo  $_SESSION['usuario']; 

  ?>
  
  <!DOCTYPE html>
  <html>
  <head>
    <title>Estudios</title>
    <?php require_once "menu.php";
    ?>
    <?php require_once "../clases/Conexion.php";


    $c=new conectar();
    $conexion=$c->conexion();

    $sql="SELECT id_categoriaEst,nombreCategoria
    from categoriasest";
    $result=mysqli_query($conexion,$sql);
    ?>
    <style type="text/css">
      .row { margin: 3px 0; }
      .row div[class*='col'] { padding: 3px;}
    </style>
    
  </head>
  <body>

    <div class="container">
     <div class="row">
      <div class="col-sm-6" > 
       <form id="frmEstudios"  > 
        <div class="row" >

          <label><h1>Estudios</h1></label>

          <div class=" col-sm text-left">
            <label><b>Categoria:</b></label>
            
          </div>
          <div class="col-sm text-left">
            <select class="form-control form-control-sm" id="categoriaSelect" name="categoriaSelect">
              <option value="A">Selecciona Categoria</option>
              <?php while($ver=mysqli_fetch_row($result)): ?>
                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
              <?php endwhile; ?>
            </select>

          </div>
        </div>
        <div class="row ">



          <div class="col-sm text-left">


            <label><b>Clave:</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text"  class="form-control form-control-sm" id="claveEstudio" name="claveEstudio">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Estudio:</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="estudio" name="estudio">
          </div>

        </div>


        <div class="row">
          <div class="col-sm text-left">


            <label><b>Área:</b></label>

          </div>


          <div class="col-sm">

            <select  class="form-control form-control-sm" id="listaarea" name="listaarea" >

              <option  value="A">Selecciona área </option>
              <option   value="Coagulación">Coagulación</option>
              <option  value="Especial">Especial</option>
              <option   value="Hematología">Hematología</option>
              <option  value="Hematología 1">Hematología 1</option>
              <option   value="Inmunología">Inmunología especial</option>
              <option  value="Inmunología rutina">Inmunología rutina</option>
              <option   value="Maquila">Maquila</option>
              <option  value="Microbiología">Microbiología</option>
              <option   value="Parasitología">Parasitología</option>
              <option  value="Química Sanguínea">Química Sanguínea</option>
              <option   value="Uroanálisis">Uroanálisis</option>


            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Tipo de muestra:</b></label>

          </div>


          <div class="col-sm">
            <select  class="form-control form-control-sm" id="listaTmuestra" name="listaTmuestra" >

              <option  value="A">Selecciona tipo muestra </option>
              <option   value="Sangre Total">Sangre total</option>
              <option  value="Sangre total EDTA">Sangre total EDTA</option>
              <option   value="Sangre citratrada">Sangre citratrada</option>
              <option   value="Suero">Suero</option>
              <option  value="Orina reciente">Orina reciente</option>
              <option   value="Orina 24 hrs">Orina 24 hrs</option>
              <option  value="Plasma">Plasma</option>
              <option   value="Materia fecal">Materia fecal</option>
              <option  value="Moco nasal">Moco nasal</option> 
              <option  value="Raspado conjuntival">Raspado conjuntival</option>
              <option   value="Raspado de piel">Raspado de piel</option>
              <option   value="Raspado endocervical">Raspado endocervical</option>
              <option   value="Raspado perianal">Raspado perianal</option>
              <option   value="Raspado ungeal">Raspado ungeal</option>
              <option   value="Raspado uretral">Raspado uretral</option>
              <option   value="Secreción">Secreción</option>
              <option   value="Secreción bronquial ">Secreción bronquial </option>
              <option   value="Secreción conjuntival">Secreción conjuntival</option>
              <option   value="Secreción de acne">Secreción de acne</option>
              <option   value="Secreción de herida">Secreción de herida</option>
              <option   value="Secreción de PEN-ROSSE">Secreción de PEN-ROSSE</option>
              <option   value="Secreción endocervical">Secreción endocervical</option>
              <option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
              <option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
              <option   value="Secreción endocervical-fresco">Secreción endocervical-fresco</option>
              <option   value="Secreción faringea">Secreción faringea</option>
              <option   value="Secreción nasal">Secreción nasal</option>
              <option   value="Secreción ocular para citologia">Secreción ocular para citologia</option>
              <option   value="Secreción ocular para cultivo">Secreción ocular para cultivo</option>
              <option   value="Secreción otica">Secreción otica</option>
              <option   value="Secreción uretral para cultivo">Secreción uretral para cultivo</option>
              <option   value="Secreción otica">Secreción otica</option>
              <option   value="Secreción uretral-fresco">Secreción uretral-fresco</option>
              <option   value="Secreción uretral-tincion">Secreción uretral-tincion</option>
              <option   value="Secreción vaginal">Secreción vaginal</option>
              <option   value="Secreción vaginal-tincion">Secreción vaginal-tincion</option>
              <option   value="Secreción vaginal-fresco">Secreción vaginal-fresco</option>
              <option   value="Secreción vulvo vaginal tincion">Secreción vulvo vaginal tincion</option>
              <option   value="Secreción vulvo vaginal">Secreción vulvo vaginal</option>
              <option   value="Secreción semen">Secreción semen</option>


            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Recipiente:</b></label>

          </div>


          <div class="col-sm text-left">

            <select  class="form-control form-control-sm" id="listarecipiente" name="listarecipiente" >

              <option  value="A">Selecciona recipiente </option>
              <option  value="CITOBRUSH TUBO SECO">CITOBRUSH TUBO SECO</option>
              <option  value="FRASCO ORINA">FRASCO ORINA</option>
              <option  value="FRASCO ESTERIL">FRASCO ESTERIL</option>
              <option  value="JERINGA">JERINGA</option>
              <option  value="MEDIO DE TRANSPORTE ">MEDIO DE TRANSPORTE </option>
              <option  value="MEDIO DE TRANSPORTE Y LAMINILLA ">MEDIO DE TRANSPORTE Y LAMINILLA</option>
              <option  value="MEDIO ESPECIAL">MEDIO ESPECIAL</option>
              <option  value="PORTA OBJETOS">PORTA OBJETOS</option>
              <option  value="TUBO AMARILLO">TUBO AMARILLO</option>
              <option  value="TUBO AZUL">TUBO AZUL</option>
              <option  value="TUBO ESTERIL">TUBO ESTERIL</option>
              <option  value="TUBO HUMEDO">TUBO HUMEDO</option>



            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Método:</b></label>

          </div>


          <div class="col-sm text-left">

            <select  class="form-control form-control-sm" id="listaMetodo" name="listaMetodo" >
              <option value="A">Selecciona método</option>
              <option value="Análisis químico">Análisis químico</option>
              <option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
              <option value="Varios">Varios</option>

            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">

            <label><b>Técnica:</b></label>


          </div>


          <div class="col-sm text-left">
            <select class="form-control form-control-sm" id="listaTecnica" name="listaTecnica">
              <option value="A">Selecciona Técnica</option>
              <option value="Varios">Varios</option>
              <option value="Papel indicador">Papel indicador</option>
              <option value="Aglutinación">Aglutinación</option>
              <option value="Aglutinación en placa">Aglutinación en placa</option>
              <option value="Aglutinación en tubo">Aglutinación en tubo</option>
              <option value="Análisis químico">Análisis químico</option>
              <option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
              <option value="Automatizada">Automatizada</option>
            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">

            <label><b>Condiciones paciente:</b></label>


          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="condicionesp" name="condicionesp">
            
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Aplicaciones:</b></label>

          </div>


          <div class="col-sm text-left">
            <input type="text"  class="form-control form-control-sm" id="aplicaciones" name="aplicaciones">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Acepta urgencia:</b></label>

          </div>


          <div class="col-sm text-left">

            <select class="form-control form-control-sm" id="aceptaurgencia" name="aceptaurgencia">
              <option value="si">si</option>
              <option value="no">no</option>

            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Número de días (urgente):</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="procesoUrgente" name="procesoUrgente">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Número de días(normal):</b></label>

          </div>


          <div class="col-sm text-left">
            <input type="text" class="form-control form-control-sm" id="procesoNormal" name="procesoNormal">

          </div>

        </div>

        <div class="row">
          <div class="col-sm text-left">


           <label><b>Costo:</b></label>
         </div>


         <div class="col-sm text-left">
           <input type="text" class="form-control input-sm" id="costo" name="costo">
         </div>

       </div>
       <div class="row">
        <div class="col-sm text-left">



        </div>




      </div>
      <div class="row">
        <div class="col-lg ">


          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" id="chkmetodo" name="chkmetodo" class="form-check-input" value=""><b>Imprime método</b>
            </label>
          </div>
          

          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox"  id="chktecnica" name="chktecnica" class="form-check-input" value=""><b>Imprime técnica</b>
            </label>
          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-sm">



        </div>


        <div class="col-sm">

         <span class="btn btn-primary" id="btnAgregaEstudio">Agregar</span>

       </div>

     </div>
   </form>
 </div>
 <div class="col-sm-6">

  <div id="tablaEstudiosLoad">

  </div>



</div>
</div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="abremodalUpdateEstudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza estudio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmEstudiosU"> 

        <div class="row">
          <input type="text" id="idEstudio" hidden="" name="idEstudio">


          <div class=" col-sm text-left">
            <label><b>Categoria:</b></label>
            
          </div>
          <div class="col-sm text-left">
            <select class="form-control form-control-sm" id="categoriaSelectU" name="categoriaSelectU">
              <option value="A">Selecciona Categoria</option>
              <?php $sql="SELECT id_categoriaEst,nombreCategoria
              from categoriasest";
              $result=mysqli_query($conexion,$sql); ?>
              <?php while($ver=mysqli_fetch_row($result)): ?>
                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
              <?php endwhile; ?>
            </select>

          </div>
        </div>
        <div class="row ">



          <div class="col-sm text-left">


            <label><b>Clave:</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text"  class="form-control form-control-sm" id="claveEstudioU" name="claveEstudioU">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Estudio:</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="estudioU" name="estudioU">
          </div>

        </div>


        <div class="row">
          <div class="col-sm text-left">


            <label><b>Área:</b></label>

          </div>


          <div class="col-sm">

            <select  class="form-control form-control-sm" id="listaareaU" name="listaareaU" >

              <option  value="A">Selecciona área </option>
              <option   value="Coagulación">Coagulación</option>
              <option  value="Especial">Especial</option>
              <option   value="Hematología">Hematología</option>
              <option  value="Hematología 1">Hematología 1</option>
              <option   value="Inmunología">Inmunología especial</option>
              <option  value="Inmunología rutina">Inmunología rutina</option>
              <option   value="Maquila">Maquila</option>
              <option  value="Microbiología">Microbiología</option>
              <option   value="Parasitología">Parasitología</option>
              <option  value="Química Sanguínea">Química Sanguínea</option>
              <option   value="Uroanálisis">Uroanálisis</option>


            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Tipo de muestra:</b></label>

          </div>


          <div class="col-sm">
            <select  class="form-control form-control-sm" id="listaTmuestraU" name="listaTmuestraU" >

              <option  value="A">Selecciona tipo muestra </option>
              <option   value="Sangre Total">Sangre total</option>
              <option  value="Sangre total EDTA">Sangre total EDTA</option>
              <option   value="Sangre citratrada">Sangre citratrada</option>
              <option   value="Suero">Suero</option>
              <option  value="Orina reciente">Orina reciente</option>
              <option   value="Orina 24 hrs">Orina 24 hrs</option>
              <option  value="Plasma">Plasma</option>
              <option   value="Materia fecal">Materia fecal</option>
              <option  value="Moco nasal">Moco nasal</option> 
              <option  value="Raspado conjuntival">Raspado conjuntival</option>
              <option   value="Raspado de piel">Raspado de piel</option>
              <option   value="Raspado endocervical">Raspado endocervical</option>
              <option   value="Raspado perianal">Raspado perianal</option>
              <option   value="Raspado ungeal">Raspado ungeal</option>
              <option   value="Raspado uretral">Raspado uretral</option>
              <option   value="Secreción">Secreción</option>
              <option   value="Secreción bronquial ">Secreción bronquial </option>
              <option   value="Secreción conjuntival">Secreción conjuntival</option>
              <option   value="Secreción de acne">Secreción de acne</option>
              <option   value="Secreción de herida">Secreción de herida</option>
              <option   value="Secreción de PEN-ROSSE">Secreción de PEN-ROSSE</option>
              <option   value="Secreción endocervical">Secreción endocervical</option>
              <option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
              <option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
              <option   value="Secreción endocervical-fresco">Secreción endocervical-fresco</option>
              <option   value="Secreción faringea">Secreción faringea</option>
              <option   value="Secreción nasal">Secreción nasal</option>
              <option   value="Secreción ocular para citologia">Secreción ocular para citologia</option>
              <option   value="Secreción ocular para cultivo">Secreción ocular para cultivo</option>
              <option   value="Secreción otica">Secreción otica</option>
              <option   value="Secreción uretral para cultivo">Secreción uretral para cultivo</option>
              <option   value="Secreción otica">Secreción otica</option>
              <option   value="Secreción uretral-fresco">Secreción uretral-fresco</option>
              <option   value="Secreción uretral-tincion">Secreción uretral-tincion</option>
              <option   value="Secreción vaginal">Secreción vaginal</option>
              <option   value="Secreción vaginal-tincion">Secreción vaginal-tincion</option>
              <option   value="Secreción vaginal-fresco">Secreción vaginal-fresco</option>
              <option   value="Secreción vulvo vaginal tincion">Secreción vulvo vaginal tincion</option>
              <option   value="Secreción vulvo vaginal">Secreción vulvo vaginal</option>
              <option   value="Secreción semen">Secreción semen</option>


            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Recipiente:</b></label>

          </div>


          <div class="col-sm text-left">

            <select  class="form-control form-control-sm" id="listarecipienteU" name="listarecipienteU" >

              <option  value="A">Selecciona recipiente </option>
              <option  value="CITOBRUSH TUBO SECO">CITOBRUSH TUBO SECO</option>
              <option  value="FRASCO ORINA">FRASCO ORINA</option>
              <option  value="FRASCO ESTERIL">FRASCO ESTERIL</option>
              <option  value="JERINGA">JERINGA</option>
              <option  value="MEDIO DE TRANSPORTE ">MEDIO DE TRANSPORTE </option>
              <option  value="MEDIO DE TRANSPORTE Y LAMINILLA ">MEDIO DE TRANSPORTE Y LAMINILLA</option>
              <option  value="MEDIO ESPECIAL">MEDIO ESPECIAL</option>
              <option  value="PORTA OBJETOS">PORTA OBJETOS</option>
              <option  value="TUBO AMARILLO">TUBO AMARILLO</option>
              <option  value="TUBO AZUL">TUBO AZUL</option>
              <option  value="TUBO ESTERIL">TUBO ESTERIL</option>
              <option  value="TUBO HUMEDO">TUBO HUMEDO</option>



            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Método:</b></label>

          </div>


          <div class="col-sm text-left">

            <select  class="form-control form-control-sm" id="listaMetodoU" name="listaMetodoU" >
              <option value="A">Selecciona método</option>
              <option value="Análisis químico">Análisis químico</option>
              <option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
              <option value="Varios">Varios</option>

            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">

            <label><b>Técnica:</b></label>


          </div>


          <div class="col-sm text-left">
            <select class="form-control form-control-sm" id="listaTecnicaU" name="listaTecnicaU">
              <option value="A">Selecciona Técnica</option>
              <option value="Varios">Varios</option>
              <option value="Papel indicador">Papel indicador</option>
              <option value="Aglutinación">Aglutinación</option>
              <option value="Aglutinación en placa">Aglutinación en placa</option>
              <option value="Aglutinación en tubo">Aglutinación en tubo</option>
              <option value="Análisis químico">Análisis químico</option>
              <option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
              <option value="Automatizada">Automatizada</option>
            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">

            <label><b>Condiciones paciente:</b></label>


          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="condicionespU" name="condicionespU">
            
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Aplicaciones:</b></label>

          </div>


          <div class="col-sm text-left">
            <input type="text"  class="form-control form-control-sm" id="aplicacionesU" name="aplicacionesU">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Acepta urgencia:</b></label>

          </div>


          <div class="col-sm text-left">

            <select class="form-control form-control-sm" id="aceptaurgenciaU" name="aceptaurgenciaU">
              <option value="si">si</option>
              <option value="no">no</option>

            </select>
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Número de días (urgente):</b></label>

          </div>


          <div class="col-sm text-left">

            <input type="text" class="form-control form-control-sm" id="procesoUrgenteU" name="procesoUrgenteU">
          </div>

        </div>
        <div class="row">
          <div class="col-sm text-left">


            <label><b>Número de días(normal):</b></label>

          </div>


          <div class="col-sm text-left">
            <input type="text" class="form-control form-control-sm" id="procesoNormalU" name="procesoNormalU">

          </div>

        </div>

        <div class="row">
          <div class="col-sm text-left">


           <label><b>Costo:</b></label>
         </div>


         <div class="col-sm text-left">
           <input type="text" class="form-control input-sm" id="costoU" name="costoU">
         </div>

       </div>
       


     </form>
   </div>
   <div class="modal-footer">
    <button  id="btnActualizaarticulo" type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

  </div>
</div>
</div>
</div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){

    $('#btnActualizaarticulo').click(function(){

      datos=$('#frmEstudiosU').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"../procesos/estudios/actualizaEstudios.php",
        success:function(r){
          if(r==1){
            $('#tablaEstudiosLoad').load("estudios/tablaEstudios.php");
            alertify.success("Actualizado con exito !!!!");
          }else{
            alertify.error("No se actualizo estudio");
          }
        }
      });
    });
  });
</script>


<script type="text/javascript">

  function agregaDatosEstudio(idestudio){
    $.ajax({
      type:"POST",
      data:"idest="+idestudio,
      url:"../procesos/estudios/obtenDatosEstudio.php",
      success:function(r){

        dato=jQuery.parseJSON(r);
        $('#idEstudio').val(dato['id_estudio']);
        $('#categoriaSelectU').val(dato['id_categoriaEst']);
        $('#claveEstudioU').val(dato['clave']);
        $('#estudioU').val(dato['nombreEst']);
        $('#listaareaU').val(dato['area']);
        $('#listaTmuestraU').val(dato['tipo']);
        $('#listarecipienteU').val(dato['recipiente']);
        $('#listaMetodoU').val(dato['metodo']);
        $('#listaTecnicaU').val(dato['tecnica']);
        $('#condicionespU').val(dato['condicionPaciente']);
        $('#aplicacionesU').val(dato['aplicaciones']);
        $('#aceptaurgenciaU').val(dato['aceptaUrgencias']);
        $('#procesoUrgenteU').val(dato['numDiasProcUrgenteU']);
        $('#procesoNormalU').val(dato['numDiasProcUrgenteN']);
        $('#costoU').val(dato['costo']);
      }

    });
  }
  function eliminaEstudio(idEstudio){
      alertify.confirm('¿Desea eliminar esté estudio?', function(){ 
        $.ajax({
          type:"POST",
          data:"idestudio=" + idEstudio,
          url:"../procesos/estudios/eliminarEstudio.php",
          success:function(r){
            if(r==1){
              $('#tablaEstudiosLoad').load("estudios/tablaEstudios.php");
              alertify.success("Eliminado con exito!!");
            }else{
              alertify.error("No se pudo eliminar :(");
            }
          }
        });
      }, function(){ 
        alertify.error('Cancelo !')
      });
    }
</script>





<script type="text/javascript">

  $(document).ready(function(){
    $('#tablaEstudiosLoad').load("estudios/tablaEstudios.php");
    $('#btnAgregaEstudio').click(function(){
      vacios= validarFormVacio('frmEstudios');
      if (vacios > 0 ){
        alertify.alert("Debes llenar todos los campos.");
        return false;
      }

      datos=$('#frmEstudios').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"../procesos/estudios/insertaEstudios.php",
        success:function(r){
          if(r==1) {
          //limpia formulario al insertar registro
          $('#frmEstudios')[0].reset();
          $('#tablaEstudiosLoad').load("estudios/tablaEstudios.php");
          alertify.success("Estudio Agregado correctamente!!! :)");

        }else{
          alertify.error("No se pudo agregar Estudio! X(");
        }

      }
    });
    });
  });
</script>

<?php 
}else{
 header("location:../index.php");
}
?>
