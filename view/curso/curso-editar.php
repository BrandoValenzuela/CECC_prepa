<h1 class="page-header">Nuevo registro</h1>
<ol class="breadcrumb">
  <li><a href="?c=Curso">Cursos</a></li>
  <li class="active"></li>
</ol>
<form class="form-horizontal" id="frm-curso" action="?c=Curso&a=Guardar" method="post" enctype="multipart/form-data">
    <div id="clonacion">
        <div class="form-group">
            <label class="col-xs-4 control-label"><span class="obligatorio">* </span>CURP del artesano:</label>
            <div class="col-xs-4">
                <input type="text" id="curp-artesano" name="curp-artesano-capacitacion[]" class="form-control" placeholder="Ingrese la CURP" data-validacion-tipo="requerido|curp" />
            </div>
            <div class="col-xs-4" id="btn-quitar-prducto">
                <input type="button" class="btn btn-primary quitar-participante" value="Quitar">
            </div>              
        </div>
    </div>
    <div class="col-md-12">
        <div class="text-right">
            <br><br>
            <input type="button" name="" id="agregar-participante" class="btn btn-primary" value="Agregar participante"></input>
            <input type="submit" name="" id="guardar-participante" class="btn btn-success" value="Guardar"></input>
        </div>
    </div>
</form>

<script>
    
    $(function(){
        $("#agregar-participante").click(function(){
            var renglon = '<div class="form-group"><label class="col-xs-4 control-label"><span class="obligatorio">* </span>CURP del artesano:</label><div class="col-xs-4"><input type="text" id="curp-artesano" name="curp-artesano-capacitacion[]" class="form-control" placeholder="Ingrese la CURP" data-validacion-tipo="requerido|curp" /></div><div class="col-xs-4" id="btn-quitar-prducto"><input type="button" class="btn btn-primary quitar-participante" value="Quitar"></div></div>'
            $("#clonacion").append(renglon);
        })

        $(document).on("click",".quitar-participante",function(){
            var parent = $(this).parents().get(1);
            // alert(parent.id);
            $(parent).remove();
        });
    })
</script>
