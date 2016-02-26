<!DOCTYPE html>
<html>
<head>
  <title>Maintenance Profile</title>
  <meta charset="UTF-8">
  <meta name="_token" content="{!! csrf_token() !!}"/>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

</head>

<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  function profile($id)
  {

    var request = $.ajax({
      url: "/profile/delete/",
      method: "GET",
      dataType:'json',
      data: { "id" : $id},

    });

    request.done(function( msg) {
      if (msg.status === "valid") {
        alert("Eliminado");

        $(".tableProfile").load();

      } 
      else 
      {
        alert('No Eliminado');

      }

    });

    request.fail(function( jqXHR, textStatus ) {
      alert( "Request failed: " + textStatus );

    }); 
    

  }

</script>


<body>

  <a class="btn-floating btn-large waves-effect waves-light red moreProfile col-m4 offset-m2"><i class="material-icons">add</i></a>

  <div class="container">
    <div class="row">
      <div class="col m12 offset-m1">

        <table  class="bordered tableProfile centered section scrollspy" >
          <thead>
            <tr class ="columnProfile">
              <th data-field="name">Nombre del Perfil</th>
              <th data-field="action">Accion</th>
              <th data-field="active"></th>
            </tr>
          </thead>

          <tbody>

            @foreach ($profiles as $raw)          
            <tr>

              <td  class="lineProfile">{{ $raw->name }}</td>
              <td  class="lineProfile">
                <button type='button' name='update' id="update" class="btn-floating btn-large waves-effect waves-light btn" value={{ $raw->id }}>   <i class="material-icons">update</i></button>

                <button type='button' name='delete' id="delete" class="btn-floating btn-large waves-effect waves-light btn"  value="{{{ csrf_token() }}}" onclick="profile({{ $raw->id }});">
                 <i class="material-icons">delete_forever</i>
               </button>   
             </td>

             <td class="lineProfile">
               <div class="switch">
                <label>
                  Inactivo
                  <input type="checkbox" checked>
                  <span class="lever"></span>
                  Activo
                </label>
              </div>

            </td>

          </tr>        
          @endforeach


        </tbody>

      </table>

    </div>
  </div>
</div>


<script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>