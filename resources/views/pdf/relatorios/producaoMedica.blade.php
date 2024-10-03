<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espelho de Pagamento Analítico</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
    }
    .container {
      width: 100%;
      margin: 0 auto;
    }
    .header {
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .info {
      margin-bottom: 10px;
    }
    .info strong {
      display: inline-block;
      width: 150px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    table, th, td {
      border: 1px solid black;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
    .totals {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="header">
    <h2>Espelho de Pagamento Analítico</h2>
    <p>Competência: 2023/12</p>
  </div>

  <div class="info">
    <p><strong>Prest. Recebedor:</strong> SAID IBRAHIM</p>
    <p><strong>Classe Prestador:</strong> COOPERADO</p>
    <p><strong>Contrato Financeiro:</strong> 317000000683</p>
    <p><strong>Registro CNES:</strong> 6328695</p>
    <p><strong>Nº Provisório:</strong> 91803</p>
    <p><strong>Nº Doc Financeiro:</strong> 2625623</p>
  </div>

  <table>
    <thead>
    <tr>
      <th>Data/Hora</th>
      <th>Beneficiário</th>
      <th>Serviço</th>
      <th>Qtde</th>
      <th>Valor Unitário</th>
      <th>Valor Pago</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>01/12/2023 08:18:21</td>
      <td>ADÃO RODRIGUES DA CRUZ</td>
      <td>Consulta em consultório</td>
      <td>1</td>
      <td>R$ 115,00</td>
      <td>R$ 115,00</td>
    </tr>
    <tr>
      <td>08/12/2023 08:17:52</td>
      <td>ADÍLIO JORGE SABINO</td>
      <td>Consulta em consultório</td>
      <td>1</td>
      <td>R$ 115,00</td>
      <td>R$ 115,00</td>
    </tr>
    <!-- Adicionar mais linhas conforme necessário -->
    </tbody>
  </table>

  <div class="totals">
    <p><strong>Total Pago:</strong> R$ 3.975,53</p>
    <p><strong>Impostos:</strong></p>
    <p><strong>INSS:</strong> R$ 795,11</p>
    <p><strong>Imposto de Renda:</strong> R$ 106,66</p>
  </div>
</div>
</body>
</html>
