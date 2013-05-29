<?php
$fp = fopen('php://output','w+');
fputcsv($fp, array(
    'id', 'category', 'kill_chain', 'type', 'time_start', 'time_end', 'value', 'to_ids', 'blacklist', 'malware_research',
    'vuln_mgt', 'event_id', 'event_detect_time', 'event_threat_type', 'event_threat_level', 'event_targeted_domain',
    'event_info', 'event_start_time', 'event_end_time'
));
foreach($event['Attribute'] as $row) {
    fputcsv($fp, array(
        $row['id'], $row['category'], $row['KillChain']['kill_chain'], $row['type'], $row['time_start'], $row['time_end'],
        $row['value'], $row['to_ids'], $row['blacklist'], $row['malware_eradication'], $row['vulnerability_management'],
        $row['event_id'], $event['Event']['detect_time'], $event['Event']['ThreatType'], $event['ThreatLevel']['name'],
        $event['TargetedDomain']['domain'], $event['Event']['info'], $event['Event']['start_time'], $event['Event']['end_time']
        )
    );
}
fclose($fp);
