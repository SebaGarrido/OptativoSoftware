@extends('menu.admin')
@section('contenido')
<div id="cambia_img">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
         
            {!!Form::open(array('url'=>'citaciones/updateCitacion', 'method'=>'POST', 'class'=>'stdform', 'files' => true, 'name'=>'formu', 'enctype' => 'multipart/form-data', 'autocomplete'=>'off'))!!}

                            <fieldset>
                        <legend class="text-center header">Editar Citacion</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="titulo" name="titulo" type="text" value="{{$citacion->titulo}}" class="form-control" required>
                            </div>
                        </div>

                        <input id="idNoticia" type="hidden" name="idCitacion" value="{{$citacion -> id_citacion}}">
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="descripCK" name="descripcion" value="{!!($citacion->mensaje)!!}" rows="7" required></textarea>
                            </div>  
                        </div>
                        
                      
                     

                      
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <FONT SIZE=4 COLOR="green">Admin</FONT>
                            </div>
                        </div>
                   
                        
                    

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<!-- Insertar CKeditor para la caja de descripcion-->
<script>

CKEDITOR.config.height = 400;
CKEDITOR.config.width = 'auto';

CKEDITOR.replace('descripCK');
</script>
@stop