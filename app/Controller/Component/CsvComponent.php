<?php
class CsvComponent extends Component{

    public $defaults = array(
        'length' => 0,
        'delimiter' => ',',
        'enclosure' => '"',
        'escape' => '\\',
        'headers' => true,
        'text' => false,
    );

    function initialize(&$controller, $settings = array()){
        // saving the controller reference for later use
        $this->controller = $controller;
        $this->defaults = array_merge($this->defaults, $settings);
    }


    function import($filename, $fields = array(), $options = array()){
        $options = array_merge($this->defaults, $options);
        $data = array();

        if($file = @fopen(TMP . $filename, 'r')){
            if(empty($fields)){
                $fields = fgetcsv($file, $options['length'], $options['delimiter'], $options['enclosure']);
            }

            $r = -1;
            while($row = fgetcsv($file, $options['length'], $options['delimiter'], $options['enclosure'])) {
                foreach ($fields as $f => $field) {
                    if($r > -1){
                        // get the data field from Model.field
                        if (strpos($field,'.')) {
                            $keys = explode('.',$field);
                            if (isset($keys[2])) {
                                $data[$r][$keys[0]][$keys[1]][$keys[2]] = $row[$f];
                            } else {
                                $data[$r][$keys[0]][$keys[1]] = $row[$f];
                            }
                        } else {
                            $data[$r][$this->controller->modelClass][$field] = $row[$f];
                        }
                    }
                }
                $r++;
            }
            fclose($file);
            return $data;
        }
        return false;
    }

    public function export($filename, $data, $options = array()) {
        $options = array_merge($this->defaults, $options);

        if ($file = @fopen(TMP . $filename, 'w')) {
            $firstRecord = true;
            foreach($data as $record) {
                $row = array();
                foreach($record as $model => $fields) {
                    // TODO add parsing for HABTM
                    foreach($fields as $field => $value) {
                        if (!is_array($value)) {
                            if ($firstRecord) {
                                //$headers[] = $model . '.' . $field;
                                $headers[] = $field;
                            }
                            $row[] = preg_replace( '/\r\n/', ' ', trim($value) );
                        }else{
                            // HABTM
                        }
                    }
                }
                $rows[] = $row;
                $firstRecord = false;
            }

            if ($options['headers']) {
                fputcsv($file, $headers, $options['delimiter'], $options['enclosure']);
            }
            $r = 0;
            foreach($rows as $row) {
                fputcsv($file, $row, $options['delimiter'], $options['enclosure']);
                $r++;
            }

            fclose($file);
            return $r;
        }
        return false;
    }
}