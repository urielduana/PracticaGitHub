@extends('template')

@section('contenido')

@if(session()->has('confirmacion'))

{!! "<script>
Swal.fire(
    'Good job!',
    'Tu recuerdo llegó!',
    'success'
)
</script>"!!}


@endif

@if(session()->has('confirma'))

{!! "<script>Swal.fire('Nice!','Form Completed','success')</script>"!!}

@endif


<div class="container col-md-4">
  <h1 class="display-4 text-center mt-3 mb-5">Ingresar</h1>

    
        <form action="comprobarForm" method="POST">

          <!-- No olvidar esta función
          El action manda el formulario a un controlador-->
          @csrf

          <!--AAAAAaaa RECUERDA QUE SE USA NAME Y NO ID SI NO NO LO RECONOCE-->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name:</label>
                <input type="text" class="form-control" name="txtName" aria-describedby="emailHelp">
                <p class='text-danger fst-italic fw-bold text-start'>{{$errors->first('txtName')}}</p> 
            
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age:</label>
                <input type="text" class="form-control" name="nbAge" aria-describedby="emailHelp">
                <p class='text-danger fst-italic fw-bold text-start'>{{$errors->first('nbAge')}}</p> 

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelp">
                <p class='text-danger fst-italic fw-bold text-start'>{{$errors->first('txtEmail')}}</p> 
           
              </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" class="form-control" name="txtPassWord">
                <p class='text-danger fst-italic fw-bold text-start'>{{$errors->first('txtPassWord')}}</p> 
            
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>

@stop
