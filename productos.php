<html>
	<head><Meta  name = "description"  content = "Example de HTML5"  />
		    <Meta  name = "keywords"  content = "HTML5, CSS3, JavaScript"  />
        <Title> Factura</title></head>
		<body>
			<div>
				<Form action ="factura.php" method="POST";
				<h1>Productos<h1>
			</div>
				 <table>
					 <tr>
                    <th>CANT.</th>
                    <th>DESCRIPCI&Oacute;N</th>
                    <th>PR&Eacute;CIO U.</th>
					
						<tr>
						<td><input type="text" size="3" maxlength="3" id="cantidad1" name="cantidad1"/>
						<td><input type="text" size="50" maxlength="50" id="descripcion1" name="descripcion1"/>
						<td><input type="text" size="8" maxlength="8" id="precio1" name="precio1"/>
						</td>
						</tr>
						
						<tr>
						<td><input type="text" size="3" maxlength="3" id="cantidad2" name="cantidad2"/>
						<td><input type="text" size="50" maxlength="50" id="descripcion2" name="descripcion2"/>
						<td><input type="text" size="8" maxlength="8" id="precio2" name="precio2"/>
						</td>
						</tr>
						
						<tr>
						<td><input type="text" size="3" maxlength="3" id="cantidad3" name="cantidad3"/>
						<td><input type="text" size="50" maxlength="50" id="descripcion3" name="descripcion3"/>
						<td><input type="text" size="8" maxlength="8" id="precio3" name="precio3"/>
						</td>
						</tr>
		
					</tr>
					
				 </table>
						
						<input type="submit"  name="total"  value="total"/>
						
				</form>
		</body>
</html>