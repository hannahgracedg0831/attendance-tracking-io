<?php
function countPend($type){
	date_default_timezone_set("Singapore");
					$date = date('Y-m-d');
					$datelogs = file_get_contents('../jsonLogs/date-logs.json');
					$logsdate = json_decode($datelogs, true);
					$count=0;
					foreach ($logsdate as $key => $value) {
						foreach ($value as $k => $v) {
							if($v['date']==$date){
												
					
						$data = file_get_contents('../jsonLogs/'.$date.'.json');
						$Logs = json_decode($data, true);

						foreach ($Logs as $key => $value) {
							foreach ($value as $k => $v) {

							if($v['type']==$type){
								if(empty($v['TimeOut'])){

									
$count++;
					} 
						}
					}
				}
			}
		}
	} return $count;
	}





?>