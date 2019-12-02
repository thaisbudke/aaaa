<style>
table.redTable {
  border: 2px solid #A40808;
  background-color: #EEE7DB;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.redTable td, table.redTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.redTable tbody td {
  font-size: 13px;
}
table.redTable tr:nth-child(even) {
  background: #F5C8BF;
}
table.redTable thead {
  background: #A40808;
}
table.redTable thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #A40808;
}
table.redTable thead th:first-child {
  border-left: none;
}

table.redTable tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #A40808;
}
table.redTable tfoot td {
  font-size: 13px;
}
table.redTable tfoot .links {
  text-align: right;
}
table.redTable tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #A40808;
  padding: 2px 8px;
  border-radius: 5px;
}
.myButton {
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
	background-color:#d0451b;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:11px 13px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}
.myButton:hover {
	background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
	background-color:#bc3315;
}
.myButton:active {
	position:relative;
	top:1px;
}

        
</style>



<h1 style="color: #8B0000">Artigos</h1>

<table class="redTable">
<thead>
<tr>
        <th style="font-size:30px" scope="col">#</th>
      <th style="font-size:30px" scope="col">Título</th>
      <th style="font-size:30px" scope="col">Descrição</th>
      <th style="font-size:30px" scope="col">Data</th>
      <th style="font-size:30px" scope="col">Empresa</th>
      <th style="font-size:30px" scope="col">Orientador</th>
      <th style="font-size:30px" scope="col">Banca 1</th>
      <th style="font-size:30px" scope="col">Banca 2</th>
      <th style="font-size:30px" scope="col">Resultado</th>
</tr>
</thead>

<tbody>
  @foreach ($result as $row)
  
    <tr>
      <th style="font-size:30px" scope="row">{{$row->id}}</th>
      <td style="font-size:30px">{{$row->titulo}}</td>
      <td style="font-size:30px">{{$row->descricao}}</td>
      <td style="font-size:30px">{{$row->data}}</td>
      <td style="font-size:30px">{{$row->empresa}}</td>
      <td style="font-size:30px">{{$row->orientador}}</td>
      <td style="font-size:30px">{{$row->banca1}}</td>
      <td style="font-size:30px">{{$row->banca2}}</td>
      <td style="font-size:30px">{{$row->resultado}}</td>
     
    </tr>
  @endforeach
  
  
  </tbody>
</table>
<br>
<a class="myButton" href="/home">Início</a>