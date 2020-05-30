$(document).ready(function () {//collapse sidebar
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});

$('#toggle-consultar').click(function(){
    $('#consultar').toggle();
});

$('#toggle-registrar').click(function(){
    $('#registrar').toggle();
});
//                                      REDIRECCION A REGISTRO CATEGORIAS
//Cargar pagina Registo Impuesto
function registroImpuesto(){
    const ruta = "views/registro.php/?id=1&nombre=Impuestos";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Registo Servicios
function registroServicios(){
    const ruta = "views/registro.php/?id=2&nombre=Servicios%20Publicos";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Registo Seguros
function registroSeguros(){
    const ruta = "views/registro.php/?id=3&nombre=Seguros";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Registo Mantenimiento
function registroMantenimiento(){
    const ruta = "views/registro.php/?id=4&nombre=Mantenimiento";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Registo Reparacion
function registroReparacion(){
    const ruta = "views/registro.php/?id=5&nombre=Reparacion";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//                                          REDIRECCION A CONSULTA CATEGORIAS
//Cargar pagina Consulta Impuesto
function consultaImpuetso(){
    let ruta = "views/consulta.php/?id=1&nombre=Impuesto";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Consulta Servicios
function consultaServicios(){
    let ruta = "views/consulta.php/?id=2&nombre=Servicios";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Consulta Seguros
function consultaSeguros(){
    let ruta = "views/consulta.php/?id=3&nombre=Seguros";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Consulta Mantenimiento
function consultaMantenimiento(){
    let ruta = "views/consulta.php/?id=4&nombre=Mantenimiento";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}
//Cargar pagina Consulta Reparacion
function consultaReparacion(){
    let ruta = "views/consulta.php/?id=5&nombre=Reparacion";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
    })
}

//                                          Redireccion a consulta Entrada por categoria
//cargar pagina consulta E Impuesto
/*function consultaEntradas(){
    let ruta = "views/entradaCategoria.php?id=2&nombre=Impuesto";
    $('#contenido').show(function(){
        var container = $('#contenido').append('<div class="container"></div>');
        container.load(ruta);
})
}*/

$("#valor").on({
    "focus": function(event) {
      $(event.target).select();
    },
    "keyup": function(event) {
      $(event.target).val(function(index, value) {
        return value.replace(/\D/g, "")
          .replace(/([0-9])([0-9]{3})$/, '$1 $2')
          .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, " ");
      });
    }
  });

$('#registro-1').on('click', registroImpuesto);
$('#registro-2').on('click', registroServicios);
$('#registro-3').on('click', registroSeguros);
$('#registro-4').on('click', registroMantenimiento);
$('#registro-5').on('click', registroReparacion);

$('#consulta-1').on('click', consultaImpuetso);
$('#consulta-2').on('click', consultaServicios);
$('#consulta-3').on('click', consultaSeguros);
$('#consulta-4').on('click', consultaMantenimiento);
$('#consulta-5').on('click', consultaReparacion);
