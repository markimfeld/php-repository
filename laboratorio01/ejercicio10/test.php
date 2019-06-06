<?php
    session_start();
    include_once "../php_conexion.php";
    include_once "class/class.php";
    include_once "../funciones.php";
    include_once "../class_buscar.php";
   
    if(!empty($_GET['cod'])){
        $id_alumno=$_GET['cod'];
        $oAlumno=new Consultar_Alumno($id_alumno); 
        $nombre_alumno=$oAlumno->consultar('nombre');
    }else{
        header('Location:error.php');
    }
    function contar_nota($materia,$periodo,$alumno){
        $pa=mysql_query("SELECT COUNT(nombre)as numero FROM actividad WHERE estado='s'");              
        if($row=mysql_fetch_array($pa)){
            $act=$row['numero'];
        }
       
        $pa=mysql_query("SELECT COUNT(alumno)as numero FROM notas WHERE alumno='$alumno' and materia='$materia' and periodo='$periodo'");              
        if($row=mysql_fetch_array($pa)){
            return $row['numero'].' / '.$act;
        }
    }
    function promedio($materia,$periodo,$alumno){
        $promedio=0;
        $pa=mysql_query("SELECT COUNT(nombre)as numero FROM actividad WHERE estado='s'");              
        if($row=mysql_fetch_array($pa)){
            $act=$row['numero'];
        }
        $pa=mysql_query("SELECT * FROM notas WHERE alumno='$alumno' and materia='$materia' and periodo='$periodo'");               
        while($row=mysql_fetch_array($pa)){
            $promedio=$promedio+$row['valor'];
        }
        return $promedio/$act;
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>.: <?php echo $nombre_alumno; ?> :.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Le styles -->
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 90px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../../css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../../ico/favicon.png">
  </head>
  <!-- FACEBOOK COMENTARIOS -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- FIN CODIGO FACEBOOK -->
  <body>
 
    <?php include_once "../../menu/m_valorar.php"; ?>
    <div align="center">
        <table width="90%">
          <tr>
            <td>
                <?php
                    if(!empty($_POST['nota'])){
                        $materia=limpiar($_POST['materia']);
                        $nota=limpiar($_POST['nota']);
                        $periodo=limpiar($_POST['periodo']);
                        $actividad=limpiar($_POST['actividad']);
                        $fecha=date('Y-m-d');
                       
                        $oActividad=new Consultar_Actividad($actividad);
                        $oMateria=new Consultar_Materias($materia);
                        $nactividad=$oActividad->consultar('nombre');
                        $nmateria=$oMateria->consultar('nombre');
                        if(empty($_POST['id'])){
                           
                            $pa=mysql_query("SELECT * FROM notas
                            WHERE alumno='$id_alumno' and materia='$materia' and periodo='$periodo' and actividad='$actividad'");              
                            if($row=mysql_fetch_array($pa)){
                                echo mensajes('Este estudiante ya fue evaluado para la materia "'.$nmateria.'" en el examen "'.$nactividad.'"','rojo');
                            }else{
                                $oGuardar=new Proceso_Calificar('',$materia,$id_alumno,$actividad,$nota,$periodo,$fecha);
                                $oGuardar->guardar();
                                echo mensajes('Nota Registrada con Exito al Alumno "'.$nombre_alumno.'"<br>
                                "'.$nmateria.'" Calificacion '.$nota.' En "'.$nactividad.'"','verde');
                            }
                        }
                    }
                ?>
                <table class="table table-bordered">
                  <tr class="info">
                    <td><h2><img src="img/alumno.png" width="80" height="80"> <?php echo $id_alumno.' | '.$nombre_alumno; ?></h2></td>
                  </tr>
                </table>
              <div class="row-fluid">
                    <div class="span4">
                    </div>
                    <div class="span4" align="center">
                            <strong>CONSULTADO</strong><br>
                                <strong>TODOS LOS PERIODOS</strong>
                    </div>
                    <div class="span4" align="right">
                        <a href="#nueva" role="button" class="btn btn-primary" data-toggle="modal">
                            <strong><i class="fa fa-navicon" style="font-size:20px;color:white"></i> INGRESAR NUEVA CALIFICACIÓN</strong>
                        </a>
                    </div>
                </div>
                <br>
 
            </td>
          </tr>
        </table>
    </div>
 
 
 
 
 
 
 
 
 
 
 
 
    <div id="nueva" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form name="form1" method="post" action="">
        <div class="modal-header">
            <button type="btn"  class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h3 id="myModalLabel" align="center">INGRESAR NUEVA CALIFICACIÓN<br>"<?php echo $nombre_alumno; ?>"</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span6">
                    <strong>EVALUACIÓN</strong><br>
                    <select name="actividad">
                        <?php
                            $pa=mysql_query("SELECT * FROM actividad WHERE estado='s'");               
                            while($row=mysql_fetch_array($pa)){
                                echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                            }
                        ?>
                    </select><br>
                    <strong>PERIODO</strong><br>
                    <select name="periodo">
                        <?php
                            $pa=mysql_query("SELECT * FROM periodo WHERE estado='s'");             
                            while($row=mysql_fetch_array($pa)){
                                echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="span6">
                    <strong>MATERIA</strong><br>
                    <select name="materia">
                        <?php
                            $pa=mysql_query("SELECT * FROM materia WHERE estado='s'");             
                            while($row=mysql_fetch_array($pa)){
                                echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                            }
                        ?>
                    </select><br>
                    <strong>CALIFICACIÓN</strong><br>
                    <input type="number" min="<?php echo $minima_nota; ?>" max="<?php echo $maxima_nota; ?>" value="1" name="nota" autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close" style="font-size:17px;"></i> <strong>CERRAR</strong></button>
            <button type="submit" class="btn btn-success"><i class="fa fa-cloud-upload" style="font-size:20px;color:blue"></i> <strong>SUBIR NOTA</strong></button>
        </div>
        </form>
    </div>
       
   
    <!-- Le javascript ../../js/jquery.js
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap-transition.js"></script>
    <script src="../../js/bootstrap-alert.js"></script>
    <script src="../../js/bootstrap-modal.js"></script>
    <script src="../../js/bootstrap-dropdown.js"></script>
    <script src="../../js/bootstrap-scrollspy.js"></script>
    <script src="../../js/bootstrap-tab.js"></script>
    <script src="../../js/bootstrap-tooltip.js"></script>
    <script src="../../js/bootstrap-popover.js"></script>
    <script src="../../js/bootstrap-button.js"></script>
    <script src="../../js/bootstrap-collapse.js"></script>
    <script src="../../js/bootstrap-carousel.js"></script>
    <script src="../../js/bootstrap-typeahead.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
 
 
 
 
 
 
            <div>
                <table class="table table-bordered table table-hover">
                  <tr class="info">
                    <td width="45%"><center><p align="left"><strong>MATERIA</strong></center></p></td>
                    <td width="5%"><center><strong>PRIMER PERIODO</strong></center></td>
                    <td width="5%"><center><strong>SEGUNDO PERIODO</strong></center></td>
                    <td width="5%"><center><strong>TERCER PERIODO</strong></center></td>
                    <td width="15%"><center><strong>PROMEDIO</strong></center></td>
                    <td width="0%"><center><strong>NOTA FINAL</strong></center></td>
                   <!-- <td width="6%">&nbsp;</td>-->
                  </tr>
 
 
               
                  <?php
                    if(!empty($_GET['periodo'])){
                        $id_periodo=limpiar($_GET['periodo']);
                        //$pa=mysql_query("SELECT * FROM notas WHERE alumno='$id_alumno' and periodo='$id_periodo' group by alumno, materia");
                        $cont = 0;
                        $pa=mysql_query("SELECT * FROM notas WHERE alumno='$id_alumno' group by alumno, periodo, materia");
                    }else{
                        $cont = 0;
                        $pa=mysql_query("SELECT * FROM notas WHERE alumno='$id_alumno' group by alumno, periodo, materia");                
                    }
                    while($row=mysql_fetch_array($pa)){
                            $oMateria=new Consultar_Materias($row['materia']);
                            $oPeriodo=new Consultar_Periodo($row['periodo']);
                  ?>
                    <td><center><p align="left">
                        <?php
                        echo $oMateria->consultar('nombre');
                        ?>
                        </center>
                    </p>
                     </td>
                     <td><center><a href="#m<?php echo $row['periodo'].$row['materia']; ?>" title="Detalle de Calificaciones" data-toggle="modal"><?php
                     echo formato(promedio($row['materia'],$row['periodo'],$row['alumno']));?>
                      </center>
                 </td>                    
                    <!--<td><center><?php echo $oPeriodo->consultar('nombre'); ?></center></td>-->
                   <!-- <td><center><?php echo contar_nota($row['materia'],$row['periodo'],$row['alumno']); ?></center></td>-->
                    <td>
                        <center>
                        </center>
                         <div id="m<?php echo $row['periodo'].$row['materia']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                            <div class="modal-header">
                                <button type="btn" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-window-close" style="font-size:30px;color:white"></i></button>
                                <h3  style="background-color:#424A5D;" id="myModalLabel" align="center">
                                    <span style="font-size:18px;color:#FFFFFF">NOTAS PARCIALES </span>
                                    <span style="font-size:18px;color:#FFFFFF"><?php echo $oPeriodo->consultar('nombre');?></span>
                                    <span style="font-size:18px;color:#FFFFFF">PERIODO</span>
                                    <BR>
                                    <span style="font-size:18px;color:#FFFFFF"><?php echo $oMateria->consultar('nombre');?></span>
                                </h3>
                            </div>
 
                            <div class="modal-body">
                                <table class="table table-bordered table table-hover">
                                  <tr class="well">
                                 
                                    <td><strong><center>Eva. 01</center></strong></td>
                                    <td><strong><center>Eva. 02</center></strong></td>
                                    <td><strong><center>Eva. 03</center></strong></td>
                                    <td><strong><center>Eva. 04</center></strong></td>
                                    <td><strong><center>Eva. 05</center></strong></td>
                                    <td><strong><center>Parcial</center></strong></td>
                                    <td><strong><center>Asistencia</center></strong></td>
                                  </tr>
                                  <?php
                                    $paa=mysql_query("SELECT * FROM notas
                                    WHERE alumno='".$row['alumno']."' and periodo='".$row['periodo']."' and materia='".$row['materia']."'");                    
                                    while($dato=mysql_fetch_array($paa)){
                                        $oAct=new Consultar_Actividad($dato['actividad']);
                                  ?>
                                   
                                    <td><center><?php echo $dato['valor']; ?></center></td>
                                  <?php } ?>
 
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close" style="font-size:17px;"></i> <strong>CERRAR</strong></button>
                            </div>
                        </div>
                    </td>
                  </tr>
                    <!-- </td> -->
                  <?php } ?>
                </table>
</div>
 
 
  </body>
</html>
 
 
<span style="font-size:23px;color:#FFFFFF"></span>