<!DOCTYPE html>
<html>
<body>
 
	<form>
		<table border="1" cellspacing="0">
			<tr bgcolor="#1E90FF">
				<th>No</th>
				<th>Nama</th>
				<th>kelas</th>
			</tr>
            
            <?php  for ($no = 1, $i=1, $a=10; $i<=10, $a>=1  ; $i++, $a--) { ?> 
 
        <tr bgcolor='<?php if ($no%2==1) echo"#C0C0C0"; else echo "#FFFFFF"; ?>' >
            <td> <?php echo $no; ?></td>
            <td><?php echo "Nama Ke $i"; ?></td>
            <td><?php echo "Kelas $a"; ?></td>
        </tr>

        <?php $no++; } ?>
 
		</table>
	</form>
</body>
</html>
