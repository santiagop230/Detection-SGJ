
<table>
        <tr>
            <th>cpu</th>
            <th> tarjeta de video</th>
        </tr>
        <tr>
            <td id="cpu1">1 GHz</td>
            <td id="tar1">DirectX 9 con soporte de controladores WDDM 1.0</td>
        </tr>
        <tr>
            <td id="cpu2">valor3</td>
            <td id="tar2">valor4</td>
        </tr>
    </table>
    <script>
        let cpu1 = document.getElementById("cpu1")
        let cpu2 = document.getElementById("cpu2")
        let zzz = document.getElementsByName("nombre")
        console.log(cpu1)
        console.log(cpu2)
        console.log(zzz)
        if (cpu1.textContent === "1 GHz"){
            console.log ("sis")
        }else{
            console.log("non")
        }
        if (zzz.value === "C:\fakepath\CPE-PC.html"){
            console.log ("sis")
        }else{
            console.log("non")
        }
    </script>