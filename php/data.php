<?php

return array(
	'uvrap' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"0","id":"metrics/visitors"},{"columnId":"1","id":"cm300000938_5dcea9620529251ef42f8ded","sort":"desc"}]},"dimension":"variables/evar22","search":{"clause":"( MATCH \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":1,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'snm' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","sort":"desc","filters":["0"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5e08342fbc5fc40505758fe4"}]},"dimension":"variables/evar19","search":{"clause":"( CONTAINS \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'srch' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","filters":["0","1"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5e08342fbc5fc40505758fe4"},{"id":"1","type":"breakdown","dimension":"variables/evar19","itemId":"%s"}]},"dimension":"variables/evar50","settings":{"countRepeatInstances":true,"limit":4,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'pltfrm' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","sort":"desc","filters":["0"]},{"columnId":"2","id":"metrics/visits","filters":["1"]},{"columnId":"3","id":"metrics/visits","filters":["2"]},{"columnId":"4","id":"metrics/visits","filters":["3"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5d2f4947546d675d29e8817b"},{"id":"1","type":"segment","segmentId":"s300000938_5e0e240f1212e638f4382d0d"},{"id":"2","type":"segment","segmentId":"s300000938_5e0e2426b81a6c715e018e90"},{"id":"3","type":"segment","segmentId":"s300000938_5c6d65e5cfb25208c24ebcd1"}]},"dimension":"variables/evar22","search":{"clause":"( MATCH \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'trndB' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[',
    //{"columnId":"1","id":"metrics/visits","sort":"desc","filters":["0"]},{"columnId":"2","id":"metrics/visits","filters":["1"]},{"columnId":"3","id":"metrics/visits","filters":["2"]},{"columnId":"4","id":"metrics/visits","filters":["3"]},{"columnId":"5","id":"metrics/visits","filters":["4"]},{"columnId":"6","id":"metrics/visits","filters":["5"]},{"columnId":"7","id":"metrics/visits","filters":["6"]},{"columnId":"8","id":"metrics/visits","filters":["7"]},{"columnId":"9","id":"metrics/visits","filters":["8"]},{"columnId":"10","id":"metrics/visits","filters":["9"]},{"columnId":"11","id":"metrics/visits","filters":["10"]},{"columnId":"12","id":"metrics/visits","filters":["11"]}
    'trndMA1' => '{"columnId":"%s","id":"metrics/visits","filters":["%s"]},',
    'trndMS' => '],"metricFilters":[',
    //,{"id":"1","type":"dateRange","dateRange":"%s"},{"id":"2","type":"dateRange","dateRange":"%s"},{"id":"3","type":"dateRange","dateRange":"%s"},{"id":"4","type":"dateRange","dateRange":"%s"},{"id":"5","type":"dateRange","dateRange":"%s"},{"id":"6","type":"dateRange","dateRange":"%s"},{"id":"7","type":"dateRange","dateRange":"%s"},{"id":"8","type":"dateRange","dateRange":"%s"},{"id":"9","type":"dateRange","dateRange":"%s"},{"id":"10","type":"dateRange","dateRange":"%s"},{"id":"11","type":"dateRange","dateRange":"%s"}
    'trndMA2' => '{"id":"%s","type":"dateRange","dateRange":"%s"},',
    'trndE' => ']},"dimension":"variables/evar22","search":{"clause":"( MATCH \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'frwrd' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"0","id":"metrics/visits","filters":["0"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar19","itemId":"%s"}]},"dimension":"variables/evar22","settings":{"countRepeatInstances":true,"limit":5,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'prvs' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"0","id":"metrics/visits","filters":["0"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar22","itemId":"%s"}]},"dimension":"variables/evar19","settings":{"countRepeatInstances":true,"limit":5,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'srchI' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"2","id":"cm300000938_5b437b86b7204e079e96509f","filters":["0","1"]},{"columnId":"3","id":"metrics/event50","filters":["2"]},{"columnId":"5","id":"metrics/event51","sort":"desc","filters":["3","4"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar52","itemId":"%s"},{"id":"1","type":"breakdown","dimension":"variables/evar22","itemId":"3432034702"},{"id":"2","type":"breakdown","dimension":"variables/evar22","itemId":"3432034702"},{"id":"3","type":"breakdown","dimension":"variables/evar52","itemId":"%s"},{"id":"4","type":"breakdown","dimension":"variables/evar22","itemId":"3432034702"}]},"dimension":"variables/evar50","settings":{"countRepeatInstances":true,"limit":10,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'srchG' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"2","id":"cm300000938_5b437b86b7204e079e96509f","filters":["0","1"]},{"columnId":"3","id":"metrics/event50","filters":["2"]},{"columnId":"5","id":"metrics/event51","sort":"desc","filters":["3","4"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar52","itemId":"%s"},{"id":"1","type":"breakdown","dimension":"variables/evar22","itemId":"3135648695"},{"id":"2","type":"breakdown","dimension":"variables/evar22","itemId":"3135648695"},{"id":"3","type":"breakdown","dimension":"variables/evar52","itemId":"%s"},{"id":"4","type":"breakdown","dimension":"variables/evar22","itemId":"3135648695"}]},"dimension":"variables/evar50","settings":{"countRepeatInstances":true,"limit":10,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'dwnld' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"0","id":"metrics/event25","sort":"desc","filters":["0"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar22","itemId":"%s"}]},"dimension":"variables/evar28","settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}',
    'outbnd' => '{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"0","id":"metrics/event26","sort":"desc","filters":["0"]}],"metricFilters":[{"id":"0","type":"breakdown","dimension":"variables/evar22","itemId":"%s"}]},"dimension":"variables/evar28","settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}'
);

/* Platform (Desktop, Phone, Tablet, All Others)

{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","sort":"desc","filters":["0"]},{"columnId":"2","id":"metrics/visits","filters":["1"]},{"columnId":"3","id":"metrics/visits","filters":["2"]},{"columnId":"4","id":"metrics/visits","filters":["3"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5d2f4947546d675d29e8817b"},{"id":"1","type":"segment","segmentId":"s300000938_5e0e240f1212e638f4382d0d"},{"id":"2","type":"segment","segmentId":"s300000938_5e0e2426b81a6c715e018e90"},{"id":"3","type":"segment","segmentId":"s300000938_5c6d65e5cfb25208c24ebcd1"}]},"dimension":"variables/evar22","search":{"clause":"( MATCH \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}
{"rsid":"canadalivemain","globalFilters":[{"type":"dateRange","dateRange":"%s/%s"}],"metricContainer":{"metrics":[{"columnId":"1","id":"metrics/visits","filters":["0"]},{"columnId":"2","id":"metrics/visits","sort":"desc","filters":["1"]}],"metricFilters":[{"id":"0","type":"segment","segmentId":"s300000938_5d84eb5c8b03435c928a8382"},{"id":"1","type":"segment","segmentId":"s300000938_5d2f4947546d675d29e8817b"}]},"dimension":"variables/evar22","search":{"clause":"( MATCH \'%s\' )"},"settings":{"countRepeatInstances":true,"limit":50,"page":0,"nonesBehavior":"return-nones"},"statistics":{"functions":["col-max","col-min"]}}
*/
?>
