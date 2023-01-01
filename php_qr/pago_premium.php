<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_pago.css">
    <link rel="shortcut icon" href="../imagenes/logotipo.png">
    <title>HelpQR</title>
</head>
<body>
    <div class='container'>
        <div class='window'>
          <div class='order-info'>
            <div class='order-info-content'>
              <h2>Carrito</h2>
                      <div class='line'></div>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='https://dl.dropboxusercontent.com/s/nbr4koso8dpoggs/6136C1p5FjL._SL1500_.jpg' class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Plan Premium</span>
                      <br>Double Lunchbox<br> <span class='thin small'> 30 días</span>
                    </td>
      
                  </tr>
                </tbody>
              </table>
              <div class='line'></div>
              <div class='total'>
                <span style='float:left;'>
                  TOTAL
                </span>
                <span style='float:right; text-align:right;'>
                  US $10
                </span>
              </div>
      </div>
      </div>
              <div class='credit-info'>
                <div class='credit-info-content'>
                  <table class='half-input-table'>
                    <tr><td>Seleccione su tarjeta: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                      <div class='dropdown-select'>
                      <ul>
                        <li>Master Card</li>
                        </ul></div>
                      </div>
                     </td></tr>
                  </table>
                  <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                  Número de tarjeta
                  <input class='input-field' maxlength="16"></input>
                  Titular
                  <input class='input-field'></input>
                  <table class='half-input-table'>
                    <tr>
                      <td> Vencimiento
                        <input class='input-field' required maxlength="8"></input>
                      </td>
                      <td>Código de seguridad
                        <input class='input-field' required minlength="4" maxlength="4"></input>
                      </td>
                    </tr>
                  </table>
                  <button onclick="location.href='plan_premium.php'" class='pay-btn'>Comprar</button>
      
                </div>
      
              </div>
            </div>
      </div>

      <script src="../js/pago.js"></script>
</body>
</html>