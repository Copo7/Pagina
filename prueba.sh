        A)
        objetivo=5
        suma=0
        limite=0
        while ["$suma" -lt "$objetivo" ]; do
        read -p "introduce un numero :" numero
        suma=$((suma + numero))
        limite=$((limite + 1))
        done
        echo "La suma total es: $suma"
        echo "Se alcanzo el objetivo en $intentos intentos"
        ;;
      
        B)
        read -p "tipo de incidencia (pantalla, limpieza, roto):" incidencia
        read -p "digame su nombre: " nombre
        read -p "elija tipo de reparacion (rapida, lenta):" reparacion
        $valorinc=0
        $dineroA=175
        $dineroB=25
        $dineroC=150
        if [[ "$incidencia" == pantalla ]]; then
        $valorinc=$((valorinc + dineroC))
        elif [[ "$incidencia" == limpieza ]]; then
        $valorinc=$((valorinc + dineroB))
        else
        $valorinc=$((valorinc + dineroA))
        fi
        echo "señor $nombre la incidencia $incidencia vale $valorinc"
        ;;
     
        D)
        read -p "Numero de telefonos:" numero;
        read -p "Nombre cliente:" cliente;
        let precio=$numero*100; echo "vale $precio"
        if [[ $numero -ge 3 ]]; then
        precio=$((precio - 5))
        elif [[ $numero -ge 5 ]]; then
        precio=$((precio - 10))
        else
        precio=$((precio + 0))
        fi
        ;;


        



