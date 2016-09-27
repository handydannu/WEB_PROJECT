<?php
	class ABCmysqlDumper
	{
		private $db;
		private $dbname;
		
		function __construct($db_host, $db_name, $db_user, $db_pwd)
		{
			$this->dbname = $db_name;	
			$this->db = new mysqli($db_host, $db_user, $db_pwd, $db_name);
			
			if ($this->db->connect_errno)
			{
				echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
				exit();
			}	
		}
		
		function __destruct()
		{
			mysqli_close($this->db);
		}
		
		public function generateDump($saveFile = true, $fileName = '')
		{
			$file = '';
			if ($result = $this->db->query('SHOW TABLES FROM ' . $this->dbname))
			{
				
				while($row = $result->fetch_row())
				{
					$file .=	" Table structure for table: '{$row[0]}' \r\n"	. $this->getTableStruct($row[0])	. "\r\n" .
								" Data for table: '{$row[0]}' \r\n" 				. $this->getTableData($row[0])		. "\r\n\r\n" ;
				}
				
				$result->close(); 
				
				if($saveFile)
				{
					if($fileName == '')	
						$fileName = $this->dbname . '-' . date('d_M_Y_His');
					
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=' . $fileName . '.sql');
					header('Pragma: no-cache');
					
					ob_clean();
					flush();
					
					echo $file;
				}
				else
					return $file;	
			}
			else
			{
				return false;
			}
		}
		
		private function getTableStruct($tbl_name)
		{
			if ($row = $this->db->query('DESCRIBE ' . $tbl_name))
			{
			
				$tbl_primary = ''; 
				while($r = $row->fetch_row())
				{
					
					if( $r[3] == 'PRI' )
						$tbl_primary = "PRIMARY KEY ('{$r[0]}')";
										
					$fields[] = trim( '' . $r[0] . '' . $r[1] . ($r[2]=='NO'?' NOT NULL ':' ') . (empty($r[4])?'':"DEFAULT '{$r[4]}' ") . $r[5] );
				}
				
				$fields[] = $tbl_primary; 
				
				/* Create the table strucutre with the fields */
				$tbl_struct	=	"CREATE TABLE IF NOT EXISTS '{$tbl_name}' ( \r\n " 
									. implode(",\r\n  ", $fields) . 
								"\r\n);";
				
				unset($fields); 
				$row->close();
				
				return $tbl_struct; 
			}
			else
				exit('ERROR: Unable to fetch the structure of the table - ' . $tbl_name);
		}
		
		private function getTableData($tbl_name)
		{
		
			if ($row = $this->db->query('SELECT * FROM ' . $tbl_name))
			{
				$total_rec = $row->num_rows;
				
				$records = array();
				if($r = $row->fetch_assoc())
				{
					
					$k = array();
					$v = array();
					foreach($r as $key=>$value)
					{
						$k[] = "'{$key}'";
						$v[] = "'{$value}'";
					}
					$records[] = '(' . implode(', ', $v) . ')'; 
					while($r = $row->fetch_row())
					{
						$records[] = "('" . implode("', '", $r) . "')";
					}
					
					$tbl_data =	"INSERT INTO `{$tbl_name}` (" . implode(', ', $k) . ") VALUES\r\n"
									. implode(",\r\n", $records) .
								";\r\n--- Total records in table '{$tbl_name}' = {$total_rec}";
					
					unset($records); 
					$row->close();
					
					return $tbl_data; 
				}
				else
				{
					$row->close();
					return '';
				}
			}
			else
				exit('ERROR: Unable to fetch the date from the table - ' . $tbl_name);
		}
	}
?>