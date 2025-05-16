document.addEventListener("DOMContentLoaded", function () {
  var alertaErro = document.getElementById("alertaErro");
  if (alertaErro) {
    var btnFechar = document.getElementById("btnFecharAlerta");
    if (btnFechar) {
      btnFechar.addEventListener("click", function () {
        alertaErro.style.display = "none";
      });
    }
  }

  function limparZerosESoNumeros(input) {
    let valor = input.value;
    valor = valor.replace(/\D/g, "");
    valor = valor.replace(/^0+(?!$)/, "");
    input.value = valor;
  }

  document.getElementById("codigo").addEventListener("input", function () {
    limparZerosESoNumeros(this);
  });

  document.getElementById("quantidade").addEventListener("input", function () {
    limparZerosESoNumeros(this);
  });

document.getElementById('valor').addEventListener('input', function () {
	let val = this.value;

	val = val.replace(/[^0-9.,]/g, '');
	val = val.replace(',', '.');
	const parts = val.split('.');
	if (parts.length > 2) {
		val = parts[0] + '.' + parts.slice(1).join('');
	}

	this.value = val;
});

});
